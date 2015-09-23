<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category', 'description', 'phone', 'secondary_category', 'location', 'capacity', 'user_id'];

}
