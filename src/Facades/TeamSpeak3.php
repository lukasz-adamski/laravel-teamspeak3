<?php

namespace Adams\TeamSpeak3\Facades;

use Adams\TeamSpeak3 as BaseTeamSpeak3;
use Illuminate\Support\Facades\Facade as BaseFacade;

final class TeamSpeak3 extends BaseFacade 
{
    /**
     * Return Laravel Framework facade accessor name.
     * 
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseTeamSpeak3::class;
    }
}