<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sensor
 * @package App\Models
 * @version April 17, 2020, 1:52 am UTC
 *
 * @property integer kelembaban
 * @property integer suhu
 * @property integer ph
 */
class Sensor extends Model
{
    use SoftDeletes;

    public $table = 'sensors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kelembaban',
        'suhu',
        'ph'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kelembaban' => 'integer',
        'suhu' => 'integer',
        'ph' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
