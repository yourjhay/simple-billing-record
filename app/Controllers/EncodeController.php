<?php
namespace App\Controllers;
    
Use Simple\Request;
Use App\Models\Column; 
Use App\Models\Bill;
class EncodeController extends Controller 
{
    
    public function index() 
    {
    
    }

    public function show(Request $request)
    {
        $biller_id = Request::route('billerid');
        $bills     = Bill::all($biller_id);
        $cols      = Column::all($biller_id);

        return view('encode_pages.form',[
            'cols'   => $cols,
            'biller' => $biller_id,
            'bills'  => $bills
        ]);
    }

    public function showColumn() 
    {
        $cols = Column::all(Request::route('billerid'));
        return view('encode_pages.columns',[
            'cols' => $cols
        ]);
    }

    public function column(Request $request)
    {
        $method = Request::route('method');
        if($method=='store'){
            $col = new Column;
            $col->column_for = $request->new_col_for;
            $col->column_name = $request->col_name;
            $col->datatype = $request->col_dtype;
            $col->column_status = true; 
            if($col->save()){
                return 'success';
            }
        }
    }

    public static function storeBill(Request $request)
    {
       //dd($request->post());

        $bill = new Bill;
        $bill->biller_name =$request->biller_name;
        $bill->data = json_encode($request->post());
        $bill->save();
        $request->redirect('/dashboard/index');
    }
}