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

        return view('panel.user.list');
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

            $data['getRecord'] = RoleModel::getSingle($id);
            return view('panel.user.edit', $data);
        }

        public function update($id, Request $request){

            $save = RoleModel::getSingle($id);
            $save->name = $request->name;
            $save->save();

            return redirect('panel/user')->with('success', 'User successfully Updated');
        }

        public function delete($id){

            $save = RoleModel::getSingle($id);
            $save->delete();

            return redirect('panel/role')->with('success', 'User successfully deleted');
        }
}
