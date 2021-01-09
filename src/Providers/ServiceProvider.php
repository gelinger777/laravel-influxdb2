<?php

namespace GelingerMedia\InfluxDB2\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use InfluxDB2\Client as InfluxClient;
use InfluxDB2\Model\WritePrecision;
use InfluxDB2\Model\BucketRetentionRules;
use InfluxDB2\Model\Organization;
use InfluxDB2\Model\PostBucketRequest;
use InfluxDB2\Service\BucketsService;
use InfluxDB2\Service\OrganizationsService;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/InfluxDB2.php' => config_path('InfluxDB2.php')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {





        $this->app->singleton(InfluxDB2::class, function($app) {
            $client = new InfluxClient(
            
            
                [
                    "url" => config('influxdb.host'),
                    "token" =>config('influxdb.token'),
                    "bucket" => config('influxdb.bucket'),
                    "org" => config('influxdb.organisation'),
                    "precision" => InfluxDB2\Model\WritePrecision::NS
                ]






            );
            
            return $client;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            InfluxDB2::class,
        ];
    }
}
