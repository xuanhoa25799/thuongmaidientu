<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Controllers\UserController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    

    
    public function testIndex()
    {
        $response = $this->get('/admin/users/');
        $response->assertStatus(200);
        $response->assertViewIs('admin.user.index');
    }

    public function testStore()
    {
        $password = Hash::make(123456);
        $request = Request::create('/admin/users/store', 'POST',[
            'name'=> 'Xuan Hoa',
            'email'=> 'xuanhoa25799123@gmail.com',
            'password'=> $password
        ]);
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();
        $controller = new UserController($user,$role);
        $response = $controller->store($request);
        $this->assertDatabaseHas('users',[
            'name'=> 'Xuan Hoa',
            'email'=> 'xuanhoa25799123@gmail.com',
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testUpdate()
    {
        $id = 6;
        $password = Hash::make(123456);
        $request = Request::create('/admin/users/update/'.$id, 'POST',[
            'name'=> 'Xuan Hoa',
            'email'=> 'xuanhoa25799123@gmail.com',
            'password'=> $password
        ]);
        $user = factory(User::class)->create([
            'id' => $id,
            'name'=> 'abc',
            'email'=> 'abc@gmail.com',
            'password'=> Hash::make('abc123456')
        ]);
        $role = factory(Role::class)->create();
        $controller = new UserController($user,$role);
        $response = $controller->update($id, $request);
        $this->assertDatabaseHas('users',[
            'id'=>$id,
            'name'=> 'Xuan Hoa',
            'email'=> 'xuanhoa25799123@gmail.com',
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testDelete()
    {
        $id = 6;
        $user = factory(User::class)->create([
            'id' => $id,
            'name'=> 'abc',
            'email'=> 'abc@gmail.com',
            'password'=> Hash::make('abc123456')
        ]);
        $role = factory(Role::class)->create();
        $controller = new UserController($user,$role);
        $controller->delete($id);
        $this->assertDatabaseMissing('users',[
            'id'=>$id,
            'deleted_at'=>null
        ]);
    }
}
