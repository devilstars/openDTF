<?php

namespace App\Http\Services;

use App\Category;
use Illuminate\Http\Request;

/**
 * Class CategoryService
 */
class CategoryService
{
    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllCategories(Request $request)
    {
        return Category::query()
            ->with('media')
            ->get();
    }
}
