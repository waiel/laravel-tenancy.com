Tenancy is heavily driven by events. For event listeners to properly work, you
have to use the repositories to create new websites, hostnames and customers.

##### Create website

```php
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;

$website = new Website;
app(WebsiteRepository::class)->create($website);
dd($website->uuid); // Unique id
```

##### Create and connect hostname

```php
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;

$hostname = new Hostname;
$hostname->fqdn = 'luceos.demo.app';
app(HostnameRepository::class)->attach($hostname, $website);
dd($website->hostnames); // Collection with $hostname
```

##### Switch to new tenant

```php
use Hyn\Tenancy\Environment;
$tenancy = app(Environment::class);

$tenancy->hostname($hostname);

$tenancy->hostname(); // resolves $hostname as currently active hostname
$tenancy->website(); // resolves $website
$tenancy->customer(); // resolves $customer

$tenancy->identifyHostname(); // resets resolving $hostname by using the Request
```

##### Querying

In case you would like to query the database for hostnames, websites or customers. Use the
`query()` method of the repositories, this will return a [`Illuminate\Database\Eloquent\Builder`][query-builder]
instance.

[query-builder]: https://laravel.com/docs/5.5/queries