<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArticle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller {

	//
    /**
     * Show all articles
     */
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index',compact('articles'));
    }

    /**
     * Shows single article
     */
    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));

    }

    /**
     * Shows article creation page
     */
    public function create(){
        return view('articles.create');
    }

    /**
     * Saves a created article.
     * @param CreateArticle $request
     * @return Redirect
     */
    public function store(ArticleRequest $request){
        // Binds user with an article.
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        return redirect('articles');
    }
    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));

    }
    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

}
