<?php namespace App;

use Carbon\Carbon;
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
    protected $dates = ['published_at'];

    /**
     * Scope queries to articles that have published.
     *
     * @param $query
     */
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());

    }

    /**
     * Scope queries to articles that haven't yet published.
     *
     * @param $query
     */
    public function scopeUnpublished($query){
        $query->where('published_at','>',Carbon::now());

    }

    /**
     * Set the published_at attribute
     *
     * @param $date
     */
    public function setPublisherAttribute($date){
        $this->attributes['published_at']=Carbon::parse($date);

    }

    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

}
