<?php

namespace App\Services;

use App\Models\Author;

class AuthorService extends BaseService
{
    /**
     * @return Author
     */
    protected function getModel(): string
    {
        return Author::class;
    }
}
