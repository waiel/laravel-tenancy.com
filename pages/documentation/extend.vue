<template>
    <div>
        <p>
            Now that you gained insight into the processes at hand in this package, we can look into practical
            application. This package offers several ways of assisting rapid development.
        </p>

        <h6>System vs tenant models</h6>

        <p>
            In order to distinguish between the system and tenant connection, the package offers two classes.
        </p>

        <ul>
            <li>
                <code>Hyn\Tenancy\Abstracts\SystemModel</code>, simply have your model extend this class to access
                the system database connection.
            </li>
            <li>
                <code>Hyn\Tenancy\Abstracts\TenantModel</code>, can be extended to have your model access the currently
                active tenant database connection.
            </li>
        </ul>

        <p>
            These classes are implementations of the Eloquent Model class but preconfigure the database connection.
        </p>

        <h6>Events, events ..</h6>

        <p>
            To offer as much flexibility while maintaining resilience, this package fires a wide variety of events.
            All of these live under the <code>Hyn\Tenancy\Events</code> namespace and can be listened to using
            Laravel event listening.
        </p>
    </div>
</template>
