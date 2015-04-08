<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateArticle;
use Carbon\Carbon;


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
    public function store(CreateArticle $request){
        // Protected via fillable
        Article::create($request->all());
        return redirect('articles');
    }
}
