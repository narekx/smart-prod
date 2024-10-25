<?php

namespace App\Http\Controllers\RESTful;

use App\Services\Admin\AuthorService;
use App\Http\Resources\AuthorResource;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\AuthorCreateRequest;
use App\Http\Requests\Admin\AuthorUpdateRequest;
use Illuminate\Http\Resources\Json\JsonResource;

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
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $author = $this->baseService->paginate();
        return AuthorResource::collection($author);
    }

    /**
     * @param AuthorCreateRequest $request
     * @return JsonResource
     */
    public function store(AuthorCreateRequest $request): JsonResource
    {
        $data = $request->validated();
        $result = $this->baseService->create($data);
        return AuthorResource::make($result);
    }

    /**
     * @param AuthorUpdateRequest $request
     * @param int $id
     * @return JsonResource
     */
    public function update(AuthorUpdateRequest $request, int $id): JsonResource
    {
        $data = $request->validated();
        $this->baseService->updateWithFail($data, $id);
        return JsonResource::make([
            "success" => true,
        ]);
    }

    /**
     * @param int $id
     * @return AuthorResource
     */
    public function show(int $id): AuthorResource
    {
        $book = $this->baseService->findOrFail($id);
        return AuthorResource::make($book);
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
