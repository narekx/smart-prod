<?php

namespace App\Services;

use App\Models\Book;

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
     * @param int $authorId
     * @param array $columns
     * @return mixed
     */
    public function paginateByAuthorId(int $authorId, $perPage = 15, array $columns = ["*"])
    {
        return $this->baseModel->where("author_id", $authorId)->paginate($perPage, $columns);
    }
}
