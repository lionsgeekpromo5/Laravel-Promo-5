<?php

namespace App\Providers;

use App\Models\Email;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        $username = 'Flan';
        $age = 20;
        $emails = Email::all();
        View::share(
            [
                'name' => $username,
                'age' => $age,
                'emails' => $emails
            ]
        );
    }
}
