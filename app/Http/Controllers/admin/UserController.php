<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   
   public function index()
   {
    $users = User::all();
    return view('admin.user.index',compact('users'));
   } 
   public function create()
   {
    return view('admin.user.create');
   
   }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|string|min:8',
            'alamat'    => 'required|string|max:255',
            'nik'       => 'required|string|max:255',
            'revo'      => 'required|string|max:255',
        ]);

        $user = new User();

        $user->name     = $validatedData['name'];
        $user->email    = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->alamat   = $validatedData['alamat'];
        $user->nik      = $validatedData['nik'];
        $user->revo     = $validatedData['revo'];
        $user->utype    = 'ADM';
        $user->save();

        Alert::success('success','User created successfully');
        return redirect()->route('user');
    }
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function show(User $user)
    {
        
        return view('admin.user.show', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password'  => 'nullable|string|min:8',
            'alamat'    => 'required|string|max:255',
            'nik'       => 'required|string|max:255',
            'revo'      => 'required|string|max:255',
        
        ]);

        $user->name     = $validatedData['name'];
        $user->email    = $validatedData['email'];
        if ($request->has('password')) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->alamat   = $validatedData['alamat'];
        $user->nik      = $validatedData['nik'];
        $user->revo     = $validatedData['revo'];
        $user->utype    = 'ADM';
        $user->save();

        Alert::success('success','User updated successfully');
        return redirect()->route('user');
    }


    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('success','User deleted successfully');
        return redirect()->route('user');
    }

}

