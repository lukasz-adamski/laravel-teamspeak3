<?php

namespace Adams\TeamSpeak3\Facades;

use Illuminate\Support\Facades\Facade;

class TeamSpeak3 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'teamspeak3';
    }
}
