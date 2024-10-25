<?php

namespace App\Services\Admin;

use App\Models\Book;
use App\Services\BaseService;
use Illuminate\Pagination\LengthAwarePaginator;

class BookService extends BaseService
{
    /**
     * @return Book
     */
    protected function getModel(): string
    {
        return Book::class;
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate(int $perPage = 15, array $columns = ["*"]): LengthAwarePaginator
    {
        return $this->baseModel->with("author")->paginate($perPage);
    }

    /**
     * @param int $id
     * @param array $columns
     * @return Book
     */
    public function findOrFail(int $id, array $columns = ["*"]): Book
    {
        return $this->baseModel->with("author")->findOrFail($id, $columns);
    }
}
