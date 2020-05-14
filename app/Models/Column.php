<?php
namespace App\Models;

Use Simple\Model;
Use function Simple\QueryBuilder\field;

class Column extends Model
{
    /**
     * $table - table name using by this model
     *
     * @var string
     */
    protected $table = 'columns';

    /**
     * Fillables - the columns in you $table 
     *
     * @var array
     */
    protected $fillable = [
       'column_for',
       'column_name',
       'datatype',
       'column_description',
       'column_status'
    ];

    /**
     *  This is generated Column model.
     *  It is recommended that you put all queries here. 
     *  Create Something great!
     */

     public static function all($for)
     {
        if($for=='all'){
         $query = parent::factory()
         ->select()
         ->from('columns')        
         ->compile(); 
        } else {
           $query = parent::factory()
        ->select()
        ->from('columns')
        ->where(field('column_for')->eq($for))
        ->andWhere(field('column_status')->eq(true))        
        ->compile(); 
        }
             
        return self::run($query,['fetch_mode'=>'FETCH_ASSOC']);
     }
}
