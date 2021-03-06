<?php namespace IronLab\SimpleReviews\Models;

use Model;
use Lang;

/**
 * SimpleReview Model
 */
class SimpleReview extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ironlab_simplereviews_simple_reviews';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /*Validation fields*/
    public $rules = [
        'name' => 'required',
        'text' => 'required'
    ];
}
