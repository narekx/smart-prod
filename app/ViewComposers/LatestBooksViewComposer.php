<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Services\BookService;

class LatestBooksViewComposer
{
    /**
     * @param BookService $bookService
     */
    public function __construct(protected BookService $bookService)
    {
    }

    /**
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $books = $this->bookService->getLatest([
            "id",
            "title",
            "description",
        ]);
        $view->with('books', $books);
    }
}
