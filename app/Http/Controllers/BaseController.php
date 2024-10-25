<?php

namespace App\Http\Controllers;

abstract class BaseController extends Controller
{
    /**
     * @var
     */
    protected mixed $baseService;

    /**
     *
     */
    public function __construct()
    {
        $this->baseService = app($this->getService());
    }

    /**
     * @return mixed
     */
    protected abstract function getService(): string;
}
