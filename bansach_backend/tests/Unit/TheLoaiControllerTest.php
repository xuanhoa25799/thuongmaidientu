<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use App\TheLoai;
use App\Http\Controllers\theloaiController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TheLoaiControllerTest extends TestCase
{
    
    use RefreshDatabase;
    

    
    public function testIndex()
    {
        $response = $this->get('/admin/theloai/');
        $response->assertStatus(200);
        $response->assertViewIs('admin.theloai.index');
    }

    public function testStore()
    {
        $request = Request::create('/admin/theloai/store', 'POST',[
            'tentheloai'=> 'thieu nhi',
            'parent_id'=> 1,
            'slug'=> 'thieu_nhi'
        ]);
        $theloai = factory(TheLoai::class)->create();
        $controller = new theloaiController($theloai);
        $response = $controller->store($request);
        $this->assertDatabaseHas('the_loais',[
            'tentheloai'=> 'thieu nhi',
            'parent_id'=> 1,
            'slug'=> 'thieu-nhi'
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testUpdate()
    {
        $id = 6;
        $request = Request::create('/admin/theloai/update/'.$id, 'POST',[
            'tentheloai'=> 'thieu nhi',
            'parent_id'=> 0,
            'slug'=> 'thieu-nhi'
        ]);
        $theloai = factory(TheLoai::class)->create([
            'id' => $id,
            'tentheloai'=> 'abcd',
            'parent_id'=> 1,
            'slug'=> 'a-b-c-d'
        ]);
        $controller = new theloaiController($theloai);
        $response = $controller->update($id, $request);
        $this->assertDatabaseHas('the_loais',[
            'id'=>$id,
            'tentheloai'=> 'thieu nhi',
            'parent_id'=> 0,
            'slug'=> 'thieu-nhi'
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testDelete()
    {
        $id = 6;
        $theloai = factory(TheLoai::class)->create([
            'id' => $id,
            'tentheloai'=> 'abcd',
            'parent_id'=> 1,
            'slug'=> 'a-b-c-d'
        ]);
        $controller = new theloaiController($theloai);
        $controller->delete($id);
        $this->assertDatabaseMissing('the_loais',[
            'id'=>$id,
            'deleted_at'=>null
        ]);
    }
}
