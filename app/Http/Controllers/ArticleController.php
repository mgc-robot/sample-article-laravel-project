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

    public function show($id)
    {
        return view('articles.show')->with('articles', $this->articlesRepository->findBy('id', $id));
    }
}
