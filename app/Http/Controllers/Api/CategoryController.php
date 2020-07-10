<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * @var CategoryService
     */
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getCategories(Request $request)
    {
        $items = $this->categoryService->getAllCategories($request);

        return CategoryResource::collection($items);
    }
}
