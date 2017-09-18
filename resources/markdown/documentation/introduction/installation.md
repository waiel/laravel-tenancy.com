Run the composer command to add the tenancy package as dependency:

```bash
composer require hyn/multi-tenant:5.*
```

Laravel offers [package auto discovery](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518)
 in version 5.5. So that's all you need to do, no need to register any
 service providers manually in your `config/app.php`.