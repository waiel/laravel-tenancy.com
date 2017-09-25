You are now, most likely, aware about the [directory structure][directory-structure]
available to tenants. 


##### Directory

In order to assist with mutating these contents, you can use the
Directory class available in this package.

```php
$directory = app(Hyn\Tenancy\Website\Directory::class);
```

This class is set to use the tenant currently active, but also allows you to activate
any other tenant whenever you need to using the `setWebsite(Website $website)` method.

The Directory class implements `Illuminate\Contracts\Filesystem\Filesystem` which offers
the same methods you are used to, including; `get`, `put` and `setVisibility`.

##### Disk

If you'd rather have full control over the tenant files, I suggest using the `tenant` disk
directly.

> Tenants files are by default stored to `storage/app/tenancy`, but this can be reconfigured
in the `tenancy.php` under `website > disk`. 

[directory-structure]: /documentation/tenant/structure