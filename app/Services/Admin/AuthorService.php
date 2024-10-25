<?php

namespace App\Services\Admin;

use App\Models\Author;
use App\Services\BaseService;
use Illuminate\Pagination\LengthAwarePaginator;

class AuthorService extends BaseService
{
    /**
     * @return Author
     */
    protected function getModel(): string
    {
        return Author::class;
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate(int $perPage = 15, array $columns = ["*"]): LengthAwarePaginator
    {
        return $this->baseModel
            ->withCount("books")
            ->paginate($perPage);
    }

    /**
     * @return array
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getPluckedAuthors(): array
    {
        return $this->baseModel->get()->pluck('first_name', 'id')->toArray();
    }
}
