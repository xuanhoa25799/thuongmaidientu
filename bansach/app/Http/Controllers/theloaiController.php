<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;
use App\Components\Recusive;

class theloaiController extends Controller
{
    private $theLoai;
    public function __construct(TheLoai $theLoai)
    {
        $this->theLoai = $theLoai;
    }

    public function create()
    {
        $htmlOption = $this->getTheLoai($parentId = '');
        return view('admin.theloai.add', compact('htmlOption'));

    }

    public function index()
    {
        $theloais = $this->theLoai->latest()->paginate(5);
        return view('admin.theloai.index', compact('theloais'));
    }
    public function store(Request $request)
    {
        $this->theLoai->create([
            'tentheloai' => $request->tentheloai,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->tentheloai)
        ]);
        return redirect()->route('theloai.index');
    }

    public function getTheLoai($parentId)
    {
        $data = $this->theLoai->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->theloaiRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id)
    {
        $theloai = $this->theLoai->find($id);
        $htmlOption = $this->getTheLoai($theloai->parent_id);

        return view('admin.theloai.edit', compact('theloai', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $this->theLoai->find($id)->update([
            'tentheloai' => $request->tentheloai,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->tentheloai)
        ]);
        return redirect()->route('theloai.index');
    }

    public function delete($id)
    {
        $this->theLoai->find($id)->delete();
        return redirect()->route('theloai.index');
    }
}
