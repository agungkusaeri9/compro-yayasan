<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::latest()->get();
        return view('admin.pages.post.index', [
            'title' => 'Berita',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('admin.pages.post.create', [
            'title' => 'Tambah Berita'
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', Rule::unique('posts')->ignore(request('id'))],
            'status' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg', 'max:2048']
        ]);

        $data = request()->all();
        if (request()->file('image')) {
            $data['image'] = request()->file('image')->store('posts', 'public');
        } else {
            $data['image'] = NULL;
        }
        $data['slug'] = \Str::slug(request('title'));
        $data['user_id'] = auth()->id();
        $post = Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Data Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Post::findOrFail($id);
        return view('admin.pages.post.edit', [
            'title' => 'Edit Berita',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'title' => ['required', Rule::unique('posts')->ignore($id)],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg', 'max:2048']
        ]);
        $item = Post::findOrFail($id);

        $data = request()->all();
        if (request()->file('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = request()->file('image')->store('posts', 'public');
        } else {
            $data['image'] = $item->image;
        }
        $data['slug'] = \Str::slug(request('title'));
        $item->update($data);
        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy($id)
    {
        $item = Post::findOrFail($id);

        DB::beginTransaction();
        try {
            $item->delete();
            DB::commit();
            return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil dihapus.');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
