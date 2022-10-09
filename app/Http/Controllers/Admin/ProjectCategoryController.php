<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Models\ProjectCategory;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectCategoryController extends Controller
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
        $categories = ProjectCategory::query();
        if (!empty($data['name'])) {
            $categories = $categories->where('name', 'like', '%' . $data['name'] . '%');
        }

        $categories = $categories->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.project_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.elements.project_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);

        ProjectCategory::query()
            ->create($data);

        return redirect()->route('admin.project_category.index')->with('flash_success', 'Tạo thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $category = ProjectCategory::query()->findOrFail($id);

        return view('admin.elements.project_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryStoreRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);
        $category = ProjectCategory::query()->findOrFail($id);
        $category->update($data);

        return redirect()->route('admin.project_category.index')->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id): RedirectResponse
    {
        $category = ProjectCategory::query()->findOrFail($id);
        $category->delete();

        return redirect()->route('admin.project_category.index')->with('flash_success', 'Xoá thành công');
    }
}
