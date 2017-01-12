<?php namespace JasonSwint\FlyeNotify\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * signups Model
 */
class Signups extends Model
{
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jasonswint_flyenotify_signups';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'email'];

    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

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
}
