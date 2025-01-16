<?php

namespace App\Http\Controllers;  
  
use App\Models\User;  
use App\Models\AuditLog;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;  

class UserController extends Controller  
{  
    public function index()  
    {  
        $users = User::all();  
        return view('users.index', compact('users'));  
    }  

    public function create()  
    {  
        return view('users.create');  
    }  

    public function store(Request $request)  
    {  
        $request->validate([  
            'name' => 'required',  
            'email' => 'required|email|unique:users',  
            'password' => 'required|min:6',  
            'role' => 'required',  
        ]);  

        $user = User::create([  
            'name' => $request->name,  
            'email' => $request->email,  
            'password' => Hash::make($request->password),  
            'role' => $request->role,  
        ]);  

        // Mencatat aktivitas  
        AuditLog::create([  
            'user_id' => $user->id,  
            'action' => 'Created user ' . $user->name,  
        ]);  

        return redirect()->route('users.index')->with('success', 'User created successfully.');  
    }  

    public function edit(User $user)  
    {  
        return view('users.edit', compact('user'));  
    }  

    public function update(Request $request, User $user)  
    {  
        $request->validate([  
            'name' => 'required',  
            'email' => 'required|email|unique:users,email,' . $user->id,  
            'role' => 'required',  
        ]);  

        $user->update($request->only('name', 'email', 'role'));  

        // Mencatat aktivitas  
        AuditLog::create([  
            'user_id' => $user->id,  
            'action' => 'Updated user ' . $user->name,  
        ]);  

        return redirect()->route('users.index')->with('success', 'User updated successfully.');  
    }  

    public function destroy(User $user)  
    {  
        $user->delete();  

        // Mencatat aktivitas  
        AuditLog::create([  
            'user_id' => $user->id,  
            'action' => 'Deleted user ' . $user->name,  
        ]);  

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');  
    }  
}  
