<?php
namespace App\Models;

Use Simple\Model;
Use function Simple\QueryBuilder\field;

class Biller extends Model
{
    /**
     * $table - table name using by this model
     *
     * @var string
     */
    protected $table = 'billers';

    /**
     * Fillables - the columns in you $table 
     *
     * @var array
     */
    protected $fillable = [
        'biller_name',
        'monthly_due',
        'account_number',
        'account_name'
    ];

    /**
     *  This is generated Billers model.
     *  It is recommended that you put all queries here. 
     *  Create Something great!
     */

     public static function all()
     {
         $query = parent::factory()
         ->select()
         ->from('billers')
         ->compile();
         return self::run($query,['fetch_mode'=>'FETCH_ASSOC']);
     }
}
