<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function editProfile()
    {
        $admin = auth()->user();
        return view('admin.edit-profile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('admin.profile.edit')->with('success', 'Profile updated successfully.');
    }

    public function manageExperiences()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }
    public function createExperience()
{
    return view('admin.experiences.create');
}

public function storeExperience(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string',
        'price' => 'required|numeric',
        'duration' => 'required|string',
        'categories' => 'required|string',
        'status' => 'required|string',
        'date' => 'required|date',
    ]);

    \App\Models\Experience::create($request->all());

    return redirect()->route('admin.experiences.index')->with('success', 'Experience added successfully.');
}
public function editExperience($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));
    }

    public function updateExperience(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'date' => 'required|date',
            'categories' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update($request->all());

        return redirect()->route('admin.experiences.index')->with('success', 'Experience updated successfully.');
    }

    public function destroyExperience($id)
{
    $experience = Experience::findOrFail($id);
    $experience->delete();

    return redirect()->route('admin.experiences.index')->with('success', 'Experience deleted successfully.');
}

}
