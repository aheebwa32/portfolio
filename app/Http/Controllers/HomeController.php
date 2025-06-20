<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()
            ->active()
            ->orderBy('order')
            ->limit(6)
            ->get();

        $skills = Skill::orderBy('category')
            ->orderBy('order')
            ->get()
            ->groupBy('category');

        return view('home', compact('featuredProjects', 'skills'));
    }

    public function about()
    {
        $stats = [
            'projects' => Project::active()->count(),
            'skills' => Skill::count(),
            'experience' => '3+', // Years of experience
            'technologies' => Skill::distinct('name')->count()
        ];

        return view('about', compact('stats'));
    }
}