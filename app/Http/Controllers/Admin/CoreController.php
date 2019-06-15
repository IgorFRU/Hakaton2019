<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Role;
use App\User;
use App\RoleUser;

class CoreController extends Controller
{
    public function index() {
        
        return view('dashboard/dashboard');
    }

    public function settings() {
        $user = Auth::user();
        // dd($user->roles);
        if (isset($user->roles->pluck('id')[0])) {
            $user_role_id = $user->roles->pluck('id')[0];
        }
        else {
            $user_role_id = 0;
        }
        $user_role_id = 
        $data = array(
            'roles' => Role::orderBy('role', 'ASC')->get(),
            'user_id' => Auth::id(),
            'user' => $user,
            'user_role_id' => $user_role_id
        );

        // dd($data);
        return view('dashboard/settings', $data);
    }

    public function store(Request $request) {

        $user = Auth::user();
        $user->roles()->attach($request->role_id);
        //dd($user);
        return back()->withInput();
        
    }

    public function destroy(Request $request) {

        RoleUser::where('user_id', $request->user_id)->delete();        
        return redirect()->back()->with('success', 'Категория успешно удалена');
    }

    public function catalog() {
        $data = array();
        return view('dashboard/catalog', $data);
    }
}
