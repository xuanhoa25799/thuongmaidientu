<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSettingRequest;
use App\Setting;
use App\Traits\DeleteTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    use DeleteTrait;
    private $setting;
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $settings = $this->setting->latest()->paginate(5);
        return view('admin.setting.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.setting.add');
    }

    public function store(AddSettingRequest $request)
    {
        $this->setting->create([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type
        ]);
        return redirect()->route('setting.index');
    }

    public function edit($id)
    {
        $settings = $this->setting->find($id);
        return view('admin.setting.edit', compact('settings'));
    }

    public function update(Request $request,$id)
    {
        $this->setting->find($id)->update([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value
        ]);
        return redirect()->route('setting.index');
    }

    public function delete($id)
    {
        return $this->deleteTrait($id, $this->setting);
    }
}
