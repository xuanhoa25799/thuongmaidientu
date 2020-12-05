<?php

namespace App\Http\Controllers;

use App\Role;
use App\Traits\DeleteTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    use DeleteTrait;
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->user =  $user;
        $this->role = $role;
    }

    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.user.index',compact('users'));
    }

    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.add',compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password)
            ]);
            $roleIds = $request->role_id;
            $user->roles()->attach($roleIds);
            DB::commit();
            return redirect()->route('users.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('message: '.$exception->getMessage().'line: '.$exception->getLine());
        }

    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        $roles = $this->role->all();
        $rolesOfUser = $user->roles;
        return view('admin.user.edit', compact('roles','user','rolesOfUser'));
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password)
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('message: '.$exception->getMessage().'line: '.$exception->getLine());
        }

    }

    public function delete($id)
    {
        return $this->deleteTrait($id,$this->user);
    }
}
