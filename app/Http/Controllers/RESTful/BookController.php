<?php

namespace App\Http\Controllers\RESTful;

use App\Services\Admin\BookService;
use App\Http\Resources\BookResource;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\BookCreateRequest;
use App\Http\Requests\Admin\BookUpdateRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class BookController extends BaseController
{
    /**
     * @return string
     */
    protected function getService(): string
    {
        return BookService::class;
    }

    /**
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $books = $this->baseService->paginate();
        return BookResource::collection($books);
    }

    /**
     * @param BookCreateRequest $request
     * @return JsonResource
     */
    public function store(BookCreateRequest $request): JsonResource
    {
        $data = $request->validated();
        $result = $this->baseService->create($data);
        return BookResource::make($result);
    }

    /**
     * @param BookUpdateRequest $request
     * @param int $id
     * @return JsonResource
     */
    public function update(BookUpdateRequest $request, int $id): JsonResource
    {
        $data = $request->validated();
        $this->baseService->updateWithFail($data, $id);
        return JsonResource::make([
            "success" => true,
        ]);
    }

    /**
     * @param int $id
     * @return BookResource
     */
    public function show(int $id): BookResource
    {
        $book = $this->baseService->findOrFail($id);
        return BookResource::make($book);
    }

    /**
     * @param int $id
     * @return JsonResource
     */
    public function destroy(int $id): JsonResource
    {
        $this->baseService->destroyOrFail($id);
        return JsonResource::make([
            "success" => true,
        ]);
    }
}
