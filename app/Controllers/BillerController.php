<?php
namespace App\Controllers;
    
Use Simple\Request;
Use App\Helper\Validation\Validator as validate;
Use Simple\Session;
Use App\Models\Biller;

class BillerController extends Controller 
{
    
    public function index() 
    {
        
    }

    public function store(Request $request)
    {
        $request->filterRequest('POST');
        $data = $request->post();
        $v = new validate;
        $v->validation_rules(array(
            'biller_name' => 'required|alpha|max_len,100',
            'due'         => 'date|required',
            'acc_num'     => 'alpha_numeric|required',
            'acc_name'    => 'required|valid_name|min_len,6'
        ));

        validate::set_field_name("biller_name", "Biller Name");
        validate::set_field_name("due", "Monthly Due Date");

        $validated = $v->run($data);

        if($validated){
            $biller                 = new Biller;
            $biller->biller_name    = strtoupper($request->biller_name);
            $biller->monthly_due    = $request->due;
            $biller->account_number = $request->acc_num;
            $biller->account_name   = strtoupper($request->acc_name);
            
            if($biller->save()){
                Session::flush(['success'=>'New Biller has been added']);               
                $request->redirect('/dashboard/index/biller');
            }
        } else {
            Session::flush($v->get_errors_array());            
            $request->redirect('/dashboard/index/biller');
        }
    }
    
}