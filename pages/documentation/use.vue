<template>
    <div>
        <h6>Creating websites</h6>

        <p>
            Tenants in Hyn in fact are websites. Multiple domains can resolve to the same website. By creating
            a website one already has a tenant to handle requests.
        </p>

        <pre v-highlightjs>
            <code class="php">
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;

$website = new Website;
app(WebsiteRepository::class)->create($website);
echo $website->uuid; // Unique id
            </code>
        </pre>

        <v-alert info :value="true">
            Some pointers based on the above example:
            <ul>
                <li>Linking a Customer to a Website is optional.</li>
                <li>Websites can have zero or more Hostnames.</li>
                <li>Always process create, update and delete calls through the repository.</li>
                <li>A unique UUID is automatically generated based on your configuration.</li>
            </ul>
        </v-alert>


        <br>
        <h6>Connecting a domain</h6>

        <p>
            Without a hostname the tenancy app you are creating cannot identify to which website
            incoming requests should be send. Let's get rid of this bottleneck by attaching a
            hostname to your previous website.
        </p>


        <pre v-highlightjs>
            <code class="php">
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;

$hostname = new Hostname;
$hostname->fqdn = 'luceos.demo.app';
app(HostnameRepository::class)->attach($hostname, $website);
echo $website->hostnames; // Collection with $hostname
            </code>
        </pre>

        <h6>Tenant directory structure</h6>

        <p>
            A typically, fully enabled tenant directory holds the following structure.
        </p>

        <pre v-highlightjs>
            <code class="bash">
config/                 // 1.
config/cache.php
routes.php              // 2.
lang/                   // 3.
lang/en/validation.php
composer.json
vendor/autoload.php     // 4.
            </code>
        </pre>

        <ol>
            <li>Any file in a config directory is merged in the global configuration settings store.</li>
            <li>The tenant routes.php file adds new routes specific for this tenant website.</li>
            <li>Files inside the lang folder are added to the global translations.</li>
            <li>Additional tenant logic can be added with composer; the vendor autoloader file is added to the runtime.</li>
        </ol>

        <h6>Retrieving information</h6>

        <p>
            To get the currently active tenant information, resolve the <code>Hyn\Tenancy\Environment</code>
            through ioc. The Environment has several useful accessor and a setter;
        </p>

        <pre v-highlightjs>
            <code class="php">
$tenancy = app(Hyn\Tenancy\Environment::class);
$tenancy->website();            // resolves the currently active website
$tenancy->hostname();           // resolves the currently active hostname
$tenancy->customer();           // resolves the currently active customer

$tenancy->hostname($hostname);  // sets the currently active hostname
$tenancy->identifyHostname();   // resets current hostname resolving to auto identification using request
            </code>
        </pre>

        <p>
            You might need to retrieve a list of websites, hostnames or customers. To support this functionality,
            use the corresponding repositories and the <code>query()</code> method.
        </p>
        <ul>
            <li><code>Hyn\Tenancy\Contracts\Repositories\CustomerRepository</code></li>
            <li><code>Hyn\Tenancy\Contracts\Repositories\HostnameRepository</code></li>
            <li><code>Hyn\Tenancy\Contracts\Repositories\WebsiteRepository</code></li>
        </ul>
    </div>
</template>
