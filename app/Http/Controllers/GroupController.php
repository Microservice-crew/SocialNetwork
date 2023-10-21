<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Group::all();

        return View::make('Group.index', compact('groups'));
    }

    public function indexx()
{
    $groups = Group::all();
    return view('Group.frontGroup', compact('groups'));
}

    public function create()
{
    return view('Group.create');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'picture' => 'nullable|image', // Validation for the picture
        'nbrMembers' => 'required',
    ]);

    // Handle picture upload
    if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $newName = uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = 'uploads/groups';
        $image->move($destinationPath, $newName);
    } else {
        $newName = null;
    }

    $group = new Group([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'picture' => $newName, // Assign the uploaded picture or null
        'nbrMembers' => $request->input('nbrMembers'),
    ]);

    $group->save();

    return redirect()->route('Group.index')->with('success', 'Group created successfully');
}

    public function edit($id)
{
    $group = Group::findOrFail($id);
    return view('Group.update', compact('group'));
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'nbrMembers' => 'required', // Validate nbrMembers as a numeric value
        ]);

        $group = Group::findOrFail($id);

        $group->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'picture' => $request->input('picture'),
            'nbrMembers' => $request->input('nbrMembers')
        ]);

        return redirect()->route('Group.index')->with('success', 'Group updated successfully!');
    }

    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        return redirect()->route('Group.index')->with('success', 'Group deleted successfully!');
    }

    
}