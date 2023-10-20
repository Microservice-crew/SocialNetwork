<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    ///index

    public function admin()
    {
        $users = User::all();

        return view('Admin.users', compact('users'));




    }
    public function edit(Request $request): View
    {
        return view('editprofil', [
            'user' => $request->user(),
        ]);
    }
    public function updateRole(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'role' => 'required|in:user,admin', // Ensure the role is either 'user' or 'admin'
        ]);

        // Find the user by ID
        $user = User::find($id);

        // Update the user's role
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'User role updated successfully');


    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();



        return redirect('editprofil')->with('success', 'profile-updated .');

    }

    public function destroy()
    {
        $user = auth()->user();
        $user->delete();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }
}
