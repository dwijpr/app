<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Helpers\LogHelper;
use App\Http\Helpers\AssetHelper;
use App\Http\Helpers\StringHelper;
use App\Http\Helpers\URLHelper;
use App\Http\Helpers\DateTimeHelper;
use App\Http\Helpers\FileHelper;
use App\Http\Helpers\MDHelper;
use App\Http\Helpers\HtmlHelper;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlHelper();
        $this->registerMDHelper();
        $this->registerFileHelper();
        $this->registerDateTimeHelper();
        $this->registerURLHelper();
        $this->registerLogHelper();
        $this->registerAssetHelper();
        $this->registerStringHelper();
    }

    private function registerHtmlHelper() {
        $this->app->singleton('html_helper', function ($app) {
            return new HtmlHelper();
        });
    }

    private function registerMDHelper() {
        $this->app->singleton('md_helper', function($app) {
            return new MDHelper();
        });
    }

    private function registerFileHelper() {
        $this->app->singleton('file_helper', function ($app) {
            return new FileHelper();
        });
    }

    private function registerURLHelper() {
        $this->app->singleton('url_helper', function($app) {
            return new URLHelper();
        });
    }
    
    private function registerDateTimeHelper() {
        $this->app->singleton('datetime_helper', function ($app) {
            return new DateTimeHelper();
        });
    }

    private function registerLogHelper() {
        $this->app->singleton('log_helper', function($app) {
            return new LogHelper();
        });
    }

    private function registerAssetHelper() {
        $this->app->singleton('asset_helper', function ($app) {
            return new AssetHelper();
        });
    }

    private function registerStringHelper() {
        $this->app->singleton('string_helper', function ($app) {
            return new StringHelper();
        });
    }
}
