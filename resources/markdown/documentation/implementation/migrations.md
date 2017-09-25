Migrations are extremely important in the Laravel ecosystem. To facilitate
tenants with this flow, without interfering with its logic migration commands
for tenants have been given their own namespace `tenancy:`.

##### About the database/migrations path

It's not wise to store the tenant specific migrations inside your global
database/migrations directory. Laravel by default runs these migrations
when calling the `php artisan migrate` command. Even though you can suggest
a connection during that command, it's much cleaner to store these migrations
inside your tenancy directory, eg `storage/app/tenancy/migrations` for instance.

##### Default migrations for new tenants

If you want new tenants to be migrated by default, you can easily do so. In
your `tenancy.php` configuration set `db > tenant-migrations-path` to a valid
path and all your new tenants will run these migrations per default.