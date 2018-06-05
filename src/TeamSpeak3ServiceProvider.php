<?php

namespace Adams\TeamSpeak3;

use Adams\TeamSpeak3;
use Illuminate\Support\ServiceProvider;

final class TeamSpeak3ServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configFilePath() => config_path('teamspeak3.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            $this->configFilePath(), 'teamspeak3'
        );

        $this->app->bind(TeamSpeak3::class,  function ($app) {
            $uri = 'serverquery://%s:%s@%s:%d/?server_port=%d';

            foreach (['username', 'password', 'host', 'query_port', 'voice_port'] as $key)
                $args[] = rawurlencode(config('teamspeak3.' . $key));
                
            if (! is_null($nickname = config('teamspeak3.nickname'))) {
                $uri .= '&nickname=%s';
                $args[] = rawurlencode($nickname);
            }

            array_unshift($args, $uri);

            return TeamSpeak3::factory(
                call_user_func_array('sprintf', $args)
            );
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
            TeamSpeak3::class
        ];
    }

    /**
     * Get module config file path.
     * 
     * @return string
     */
    protected function configFilePath()
    {
        return realpath(__DIR__ . '/../config/teamspeak3.php');
    }
}
