<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::active()->orderBy('order')->orderBy('created_at', 'desc');

        if ($request->has('category') && $request->category !== 'all') {
            $query->byCategory($request->category);
        }

        $projects = $query->paginate(12);
        
        $categories = Project::distinct('category')
            ->pluck('category')
            ->map(function ($category) {
                return [
                    'key' => $category,
                    'label' => ucfirst($category)
                ];
            });

        return view('projects.index', compact('projects', 'categories'));
    }

    public function show(Project $project)
    {
        $relatedProjects = Project::active()
            ->where('id', '!=', $project->id)
            ->where('category', $project->category)
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}