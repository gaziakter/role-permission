<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;

class RoleController extends Controller
{
    //
    public function list(){

        $data['getRecord'] = RoleModel::getRecord();
        return view('panel.role.list', $data);
    }

        //
        public function add(){

            return view('panel.role.add');
        }

        public function insert(Request $request){
            $save = new RoleModel;
            $save->name = $request->name;
            $save->save();

            return redirect('panel/role')->with('succss', 'Role successfully created');
        }

        public function edit($id){

            $data['getRecord'] = RoleModel::getSingle($id);
            return view('panel.role.edit', $data);
        }

        public function update($id, Request $request){

            $save = RoleModel::getSingle($id);
            $save->name = $request->name;
            $save->save();

            return redirect('panel/role')->with('succss', 'Role successfully Updated');
        }
}
