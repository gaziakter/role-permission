<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;

class RoleController extends Controller
{
    //
    public function list(){

        $data['getRecord'] = RoleModel::getRecord();
        return view('panel.role.list', $data);
    }

        //
        public function add(){

            $getPermission = PermissionModel::getRecord();
            $data['getPermission'] = $getPermission;
            return view('panel.role.add', $data);
        }

        public function insert(Request $request){
            $save = new RoleModel;
            $save->name = $request->name;
            $save->save();

            return redirect('panel/role')->with('success', 'Role successfully created');
        }

        public function edit($id){

            $data['getRecord'] = RoleModel::getSingle($id);
            return view('panel.role.edit', $data);
        }

        public function update($id, Request $request){

            $save = RoleModel::getSingle($id);
            $save->name = $request->name;
            $save->save();

            return redirect('panel/role')->with('success', 'Role successfully Updated');
        }

        public function delete($id){

            $save = RoleModel::getSingle($id);
            $save->delete();

            return redirect('panel/role')->with('success', 'Role successfully deleted');
        }
}
