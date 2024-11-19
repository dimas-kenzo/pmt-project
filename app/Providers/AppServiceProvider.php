<?php

namespace App\Providers;

use Exception;
use Google\Client;
use Google\Service\Drive;
use League\Flysystem\Filesystem;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Masbug\Flysystem\GoogleDriveAdapter;
use Illuminate\Filesystem\FilesystemAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->loadGoogleStorageDriver();
        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
        try {
            Storage::extend('google', function($app, $config) {
                $options = [];

                if (!empty($config['teamDriveId'] ?? null)) {
                    $options['teamDriveId'] = $config['teamDriveId'];
                }

                if (!empty($config['sharedFolderId'] ?? null)) {
                    $options['sharedFolderId'] = $config['sharedFolderId'];
                }

                $client = new \Google\Client();
                $client->setClientId($config['clientId']);
                $client->setClientSecret($config['clientSecret']);
                $client->refreshToken($config['refreshToken']);
                
                $service = new \Google\Service\Drive($client);
                $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, $config['folder'] ?? '/', $options);
                $driver = new \League\Flysystem\Filesystem($adapter);

                return new \Illuminate\Filesystem\FilesystemAdapter($driver, $adapter);
            });
        } catch(\Exception $e) {
            // your exception handling logic
        }

    }

    // private function loadGoogleStorageDriver(string $driverName = 'google') {
    //     try {
    //         Storage::extend($driverName, function($app, $config) {
    //             $options = [];
    
    //             if (!empty($config['teamDriveId'] ?? null)) {
    //                 $options['teamDriveId'] = $config['teamDriveId'];
    //             }
    
    //             $client = new Client();
    //             $client->setClientId($config['clientId']);
    //             $client->setClientSecret($config['clientSecret']);
    //             $client->refreshToken($config['refreshToken']);
    
    //             $service = new Drive($client);
    //             $adapter = new GoogleDriveAdapter($service, $config['folder'] ?? '/', $options);
    //             $driver = new Filesystem($adapter);
    
    //             return new FilesystemAdapter($driver, $adapter);
    //         });
    //     } catch(Exception $e) {
    //         // your exception handling logic
    //     }
    // }
    
}
