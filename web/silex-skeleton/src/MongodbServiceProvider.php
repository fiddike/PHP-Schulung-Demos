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

        $app['nongoclient.venues'] = $app->share(function() use ($app) {
                $app['mongo.database'];

                return $app['nongoclient']->selectCollection(
                    $app['mongo.database'], 'venues'
                );
            });
    }

    public function boot(Application $app)
    {
    }
} 