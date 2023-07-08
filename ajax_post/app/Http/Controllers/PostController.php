<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    /**
     * Write code on Method
     * (Escribir código en el método)
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $posts = Post::paginate(5);

        if ($request->ajax()) {
            $view = view('data', compact('posts'))->render();

            return response()->json(['html' => $view]);
        }

        return view('posts', compact('posts'));
    }

    public function loadMoreProducts(Request $request)
{
    $page = $request->input('page', 1);
    $perPage = 10; // La misma cantidad que se utilizó en el controlador de la vista

    $offset = ($page - 1) * $perPage;

    $newProducts = Product::offset($offset)->limit($perPage)->get();

    return response()->json(['html' => view('products.load-more', compact('newProducts'))->render()]);
}


}
