<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class RolesController extends Controller
{
    public function index()
    { 
        //dd(20);
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::all()->pluck('title', 'id');

        return view('admin.roles.create',[
            'permissions' => $permissions ,
            'role' => new Role(),
        ]);
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        \Session::flash("msg","s:($role->title) added successfully");

        return redirect()->route('roles.index');

    }

    public function edit(Role $role)
    {

        $permissions = Permission::pluck('title', 'id');
        $role->load('permissions');
        return view('admin.roles.edit',[
         'permissions'=> $permissions,
         'role' => $role ,
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        \Session::flash("msg","s:($role->title) Updated successfully");
        return redirect()->route('roles.index');
    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role->load('permissions');

        return view('admin.roles.show', compact('role'));
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $role->delete();
         \Session::flash("msg","e:Role Deleted successfully");
        return back();
    }
}
