<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\UserModel;

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
            $save = new RoleModel;
            $save->name = $request->name;
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
