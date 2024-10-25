<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Services\Admin\AuthorService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\AuthorUpdateRequest;
use App\Http\Requests\Admin\AuthorCreateRequest;

class AuthorController extends BaseController
{
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
        $authors = $this->baseService->paginate();

        return view("admin.pages.author.index", [
            "authors" => $authors,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view("admin.pages.author.create");
    }

    /**
     * @param AuthorCreateRequest $request
     * @return RedirectResponse
     */
    public function store(AuthorCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->baseService->create($data);

        return redirect()->route("admin.authors.index");
    }

    /**
     * @param $id
     * @return View|RedirectResponse
     */
    public function edit($id): View | RedirectResponse
    {
        $author = $this->baseService->find($id);
        if (!$author) {
            return redirect()->route('admin.authors.index');
        }

        return view('admin.pages.author.edit', compact('author'));
    }

    /**
     * @param AuthorUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(AuthorUpdateRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();
        $author = $this->baseService->update($data, $id);
        if (!$author) {
            return redirect()->back();
        }

        return redirect()->route("admin.authors.index");
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $author = $this->baseService->destroy($id);
        if (!$author) {
            return redirect()->back();
        }

        return redirect()->route("admin.authors.index");
    }
}
