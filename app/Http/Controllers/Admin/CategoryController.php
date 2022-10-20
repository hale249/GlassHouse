<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $categories = Category::query();
        if (!empty($data['name'])) {
            $categories = $categories->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($userId)) {
            $categories = $categories->where('user_id', $userId);
        }

        $categories = $categories->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View //Trả dữ liệu về View để hiển thị trên màn hình tại Admin
    {
        return view('admin.elements.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request): RedirectResponse //Sau khi điền thông tin và submit sẽ lưu vào db và lưu vào trang List
    {
        $data = $request->only([
            'name',
            'description',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $data['user_id'] = auth()->id();
        Category::query() //save vào db
            ->create($data);

        return redirect()->route('admin.category.index')->with('flash_success', 'Tạo thành công'); // trả về trang List
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $category = Category::query()->findOrFail($id);

        return view('admin.elements.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     * @throws AuthorizationException
     */
    public function edit($id): View //Lấy dữ liệu theo ID và trả về dữ liệu cho file .blade để hiển thị phía admin
    {
        $category = Category::query()->findOrFail($id);
        $this->authorize('update', $category);

        return view('admin.elements.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(CategoryStoreRequest $request, $id): RedirectResponse //Khi người dùng điền thông tin ấn submit thì update lại thông tin
    {
        $data = $request->only([
            'name',
            'description',
        ]);
        $category = Category::query()->findOrFail($id);
        $this->authorize('update', $category);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $category->update($data);

        return redirect()->route('admin.category.index')->with('flash_success', 'Cập nhật thành công');
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
        $category = Category::query()->findOrFail($id);
        $this->authorize('delete', $category);
        $category->delete();

        return redirect()->route('admin.category.index')->with('flash_success', 'Xóa thành công');
    }
}
