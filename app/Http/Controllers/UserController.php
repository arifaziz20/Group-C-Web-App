<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // SELECT U.name, R.name
        // FROM users U
        // INNER JOIN
        // (SELECT *
        // FROM role_user
        // INNER JOIN roles
        // ON role_user.role_id = roles.id) R
        // ON U.id = R.user_id;
        // $users = user::all();

        $users = DB::select("SELECT users.*, r.display_name AS user_role, role_id
        FROM users
        INNER JOIN (SELECT * FROM role_user
        INNER JOIN roles ON role_user.role_id = roles.id) r
        ON users.id = r.user_id");

        return view ('admindashboard.user.index',compact('users'));
    }

    public function edit($id)
    {
        $users = DB::select("SELECT users.*, r.display_name AS user_role, role_id
        FROM users
        INNER JOIN (SELECT * FROM role_user
        INNER JOIN roles ON role_user.role_id = roles.id) r
        ON users.id = r.user_id");
        foreach ($users as $u)
        {
            if($u->id == $id)
            {
                $user = $u;
                break;
            }
        }
        return view('admindashboard.user.upgrade', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role_id'=>'required',
        ]);
        $new_role = $request->get('role_id');

        // DB::select("UPDATE role_user
        // SET role_id = '$new_role'
        // WHERE user_id = '$id'");

        $user = user::find($id);
        if($new_role == 1)
        {
            $user->detachRole('user');
            $user->attachRole($new_role);
        }elseif($new_role == 2)
        {
            $user->detachRole('admin');
            $user->attachRole($new_role);
        }
        return redirect('User-record')->with('success', 'User Updated!');
    }


}
