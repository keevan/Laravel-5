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
        $this->middleware('guest');
    }

    /**
     * Show's the contact page (views/pages/contact)
     *
     * @return Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show's the about page (views/pages/contact)
     *
     * @return Response
     */
    public function about()
    {
        return view('pages.about');
    }
}
