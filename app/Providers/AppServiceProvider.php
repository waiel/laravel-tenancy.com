<?php

namespace App\Providers;

use App\Models\DocumentationPage;
use cebe\markdown\Markdown;
use Hyn\Frontmatter\Parser;
use Illuminate\Support\ServiceProvider;
use Hyn\Eloquent\Markdown\Model as MarkdownModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        MarkdownModel::setMarkdownParser(new Parser(new Markdown()));
        DocumentationPage::setFilesystem($this->app->make('filesystem')->disk('documentation'));
    }
}
