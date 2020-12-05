<?php

namespace App\Http\Controllers;

use App\Http\Requests\SachAddRequest;
use App\ProductImage;
use App\Traits\DeleteTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use App\Sach;
use App\Components\Recusive;
use App\TheLoai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SachController extends Controller
{
    use DeleteTrait;
    use StorageImageTrait;
    private $theLoai;
    private $sach;
    private $productImage;
    public function __construct(TheLoai $theLoai,Sach $sach, ProductImage $productImage)
    {
        $this->theLoai=$theLoai;
        $this->sach=$sach;
        $this->productImage = $productImage;
    }

    public function getTheLoai($parentId)
    {
        $data = $this->theLoai->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->theloaiRecusive($parentId);
        return $htmlOption;
    }
    public function index()
    {
        $saches = $this->sach->latest()->paginate(5);

        return view('admin.Sach.index',compact('saches'));
    }
    public function create()
    {
        $htmlOption = $this->getTheLoai($parentId = '');
        return view('admin.Sach.add',compact('htmlOption'));
    }
    public function store(SachAddRequest $request)
    {
        try {
            DB::begintransaction();
            $dataSachCreate = [
                'ten_sach' => $request->ten_sach,
                'ma_the_loai' => $request->ma_the_loai,
                'mo_ta' => $request->mo_ta,
                'gia' => $request->gia,
                'user_id' => 2,
                'so_luong' => 10,
                'nam_xb' => $request->nam_xb,
                'slug' => str_slug($request->ten_sach)
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path','sach');
            if(!empty($dataUploadFeatureImage)){
                $dataSachCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataSachCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $sach = $this->sach->create($dataSachCreate);
            if($request->hasFile('image_path')){
                foreach($request->image_path as $fileItem){
                    $dataSachImageDetail = $this->storageTraitUploadMultiple($fileItem, 'sach');
                    $sach->images()->create([
                        'image_path' => $dataSachImageDetail['file_path'],
                        'image_name'=> $dataSachImageDetail['file_name'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('sach.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage(). 'Line: '.$exception->getLine());
        }

    }
    public function edit($id)
    {
        $sach = $this->sach->find($id);
        $htmlOption = $this->getTheLoai($sach->ma_the_loai);
        return view('admin.Sach.edit',compact('sach', 'htmlOption'));
    }
    public function delete($id)
    {
        $this->deleteTrait($id,$this->sach);
    }
    public function update($id, Request $request)
    {
        try {
            DB::begintransaction();
            $dataSachUpdate = [
                'ten_sach' => $request->ten_sach,
                'ma_the_loai' => $request->ma_the_loai,
                'mo_ta' => $request->mo_ta,
                'gia' => $request->gia,
                'user_id' => 2,
                'so_luong' => 10,
                'nam_xb' => $request->nam_xb,
                'slug' => str_slug($request->ten_sach)
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path','sach');
            if(!empty($dataUploadFeatureImage)){
                $dataSachUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataSachUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->sach->find($id)->update($dataSachUpdate);
            $sach = $this->sach->find($id);
            if($request->hasFile('image_path')){
                $this->productImage->where('product_id', $id)->delete();
                foreach($request->image_path as $fileItem){
                    $dataSachImageDetail = $this->storageTraitUploadMultiple($fileItem, 'sach');
                    $sach->images()->create([
                        'image_path' => $dataSachImageDetail['file_path'],
                        'image_name'=> $dataSachImageDetail['file_name'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('sach.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage(). 'Line: '.$exception->getLine());
        }
    }
}
