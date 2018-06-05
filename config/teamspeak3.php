<?php

return [

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Server Host
    |--------------------------------------------------------------------------
    |
    | Here you may specify host used to establish connection with ServerQuery
    | protocol to perform jobs.
    |
    */
    'host' => env('TEAMSPEAK3_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Server Voice Port
    |--------------------------------------------------------------------------
    |
    | This is UDP port used by TeamSpeak 3 virtual server which will be
    | selected after successful connection and authorization. Every virtual 
    | server has its own voice port.
    |
    | If this option will be set to null, no server will be selected
    | after successful connection.
    |
    | Default: 9987
    |
    */
    'voice_port' => env('TEAMSPEAK3_VOICE_PORT', 9987),

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Server Query Port
    |--------------------------------------------------------------------------
    |
    | ServerQuery uses TCP port to provide text driven server management API.
    | 
    | Default: 10011
    |
    */
    'query_port' => env('TEAMSPEAK3_QUERY_PORT', 10011),

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Username
    |--------------------------------------------------------------------------
    |
    | Username used to authorize ServerQuery connection.
    |
    | Default: serveradmin
    |
    */
    'username' => env('TEAMSPEAK3_USERNAME', 'serveradmin'),

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Password
    |--------------------------------------------------------------------------
    |
    | Password used to authorize ServerQuery connection.
    |
    */
    'password' => env('TEAMSPEAK3_PASSWORD', 'secret'),

    /*
    |--------------------------------------------------------------------------
    | TeamSpeak 3 Nickname
    |--------------------------------------------------------------------------
    |
    | This nickname will be used after successful connection to ServerQuery.
    | When this option is set null, no nickname will be set after login.
    |
    */
    'nickname' => env('TEAMSPEAK3_NICKNAME', null)

];
