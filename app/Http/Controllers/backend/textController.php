<?php

namespace App\Http\Controllers\backend;


use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

use function Ramsey\Uuid\v1;

class textController extends Controller
{
    public function text(){

        //------Role------//
       // $role = Role::create(['name' => 'user']);
       
       //-------parmition---//
       //$permission = Permission::create(['name' => 'Add articles']);

       //------role hs parmission--------//

       //$role = Role::find(3);
       //$permission = Permission::find(3);
       //$role->givePermissionTo($permission);

       //------model--has--role----//

       //$role = Role::find(3);
       //$user = User::find(133);
       //$user->assignRole($role);



        //return ("ok");

        
    }

    public function rolepermition(){

        $roles = Role::all();
        $permitions = Permission::all();
        return view('backend.rolepermition',compact('roles','permitions'));

    }

    public function addpermition(Request $request){

     $permission = Permission::create(['name' => $request->permition]);

     return back();
       
    }

    public function create_permition_to_role(Request $request, $id){

        $permitions = Permission::all();
     return view('backend.createassign', compact('id','permitions'));
       
    }

    public function store_permition_to_role(Request $request, $id){

        $permition = $request->permition;
        //dd($permitions,$id);

        
       $role = Role::find($id);
       $permission = Permission::find($permition);
       $role->givePermissionTo($permission);

       return back();
        
    }
}
