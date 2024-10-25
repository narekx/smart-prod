<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\BookService;
use App\Services\AuthorService;

class AuthorController extends BaseController
{
    /**
     * @param BookService $bookService
     */
    public function __construct(protected BookService $bookService)
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    protected function getService(): string
    {
        return AuthorService::class;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $authors = $this->baseService->paginate(9);
        return view("pages.author.index", compact("authors"));
    }

    /**
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $author = $this->baseService->findOrFail($id, ["first_name", "id"]);
        $books = $this->bookService->paginateByAuthorId($id, 15, ["id", "title", "description"]);
        return view("pages.author.show", compact("author", "books"));
    }
}
