<?php
namespace App\Models;

Use Simple\Model;
Use function Simple\QueryBuilder\field;

class Bill extends Model
{
    /**
     * $table - table name using by this model
     *
     * @var string
     */
    protected $table = 'bills_tbl';

    /**
     * Fillables - the columns in you $table 
     *
     * @var array
     */
    protected $fillable = [
        'biller_name',
        'data'
    ];

    /**
     *  This is generated Bill model.
     *  It is recommended that you put all queries here. 
     *  Create Something great!
     */

     public static function all($id)
     {
        $query = parent::factory()
         ->select()
         ->from('bills_tbl')
         ->where(field('biller_name')->eq($id))
         ->compile();
         return self::run($query,['fetch_mode'=>'FETCH_ASSOC']);
     }
}
