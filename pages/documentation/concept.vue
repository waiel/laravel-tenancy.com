<template>
    <div>
        <h6>Core principles</h6>

        <p>
            Each tenant in this package reflects one website owned by a customer.
            A website serves the same content to one or multiple hostnames.
        </p>

        <p>
            Three database models are used to store information about your multi tenant
            app;
        </p>

        <ul>
            <li>
                <strong>Customer</strong> represents a client to your service. Using customers is optional.
                Customers are a legal entity claiming ownership of websites, hostnames and other data
                managed inside your app.
            </li>
            <li>
                <strong>Website</strong> handles calls to connected domain names by following global and tenant
                specific logic, amongst others routes.
            </li>
            <li>
                <strong>Hostname</strong> is connected to a website and by doing so regulates requests to the correct
                website. The hostname object requires a <abbr title="Fully Qualified Domain Name">FQDN</abbr>, which
                allows for regular domain names (example.com) in addition to sub domains (there.is.an.example.com).
            </li>
        </ul>

        <h6>Tenant identification</h6>

        <p>
            Unless disabled in the tenancy.php configuration, the package will automatically identify the hostname
            based on the incoming request using the <code>HostnameIdentification</code> Job executed inside the
            environment.
        </p>

        <v-alert info :value="true">
            Listen to the <code>Hyn\Tenancy\Events\Hostname\Identified</code> event to run additional logic.
        </v-alert>

        <h6>Events & Repositories</h6>

        <p>
            The package guarantees a high level of flexibility by firing off dozens of Events. By listening to
            any of these events your app can interact easily with data provided by this package.
        </p>
        <p>
            These events also trigger tasks related to your web server and database. Hence the strict requirement
            to only mutate websites, hostnames and customers via their respective repositories. Aside from doing
            the necessary validation, they also ensure that relying logic is fired. Check the
            <router-link to="/documentation/implementation">implementation guide</router-link> for more information.
        </p>
    </div>
</template>
