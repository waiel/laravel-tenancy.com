<template>
    <div>
        <h6>Requirements</h6>

        <ul>
            <li>PHP 7.1+</li>
            <li>Linux based OS</li>
            <li>Apache 2.4+</li>
            <li>MariaDB 10+ or PostgreSQL 9+</li>
        </ul>

        <v-alert info :value="true">
            MySQL is <strong>not</strong> supported due to the database username limit of 16 characters.
        </v-alert>

        <h6>Laravel versions</h6>

        <ul>
            <li>5.3</li>
            <li>5.4</li>
            <li>5.5</li>
        </ul>

        <h6>Installation</h6>

        <p>
            Run the composer command to add the tenancy package as dependency:
        </p>

        <pre v-highlightjs>
            <code class="bash">
composer require hyn/multi-tenant
            </code>
        </pre>

        <v-alert info :value="true">
            Version 3 of hyn/multi-tenant is still under development. Set "prefer-stable": true and "minimum-stability": "beta"
            in your composer.json to download the latest beta release.
        </v-alert>

        <p>
            For Laravel <strong>5.3 and 5.4</strong>, add the service provider to your <code>config/app.php</code>:
        </p>
        <pre v-highlightjs>
            <code class="php">
    'providers' => [
        // [..]
        // Hyn multi tenancy.
        Hyn\Tenancy\Providers\TenancyProvider::class,
        // Hyn multi tenancy webserver integration.
        Hyn\Tenancy\Providers\WebserverProvider::class,
    ],
            </code>
        </pre>

        <p>
            Laravel <strong>5.5 and up</strong> offer
            <a href="https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518" target="_blank">auto discovery</a>,
            the tenancy package will be auto detected by Laravel.
        </p>

        <h6>Configuration</h6>

        <p>
            Now deploy the configuration files, so you can modify them to your needs before running the tenancy installation.
        </p>

        <pre v-highlightjs>
            <code class="bash">
php artisan vendor:publish --tag tenancy
            </code>
        </pre>

        <p>
            Open the <code>config/tenancy.php</code> and <code>config/webserver.php</code> files. The inline documentation
            should be self explanatory to get you going.
        </p>

        <v-alert info :value="true">
            Make sure you have configured the "system" connection. In case you didn't change the default in the tenancy.php config
            the "default" connection is used. The connection to that database has to work prior to installation.
        </v-alert>

        <p>
            Now run the tenancy installation command to add the necessary tables to your system database and you're good to go.
        </p>

        <pre v-highlightjs>
            <code class="bash">
php artisan tenancy:install
            </code>
        </pre>
    </div>
</template>
