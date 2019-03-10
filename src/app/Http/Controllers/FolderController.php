<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    public function create(CreateFolder $request)
    {
        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // タイトルに入力値を代入する
        $folder->title = $request->title;

        // インスタンスの状態をデータベースに書き込む
        Auth::user()->folders()->save($folder);

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    public function showEditForm(int $id)
    {
        $folder = Folder::find($id);

        return view('folders/edit', [
            'folder' => $folder,
        ]);
    }

    public function edit(int $id,Request $request)
    {
        $folder = Folder::find($id);
        $req = $request->all();
        unset($req['_token']);
        //$folder->title = $request->title;
        $folder->fill($req);
        $folder->save();

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }


    public function delete(int $id)
    {
        // 削除したいフォルダを見つける。
        $folder = Folder::find($id);
        // 削除する
        $folder->delete();

        // 所有しているフォルダの一番目を所得。
        $first_folder = Folder::first();


        return redirect()->route('tasks.index', [
            'id' => $first_folder->id,
        ]);
    }


}
