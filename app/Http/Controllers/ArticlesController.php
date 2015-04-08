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


    public function __construct(){
        //Apply the auth only to the create/edit methods (will redirect to same page after auth)
        $this->middleware('auth',['only' => ['create','edit']]);
    }
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
    public function show(Article $article){

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
        Auth::user()->articles()->create($request->all());
        flash('Successfully created an article');
        return redirect('articles');
    }
    public function edit(Article $article){
        flash('Successfully edited the article');
        return view('articles.edit',compact('article'));

    }
    public function update(Article $article, ArticleRequest $request){

        $article->update($request->all());
        return redirect('articles');
    }

}
