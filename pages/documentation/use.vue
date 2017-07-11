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
    </div>
</template>
