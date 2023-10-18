<?php
namespace Dcode\Dsg;

use Illuminate\Support\ServiceProvider;

class DsgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources' => resource_path(),
        ]);
    }
}