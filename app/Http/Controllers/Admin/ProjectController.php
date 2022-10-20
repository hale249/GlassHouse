<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProjectController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $projects = Project::query()
            ->with('user', 'category');
        if (!empty($data['name'])) {
            $projects = $projects->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (!empty($data['category_id'])) {
            $projects = $projects->where('category_id', $data['category_id']);
        }

        if (!empty($userId)) {
            $projects = $projects->where('user_id', $userId);
        }

        $projects = $projects->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);
        $categories = Category::query()->get();

        return view('admin.elements.project.index', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = ProjectCategory::query()->get();

        return view('admin.elements.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description_short',
            'content',
            'address',
            'type_project',
            'seo_text',
            'category_id',
        ]);

        $data['created_by'] = auth()->id();
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'projects');
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach($request->file('images') as $file){
                $images[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $this->uploadFile($file, 'projects')
                ];
            }
        }
        DB::transaction(function () use ($data, $images) {
            $project = Project::query()
                ->create($data);
            if(!empty($images)) {
                foreach ($images as $image) {
                    \App\Models\ProjectImage::query()
                        ->updateOrCreate([
                            'project_id' => $project->id,
                            'name' => $image['name'],
                            'path' => $image['path'],
                        ]);
                };
            }
        });

        return redirect()->route('admin.project.index')->with('flash_success', 'Tạo dự án thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $project = Project::query()->findOrFail($id);
        return view('admin.elements.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $project = Project::query()->findOrFail($id);
        $categories = ProjectCategory::query()->get();

        return view('admin.elements.project.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description_short',
            'content',
            'address',
            'type_project',
            'seo_text',
            'category_id'
        ]);

        $project = Project::query()->findOrFail($id);
        $project->update($data);

        return redirect()->route('admin.project.index')->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $project = Project::query()->findOrFail($id);
        $project->delete();

        return redirect()->route('admin.project.index')->with('flash_success', 'Xoá thành công');
    }
}
