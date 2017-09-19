During runtime, the `Environment` class is bound into Laravels container. The
tenancy environment holds one single responsibility, which is telling our code
what hostname was currently identified and resolving the related website and
customer.

##### Manual identification

The environment can be used to manually set any active tenant. This is one of the
reasons why the tenancy configuration file has the `hostname > auto-identification`
setting. Turn it off to implement your own tenancy identification.

Manual identification is pretty straightforward. Take for example the following
snippet for a custom (app) service provider: 

```php
public function boot() 
{
    $environment = $this->app->make(\Hyn\Tenancy\Environment::class);
    
    // Retrieve your hostname
    
    // Now switch the environment to a new tenant.
    $environment->hostname($hostname);
}
```

> Be wary about switching tenants. I recommend switching only once during code
execution. Use a background job and the migration connection to run mass changes
on tenant databases.