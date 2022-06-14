<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Services\OgImageGenerator;
use App\SocialProviders\SsoProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Contracts\Factory as SocialiteFactory;

class AppServiceProvider extends ServiceProvider {
    public function register() : void {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    public function boot() : void {
        View::composer('partials.meta', static function ($view) : void {
            $view->with(
                'defaultImage',
                OgImageGenerator::make(config('app.name'))
                    ->withSubject('Roadmap')
                    ->withPolygonDecoration()
                    ->withFilename('og.jpg')
                    ->generate()
                    ->getPublicUrl()
            );
        });

        Filament::serving(static function () : void {
            Filament::registerTheme(mix('css/admin.css'));
        });

        Filament::registerNavigationItems([
            NavigationItem::make()
                ->group('External')
                ->sort(101)
                ->label('Public view')
                ->icon('heroicon-o-rewind')
                ->isActiveWhen(static fn () : bool => false)
                ->url('/'),
        ]);

        if (file_exists($favIcon = storage_path('app/public/favicon.png'))) {
            config(['filament.favicon' => asset('storage/favicon.png') . '?v=' . md5_file($favIcon)]);
        }

        $this->bootSsoSocialite();

        $this->bootCollectionMacros();
    }

    private function bootSsoSocialite() : void {
        $socialite = $this->app->make(SocialiteFactory::class);

        $socialite->extend('sso', static function ($app) use ($socialite) {
            $config = $app['config']['services.sso'];

            return $socialite->buildProvider(SsoProvider::class, $config);
        });
    }

    private function bootCollectionMacros() : void {
        Collection::macro('prioritize', function ($callback) : Collection {
            $nonPrioritized = $this->reject($callback);

            return $this
                ->filter($callback)
                ->merge($nonPrioritized);
        });
    }
}
