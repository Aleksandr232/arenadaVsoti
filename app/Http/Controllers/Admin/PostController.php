<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(10);
        /* $posts_news = PostNews::query()->paginate(10); */

        return view('admin.posts.index', compact('posts'));

    }



    public function create()
    {
        return view('admin.posts.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|image||max:10240',
        ],
        [
            'title.required' => 'Поле заголовок статьи должно быть заполнено',
            'content.required' => 'Поле описание статьи должно быть заполнено',
            'img.required' => 'Загрузите фотографию статьи',
            'img.image' => 'Фотография статьи должна быть файлом изображения',
            'img.max' => 'Фотография статьи не должна превышать размер 10 мб',
        ]);

        $data = $request->all();
        $data['img'] = Post::uploadImage($request);
        $data['img'] = PostNews::uploadImage($request);


        $post = Post::query()->create($data);
        $posts_news = PostNews::query()->create($data);

        return redirect()->route('posts.index')->with('success', 'Статья добавлена');
    }



    public function edit($id)
    {
        $post = Post::query()->find($id);
        $posts_news = PostNews::query()->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'image|max:10240',
        ],
        [
            'title.required' => 'Поле заголовок статьи должно быть заполнено',
            'content.required' => 'Поле описание статьи должно быть заполнено',
            'img.image' => 'Фотография статьи должна быть файлом изображения',
            'img.max' => 'Фотография статьи не должна превышать размер 10 мб',
        ]);

        $post = Post::query()->find($id);
        $posts_news = PostNews::query()->find($id);
        $data = $request->all();

        if ($file = Post::uploadImage($request, $post->img)) {
            $data['img'] = $file;
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        $post = Post::query()->find($id);
        Storage::delete($post->img);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Статья удалена');
    }
}
