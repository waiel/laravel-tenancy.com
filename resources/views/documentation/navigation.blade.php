<v-expansion-panel popout expand>
    <v-expansion-panel-content :value="pathStartsWith('/documentation/introduction'){{ $open or false ? ' || true' : '' }}">
        <div slot="header">Getting started</div>
        <v-card>
            <v-card-text>
                <v-list>
                    <v-list-tile
                            avatar
                            href="{{ route('docs.page', ['segment' => 'introduction/requirements']) }}"
                            :value="pathStartsWith('/documentation/introduction/requirements')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-format-list-checks</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Requirements</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'introduction/installation']) }}"
                            :value="pathStartsWith('/documentation/introduction/installation')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-console</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Installation</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'introduction/configuration']) }}"
                            :value="pathStartsWith('/documentation/introduction/configuration')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-tune</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Configuration</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
    <v-expansion-panel-content :value="pathStartsWith('/documentation/tenant'){{ $open or false ? ' || true' : '' }}">
        <div slot="header">Tenant principles</div>
        <v-card>
            <v-card-text>
                <v-list two-line>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'tenant/concepts']) }}"
                            :value="pathStartsWith('/documentation/tenant/concepts')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-chart-bubble</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Concepts</v-list-tile-title>
                            <v-list-tile-sub-title>Website, hostname and customer</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'tenant/structure']) }}"
                            :value="pathStartsWith('/documentation/tenant/structure')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-file-tree</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Directory structure</v-list-tile-title>
                            <v-list-tile-sub-title>Tenant specific files and storage configuration</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'tenant/identification']) }}"
                            :value="pathStartsWith('/documentation/tenant/identification')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-link</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Identification</v-list-tile-title>
                            <v-list-tile-sub-title>Activating a tenant, automatically and manually</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'tenant/middleware']) }}"
                            :value="pathStartsWith('/documentation/tenant/middleware')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-login-variant</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Automatic actions</v-list-tile-title>
                            <v-list-tile-sub-title>Maintenance, forced SSL and redirection</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
    <v-expansion-panel-content :value="pathStartsWith('/documentation/implementation'){{ $open or false ? ' || true' : '' }}">
        <div slot="header">Implementation</div>
        <v-card>
            <v-card-text>
                <v-list>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/models']) }}"
                            :value="pathStartsWith('/documentation/implementation/models')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-pipe-disconnected</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Models</v-list-tile-title>
                            <v-list-tile-sub-title>Tenant and system models</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/repositories']) }}"
                            :value="pathStartsWith('/documentation/implementation/repositories')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-store</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Repositories</v-list-tile-title>
                            <v-list-tile-sub-title>Persisting system data</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/filesystem']) }}"
                            :value="pathStartsWith('/documentation/implementation/filesystem')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-file-tree</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Filesystem</v-list-tile-title>
                            <v-list-tile-sub-title>Mutating tenant directories</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/migrations']) }}"
                            :value="pathStartsWith('/documentation/implementation/migrations')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-database-plus</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Migrations</v-list-tile-title>
                            <v-list-tile-sub-title>Running database changes</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/connections']) }}"
                            :value="pathStartsWith('/documentation/implementation/connections')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-database</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Database connections</v-list-tile-title>
                            <v-list-tile-sub-title>Tenant and system connections</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/queues']) }}"
                            :value="pathStartsWith('/documentation/implementation/queues')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-pipe</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Queues</v-list-tile-title>
                            <v-list-tile-sub-title>Tenant aware jobs</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'implementation/events']) }}"
                            :value="pathStartsWith('/documentation/implementation/events')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-vector-point</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Events</v-list-tile-title>
                            <v-list-tile-sub-title>Hooks and modification</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
    <v-expansion-panel-content :value="pathStartsWith('/documentation/webserver'){{ $open or false ? ' || true' : '' }}">
        <div slot="header">Webserver</div>
        <v-card>
            <v-card-text>
                <v-list>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'webserver/apache']) }}"
                            :value="pathStartsWith('/documentation/webserver/apache')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-server-plus</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Apache</v-list-tile-title>
                            <v-list-tile-sub-title>Natively integrate with Apache</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'webserver/nginx']) }}"
                            :value="pathStartsWith('/documentation/webserver/nginx')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-server-plus</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Nginx</v-list-tile-title>
                            <v-list-tile-sub-title>Natively integrate with Nginx</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
    <v-expansion-panel-content :value="pathStartsWith('/documentation/tutorials'){{ $open or false ? ' || true' : '' }}">
        <div slot="header">Tutorials</div>
        <v-card>
            <v-card-text>
                <v-list>
                    <v-list-tile avatar href="{{ route('docs.page', ['segment' => 'tutorials/spatie-laravel-permission']) }}"
                            :value="pathStartsWith('/documentation/tutorials/spatie-laravel-permission')">
                        <v-list-tile-avatar>
                            <v-icon>mdi-bookmark-plus</v-icon>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>Spatie Permission</v-list-tile-title>
                            <v-list-tile-sub-title>Integrate spatie/laravel-permission</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
</v-expansion-panel>
