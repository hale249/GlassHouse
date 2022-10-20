<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\GlassType;
use App\Models\Product;
use App\Models\ProductAccessory;
use App\Models\ProductAluminum;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View //List ra danh sách tương ứng với dữ liệu Product trừ điều kiện where
    {
        $data = $request->all(); //Get thông tin dữ liệu gửi lên từ Client
        $products = Product::query() //Select  tất cả thông tin trong bảng Product và lấy theo tương ứng là User và Category
            ->with('user', 'category');
        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($data['name'])) {
            $products = $products->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (!empty($data['category_id'])) {
            $products = $products->where('category_id', $data['category_id']);
        }

        if (!empty($userId)) {
            $products = $products->where('user_id', $userId);
        }

        $products = $products->orderBy('created_at', 'desc') //Trả về dữ liệu xong sau đó sẽ sắp xếp theo trường dữ liệu created at
            ->paginate(Constant::DEFAULT_PER_PAGE); //Rồi sau đó phân trang
        $categories = Category::query()->get();

        return view('admin.elements.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::query()->get();
        $colors = Color::query()->get();
        $glassTypes = GlassType::query()->get();
        $aluminums = ProductAluminum::query()->get();
        $accessories = ProductAccessory::query()->get();

        return view('admin.elements.product.create', compact(['categories', 'colors', 'glassTypes', 'aluminums', 'accessories']));
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProductStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'price',
            'description',
            'description_short',
            'content',
            'category_id'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach($request->file('images') as $file){
                $images[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $this->uploadFile($file, 'products')
                ];
            }
        }

        //insert color
        $colorIds = [];
        if (!empty($data['colors'])) {
            foreach ($data['colors'] as $color) {
                $colorInstance = Color::query()->firstOrCreate(['name' => $color]);
                $colorIds[] = $colorInstance->id;
            }
        }

        //insert glass type
        $glassTypeIds = [];
        if (!empty($data['glass_types'])) {
            foreach ($data['glass_types'] as $type) {
                $instance = GlassType::query()->firstOrCreate(['name' => $type]);
                $glassTypeIds[] = $instance->id;
            }
        }

        //insert glass type
        $aluminumIds = [];
        if (!empty($data['aluminums'])) {
            foreach ($data['aluminums'] as $item) {
                //insert tags
                $instance = ProductAluminum::query()->firstOrCreate(['name' => $item]);
                $aluminumIds[] = $instance->id;
            }
        }

        //insert glass type
        $accessoriesIds = [];
        if (!empty($data['aluminums'])) {
            foreach ($data['aluminums'] as $item) {
                //insert tags
                $instance = ProductAccessory::query()->firstOrCreate(['name' => $item]);
                $accessoriesIds[] = $instance->id;
            }
        }
        $data['user_id'] = auth()->id();
//        $data['is_disabled'] = (!empty($request->input('status'))) ? false : true;
        DB::transaction(function () use ($data, $images, $accessoriesIds, $aluminumIds, $glassTypeIds, $colorIds) {
            $product = Product::query()
                ->create($data);

            if(!empty($images)) {
                $product->productImages()->create($images);
            }

            $product->productColors()->attach($colorIds);
            $product->productAccessories()->attach($accessoriesIds);
            $product->productAluminums()->attach($aluminumIds);
            $product->productGlass()->attach($glassTypeIds);
        });


        return redirect()->route('admin.product.index')->with('flash_success', 'Tạo sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $product = Product::query()->findOrFail($id);
        return view('admin.elements.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     * @throws AuthorizationException
     */
    public function edit($id): View
    {
        $product = Product::query()->findOrFail($id);
        $this->authorize('update', $product);
        $categories = Category::query()->get();
        $colors = Color::query()->get();
        $glassTypes = GlassType::query()->get();
        $aluminums = ProductAluminum::query()->get();
        $accessories = ProductAccessory::query()->get();

        return view('admin.elements.product.edit', compact(['product', 'categories', 'colors', 'glassTypes', 'aluminums', 'accessories']));
    }

    /**
     * Update the specified resource in storage.
     * @param ProductUpdateRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(ProductUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'price',
            'description',
            'content',
            'category_id'
        ]);

        //insert color
        $colorIds = [];
        if (!empty($data['colors'])) {
            foreach ($data['colors'] as $color) {
                $colorInstance = Color::query()->firstOrCreate(['name' => $color]);
                $colorIds[] = $colorInstance->id;
            }
        }

        //insert glass type
        $glassTypeIds = [];
        if (!empty($data['glass_types'])) {
            foreach ($data['glass_types'] as $type) {
                $instance = GlassType::query()->firstOrCreate(['name' => $type]);
                $glassTypeIds[] = $instance->id;
            }
        }

        //insert glass type
        $aluminumIds = [];
        if (!empty($data['aluminums'])) {
            foreach ($data['aluminums'] as $item) {
                //insert tags
                $instance = ProductAluminum::query()->firstOrCreate(['name' => $item]);
                $aluminumIds[] = $instance->id;
            }
        }

        //insert glass type
        $accessoriesIds = [];
        if (!empty($data['aluminums'])) {
            foreach ($data['aluminums'] as $item) {
                //insert tags
                $instance = ProductAccessory::query()->firstOrCreate(['name' => $item]);
                $accessoriesIds[] = $instance->id;
            }
        }

        $product = Product::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        //$data['is_disabled'] = (!empty($request->input('status'))) ? false : true;
    DB::transaction(function () use ($product, $data, $colorIds, $accessoriesIds, $aluminumIds, $glassTypeIds) {
        $product->update($data);

        $product->productColors()->sync($colorIds);
        $product->productAccessories()->sync($accessoriesIds);
        $product->productAluminums()->sync($aluminumIds);
        $product->productGlass()->sync($glassTypeIds);
    });

        return redirect()->route('admin.product.index')->with('flash_success', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy($id): RedirectResponse
    {
        $product = Product::query()->findOrFail($id);
        DB::transaction(function () use($product) {
            $product->productColors()->delete();
            $product->productAccessories()->delete();
            $product->productAluminums()->delete();
            $product->productGlass()->delete();
            $product->delete();
        });

        return redirect()->route('admin.product.index')->with('flash_success', 'Xoá sản phẩm thành công');
    }
}
