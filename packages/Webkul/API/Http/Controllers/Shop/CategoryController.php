<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\API\Http\Resources\Catalog\Category as CategoryResource;
use DB;

class CategoryController extends Controller
{
    /**
     * CategoryRepository object
     *
     * @var \Webkul\Category\Repositories\CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @param  Webkul\Category\Repositories\CategoryRepository  $categoryRepository
     * @return void
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(
            $this->categoryRepository->getVisibleCategoryTree(request()->input('parent_id'))
        );
    }
    public function categoriesproducts()
    {
        $data = DB::table('product_categories')
        ->join('products', function($join){
            $join->on('product_categories.product_id', '=', 'products.id');
        })
        ->get();
        return response()->json([
            'categories' => $data,
            'status_code'   => 200,
            'msg'           => 'success',
        ], 200);
    }
}
