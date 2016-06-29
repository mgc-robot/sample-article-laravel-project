<?php

namespace App\Http\Controllers;

use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{

    protected $articlesRepository;

    public function __construct(ArticleRepository $articlesRepository)
    {
        $this->articlesRepository = $articlesRepository;
    }

    public function index()
    {

        return view('articles.index')->with('articles', $this->articlesRepository->all());
    }

    public function show($slug)
    {
        $article = $this->articlesRepository->findBy('slug', $slug);
        if (is_null($article)) {
            abort(404);
        }

        return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        return view('articles.new');
    }

    public function store(Request $request)
    {
        $data = [
            'title'   => $request->get('title'),
            'slug'    => str_slug($request->get('title')),
            'content' => $request->get('content')
        ];
        $this->articlesRepository->create($data);

        return redirect('/articles/');
    }

    public function edit($slug)
    {
        $article = $this->articlesRepository->findBy('slug', $slug);
        if (is_null($article)) {
            abort(404);
        }

        return view('articles.edit')->with('article', $article);
    }

    public function update(Request $request)
    {
        $data = [
            'title'   => $request->get('title'),
            'content' => $request->get('content')
        ];
        $this->articlesRepository->findBy('slug', $request->get('slug'))->update($data);

        return redirect('/articles/');
    }

    public function destroy($id)
    {
        $this->articlesRepository->delete($id);
        return redirect('/articles/');
    }
}
