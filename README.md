# TeamSpeak 3 Framework Service Provider for Laravel
This package is developed to provide Laravel Framework service allowing you to execute TeamSpeak 3 ServerQuery commands.

## Installation
1. Install composer package using this command:
```
composer install lukasz-adamski/laravel-teamspeak3
```
2. Insert Service Provider in `config/app.php`:
```php
Adams\TeamSpeak3\TeamSpeak3ServiceProvider::class,
```
3. You can also create an alias for Facade:
```php
'TeamSpeak3' => Adams\TeamSpeak3\Facades\TeamSpeak3::class,
```
4. Publish configuration file to your project:
```
php artisan vendor:publish --provider="Adams\TeamSpeak3\TeamSpeak3ServiceProvider"
```
5. Open `.env` file and insert these settings:
- `TEAMSPEAK3_HOST` - host used to establish connection with server,
- `TEAMSPEAK3_VOICE_PORT` - voice port (UDP) used to identify virtual server to select,
- `TEAMSPEAK3_QUERY_PORT` - query port (TCP) used to establish connection with ServerQuery,
- `TEAMSPEAK3_USERNAME` - username which will be used to login into ServerQuery,
- `TEAMSPEAK3_PASSWORD` - password which will be used to login into ServerQuery,
- `TEAMSPEAK3_NICKNAME` - nickname to set after successful connection.

## Usage
For example you can use this Service Provider in Controllers:
```php
<?php

namespace App\Http\Controllers;

use TeamSpeak3;
use App\Http\Controllers\Controller;

class TeamSpeak3Controller extends Controller
{
    /**
     * Show clients connected to TeamSpeak 3 server.
     *
     * @return Response
     */
    public function clients()
    {
        $query = app()->make(TeamSpeak3::class);

        return view('teamspeak3.clients', [
            'clients' => $query->clientList()
        ]);
    }
}
```
