<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->only([
            'category_id',
            'name',
        ]);
        $categories = Category::query()->get();
        $products = Product::query()->where('is_active', true);
        if (!empty($data['name'])) {
            $products = $products->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (!empty($data['category_id'])) {
            $category = Category::query()->find($data['category_id']);
            if (!empty($category)) {
                $products = $products->where('category_id', $data['category_id']);
            }
        }

        $products = $products->paginate(Constant::DEFAULT_PER_PAGE);
        return view('customer.elements.product.index', compact(['products', 'categories']));
    }

    public function detail($id)
    {
        $product = Product::query()->with([
            'category',
            'productImages',
            'productAccessories',
            'productAluminums',
            'productColors',
            'productGlass',
        ])->findOrFail($id);

        $productRelates = Product::query()->where('id', '!=', $id)->limit(4)->get();
        return view('customer.elements.product.detail', compact(['product', 'productRelates']));
    }
}
