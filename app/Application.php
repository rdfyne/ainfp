<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use SoftDeletes;

    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = true;
    
    /**
     * annual revenue.
     *
     * @param  double  $value
     * @return int
     */
    public function getAnnualRevenueAttribute($value)
    {
        return floor($value);
    }

    /**
     * farmers number.
     *
     * @param  double  $value
     * @return int
     */
    public function getFarmersNumberAttribute($value)
    {
        return floor($value);
    }
}
