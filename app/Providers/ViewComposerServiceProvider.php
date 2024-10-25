<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ViewComposers\LatestBooksViewComposer;
use App\ViewComposers\LatestAuthorsViewComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        View::composer(['partials.book.latest'], LatestBooksViewComposer::class);
        View::composer(['partials.author.latest'], LatestAuthorsViewComposer::class);
    }
}
