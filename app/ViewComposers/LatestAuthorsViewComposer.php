<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Services\AuthorService;

class LatestAuthorsViewComposer
{
    /**
     * @param AuthorService $authorService
     */
    public function __construct(protected AuthorService $authorService)
    {
    }

    /**
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $authors = $this->authorService->getLatest([
            "id",
            "first_name",
            "last_name",
        ]);
        $view->with('authors', $authors);
    }
}
