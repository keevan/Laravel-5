<?php namespace App\Http\Controllers;

class StaticController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Static Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders static views for the application and
    | is configured to only allow guests.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Removed this to stop automatic redirection if logged in.
        //$this->middleware('guest');
    }

    /**
     * Show's the contact page (views/pages/contact)
     *
     * @return Response
     */
    public function contact()
    {
        $name = "Kevin Pham";
        $email = "keevan.pham@gmail.com";
        return view('pages.contact',compact('name','email'));
    }

    /**
     * Show's the about page (views/pages/contact)
     *
     * @return Response
     */
    public function about()
    {
        $names = ['Jon Snow', 'Jane Doe', 'Bruce Wayne'];

        return view('pages.about',compact('names'));
    }
}
