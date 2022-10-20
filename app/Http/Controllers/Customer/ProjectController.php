<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category_id');
        $projects = Project::query()->where('is_active', true);
        if (!empty($categoryId)) {
            $category = ProjectCategory::query()->find($categoryId);
            if (!empty($category)) {
                $projects = $projects->where('category_id', $categoryId);
            }
        }

        $projects = $projects->get();
        return view('customer.elements.project.index', compact('projects'));
    }

    public function detail($id)
    {
        $project = Project::query()->with(['projectImages', 'category'])->findOrFail($id);
        $nextProject = Project::query()->where('id', '>', $id)-> first();
        $firstProject = Project::query()->where('id', '<', $id)-> first();
        $nextId = '';
        if (!empty($nextProject)) {
            $nextId = $nextProject->id;
        }

        $firstId = '';
        if (!empty($firstProject)) {
            $firstId = $firstProject->id;
        }

        $listProjects = Project::query()->where('id', '!=', $id)->limit(3)->get();

        return view('customer.elements.project.detail', compact('project', 'firstId', 'nextId', 'listProjects'));
    }
}
