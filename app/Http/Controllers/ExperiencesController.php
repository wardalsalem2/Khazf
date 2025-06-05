<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('images')->where('status', 'active')->get();
        return view('experiences.index', compact('experiences'));
    }

    public function show($id)
    {
        $experience = Experience::with([
            'images' => function ($query) {
                $query->limit(3);
            }
        ])->findOrFail($id);

        return view('experiences.show', compact('experience'));
    }

}
