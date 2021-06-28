<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller{
    public function index(){
        $users=User::paginate(25);
        return view('admin.users.index',compact('users'));
    }
 
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.users');
    }
}
