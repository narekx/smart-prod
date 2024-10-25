<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Services\Admin\BookService;
use App\Services\Admin\AuthorService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\BookUpdateRequest;
use App\Http\Requests\Admin\BookCreateRequest;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BookController extends BaseController
{
    /**
     * @param AuthorService $authorService
     */
    public function __construct(protected AuthorService $authorService)
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    protected function getService(): string
    {
        return BookService::class;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $books = $this->baseService->paginate();
        return view("admin.pages.book.index", compact("books"));
    }

    /**
     * @return View
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function create(): View
    {
        $authors = $this->authorService->getPluckedAuthors();
        return view("admin.pages.book.create", compact("authors"));
    }

    /**
     * @param BookCreateRequest $request
     * @return RedirectResponse
     */
    public function store(BookCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->baseService->create($data);

        return redirect()->route("admin.books.index");
    }

    /**
     * @param $id
     * @return View|RedirectResponse
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function edit($id): View | RedirectResponse
    {
        $book = $this->baseService->find($id);
        if (!$book) {
            return redirect()->route('admin.books.index');
        }

        $authors = $this->authorService->getPluckedAuthors();

        return view('admin.pages.book.edit', compact('book', 'authors'));
    }

    /**
     * @param BookUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BookUpdateRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();
        $book = $this->baseService->update($data, $id);
        if (!$book) {
            return redirect()->back();
        }

        return redirect()->route("admin.books.index");
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $book = $this->baseService->destroy($id);
        if (!$book) {
            return redirect()->back();
        }

        return redirect()->route("admin.books.index");
    }
}
