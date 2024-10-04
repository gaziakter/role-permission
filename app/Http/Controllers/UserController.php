<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\User;
Use Hash;

class UserController extends Controller
{
    //
    public function list(){

        $data['getRecord'] = User::getRecord();
        return view('panel.user.list',  $data);
    }

        //
        public function add(){

            $data['getRole'] = RoleModel::getRecord();
            return view('panel.user.add',  $data);
        }

        public function insert(Request $request){

            request()->validate([
                'email' => 'required|email|unique:users',
            ]);

            $save = new User;
            $save->name = trim($request->name);
            $save->email = trim($request->email);
            $save->password = Hash::make($request->password);
            $save->role_id = trim($request->role_id);
            $save->save();

            return redirect('panel/user')->with('success', 'User successfully created');
        }

        public function edit($id){

            $data['getRecord'] = User::getSingle($id);
            $data['getRole'] = RoleModel::getRecord($id);
            return view('panel.user.edit', $data);
        }

        public function update($id, Request $request){

            $user = User::getSingle($id);
            $user->name = trim($request->name);
            if(!empty($request->password)){
                $user->password = Hash::make($request->password);
            }
            $user->role_id = trim($request->role_id);
            $user->save();

            return redirect('panel/user')->with('success', 'User successfully Updated');
        }
}
