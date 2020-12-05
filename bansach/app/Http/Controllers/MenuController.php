<?php

namespace App\Http\Controllers;

use App\Components\menuRecusive;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menuRecusive;
    private  $menu;
    public function  __construct(menuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }


    public function  index()
    {
        $menus = $this->menu->paginate(10);
        return view('admin.menus.index', compact('menus'));
    }
    public function create()
    {
        $htmloption = $this->menuRecusive->menuRecusiveAdd();
        return view('admin.menus.add', compact('htmloption'));
    }
    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }
    public function edit(Request $request, $id)
    {
        $menufollowIdEdit = $this->menu->find($id);
        $htmloption = $this->menuRecusive->menuRecusiveEdit($menufollowIdEdit->parent_id);
        return view('admin.menus.edit', compact('htmloption', 'menufollowIdEdit'));
    }
    public function update($id, Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }
    public function delete($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('menus.index');
    }
}
