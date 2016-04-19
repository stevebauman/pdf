<?php

namespace Stevebauman\Pdf;

use Dompdf\Dompdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class PdfServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $config = __DIR__.'/Config/config.php';

        $this->publishes([
            $config => config_path('pdf.php'),
        ], 'pdf');

        $this->mergeConfigFrom($config, 'pdf');
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->bind('pdf', function (Application $app) {
            $config = $app->make('config')->get('pdf');

            return new Dompdf($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return ['pdf'];
    }
}
