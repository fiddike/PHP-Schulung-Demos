<?php
use Silex\Application;
use Silex\ServiceProviderInterface;

class MongodbServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['mongoclient'] = $app->share(function() {
                return new MongoClient();
        });
    }

    public function boot(Application $app)
    {
    }
} 