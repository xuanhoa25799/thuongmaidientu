<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use App\Http\Requests\SachAddRequest;
use App\Sach;
use App\TheLoai;
use App\Http\Controllers\SachController;
use App\ProductImage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SachControllerTest extends TestCase
{
    use RefreshDatabase;
    

    
    public function testIndex()
    {
        $response = $this->get('/admin/sach/');
        $response->assertStatus(200);
        $response->assertViewIs('admin.Sach.index');
    }

    public function testStore()
    {
        $request = SachAddRequest::create('/admin/sach/store', 'POST',[
            'TenSach'=> 'Conan',
            'MaTheLoai'=> 1,
            'MoTa'=> 'Tham tu',
            'Gia'=> 20000,
            'So_Luong'=> 10,
            'Nam_XB'=> 1999,
            'user_id'=> 1,
            'feature_image_path'=> null,
            'feature_image_name'=> null,
        ]);
        $theloai = factory(TheLoai::class)->create();
        $sach = factory(Sach::class)->create();
        $productImage = factory(ProductImage::class)->create();
        $controller = new SachController($theloai, $sach, $productImage);
        $response = $controller->store($request);
        $this->assertDatabaseHas('saches',[
            'TenSach'=> 'Conan',
            'MaTheLoai'=> 1,
            'MoTa'=> 'Tham tu',
            'Gia'=> 20000,
            'So_Luong'=> 10,
            'Nam_XB'=> 1999,
            'user_id'=> 1,
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testUpdate()
    {
        $id = 6;
        $request = Request::create('/admin/sach/update/'.$id, 'POST',[
            'TenSach'=> 'Conan',
            'MaTheLoai'=> 1,
            'MoTa'=> 'Tham tu',
            'Gia'=> 20000,
            'So_Luong'=> 10,
            'Nam_XB'=> 1999,
            'user_id'=> 1,
            'feature_image_path'=> null,
            'feature_image_name'=> null,
        ]);
        $sach = factory(Sach::class)->create([
            'id'=>$id,
            'TenSach'=> 'abc',
            'MaTheLoai'=> 1,
            'MoTa'=> 'abcd',
            'Gia'=> 100000,
            'So_Luong'=> 1,
            'Nam_XB'=> 2021,
            'user_id'=> 1,
            'feature_image_path'=> null,
            'feature_image_name'=> null,
        ]);
        $theloai = factory(TheLoai::class)->create();
        $productImage = factory(ProductImage::class)->create();
        $controller = new SachController($theloai, $sach, $productImage);
        $response = $controller->update($id, $request);
        $this->assertDatabaseHas('saches',[
            'TenSach'=> 'Conan',
            'MaTheLoai'=> 1,
            'MoTa'=> 'Tham tu',
            'Gia'=> 20000,
            'So_Luong'=> 10,
            'Nam_XB'=> 1999,
            'user_id'=> 1,
        ]);
        $this->assertEquals(302,$response->getStatusCode());
    }

    public function testDelete()
    {
        $id = 6;
        $sach = factory(Sach::class)->create([
            'id' => $id,
            'TenSach'=> 'abc',
            'MaTheLoai'=> 1,
            'MoTa'=> 'abcd',
            'Gia'=> 100000,
            'So_Luong'=> 1,
            'Nam_XB'=> 2021,
            'user_id'=> 1,
            'feature_image_path'=> null,
            'feature_image_name'=> null,
        ]);
        $theloai = factory(TheLoai::class)->create();
        $productImage = factory(ProductImage::class)->create();
        $controller = new SachController($theloai, $sach, $productImage);
        $controller->delete($id);
        $this->assertDatabaseMissing('saches',[
            'id'=>$id,
            'deleted_at'=>null
        ]);
    }
}
