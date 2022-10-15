<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category_id');
        $project = Project::query()->where('is_active', true);

        if (!empty($categoryId)) {
            $category = Category::query()->find($categoryId);
            if (!empty($category)) {
                $project = $project->where('category_id', $categoryId);
            }
        }

        $project = $project->get();
        dd($project);
        return view('customer.elements.project.index', compact('project'));
    }

    public function detail($id)
    {
        $project = Project::query()->findOrFail($id);
        return view('customer.elements.project.detail', compact('project'));
    }
}
