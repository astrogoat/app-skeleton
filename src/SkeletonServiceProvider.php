<?php

namespace VendorName\Skeleton;

use Helix\Lego\Apps\App;
use Spatie\LaravelPackageTools\Package;
use Helix\Lego\Apps\AppPackageServiceProvider;
use VendorName\Skeleton\Settings\SkeletonSettings;

class SkeletonServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('skeleton')
            ->settings(SkeletonSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('skeleton')->hasConfigFile()->hasViews();
    }
}
