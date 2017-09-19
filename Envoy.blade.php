{{--@formatter:off--}}
@servers(['production' => ['hamburg.hyn.me']])

@setup
    require_once __DIR__ . '/vendor/autoload.php';
    (new \Dotenv\Dotenv(__DIR__, '.env'))->load();

    $keep = 3;
    $remove = $keep +1;
    $repository = 'git@github.com:hyn/laravel-tenancy.com.git';
    $now = new DateTime();
    $path = '/domains/laravel-tenancy.com/';
    $releases = $path . 'releases/';
    $release = $releases . $now->format('Ymd-His');
    $current = $path . 'current';
    $shared = $path . 'shared';
    $webUser = 'luceos';

    if (empty($branch)) {
        $branch = 'master';
    }

    $at = "-b $branch";

    if (!empty($tag)) {
        $at = "-b $tag";
    }
    $gitCloneCommand = "git clone --depth 1 $at --recursive -q --reference $release --dissociate $repository $release";
@endsetup


@story('deploy', ['parallel' => true])
    directory
    clone
    shared
    composer
    laravel
    permissions
    cleanup
    symlink
    graceful
@endstory

@task('directory')
    if [ ! -d "{{ $path }}" ]; then
        mkdir -p {{ $path }};
    fi
    if [ ! -d "{{ $shared }}" ]; then
        mkdir -p {{ $shared }};
    fi
    if [ ! -d "{{ $release }}" ]; then
        mkdir -p {{ $release }};
    fi
@endtask

@task('permissions')
    cd {{ $release }};
    sudo chown -R {{ $webUser }}: storage;
    sudo chown -R {{ $webUser }}: bootstrap/cache;
@endtask

@task('clone')
    cd {{ $release }};
    echo {{ $gitCloneCommand }};
    {{ $gitCloneCommand }};
@endtask

@task('shared')
    if [ ! -d "{{ $shared }}/storage" ]; then
        mv {{ $release }}/storage {{ $shared }}/storage;
    fi
    rm -rf {{ $release }}/storage;

    ln -s {{ $shared }}/storage {{ $release }}/storage;

    if [ ! -f "{{ $shared }}/.env" ]; then
        touch {{ $shared }}/.env;
    fi
    ln -s {{ $shared }}/.env {{ $release }}/.env;

@endtask

@task('composer')
    cd {{ $release }};
    composer install --no-dev --no-progress -o -n --prefer-dist -q;
@endtask

@task('laravel')
    cd {{ $release }};
    php artisan cache:clear;
    php artisan queue:restart;
    php artisan config:cache;
    php artisan storage:link;
    php artisan optimize;
@endtask

@task('symlink')
    if [ -L "{{ $current }}" ]; then
        rm {{ $current }}
    fi
    ln -s {{ $release }} {{ $current }};
@endtask

@task('cleanup')
    cd {{ $releases }};
    if [ `find . -maxdepth 1 -type d ! -path . | wc -l` -gt {{ $keep }} ]; then
        sudo rm -rf `ls -t | tail -n +{{ $remove }}`;
    fi
@endtask

@task('graceful')
    sudo apache2ctl graceful
@endtask

@after
@endafter

@task('rollback')
    rm -rf {{ $release }};
@endtask