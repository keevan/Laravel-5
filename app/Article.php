<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    /*---------------------------------------------------------
    | Which fields I'm okay with being mass assigned
    | This protects the table from being changed from a modified
    | form for example.
    |---------------------------------------------------------*/
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];


}
