<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Results extends Model {

     // use SoftDeletes;

    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'results';
    // protected $softDelete = true;
    protected $fillable = array(
        'name',
        'slug',
        'description',
        'price',
        'offer_price',
        'active'

        );

    // public $timestamps = false;

    public static $withAppends = true;

    public function setPriceAttribute($value)
    {

        $this->attributes['price'] = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    }

    public function setOfferPriceAttribute($value)
    {

        $this->attributes['offer_price'] = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    }


    public function getOfferPriceAttribute($value)
    {

        $priceValue = "£".number_format($value);

        return $priceValue;

    }


}