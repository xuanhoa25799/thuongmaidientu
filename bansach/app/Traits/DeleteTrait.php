<?php
namespace app\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait DeleteTrait{
    public function deleteTrait($id, $model)
    {
        try{
            $model->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message'=>'success'
            ],200);
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage(). 'Line: '.$exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail'
            ],500);
        }
    }
}
