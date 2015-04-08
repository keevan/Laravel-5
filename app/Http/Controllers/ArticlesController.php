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

    /**
     *  Apply the auth only to the create/edit methods (will redirect to same page after auth)
     */
    public function __construct(){
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

    /**
     * Displays the article edit page
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article){

        return view('articles.edit',compact('article'));

    }

    /**
     *
     * Updates the article and flashes a message to the user.
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request){

        flash('Successfully edited the article');
        $article->update($request->all());
        return redirect('articles');
    }

}
