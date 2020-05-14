<?php
namespace App\Controllers;
    
Use Simple\Request;
Use App\Models\Biller;

class DashboardController extends Controller 
{
    
    /**
     * the index action can be use to show all the records
     *
     * @return void
     */
    public function indexAction() 
    {
    $billers = Biller::all();
       return view('dashboard.index',[
           'billers' => $billers
       ]);
    }

    /**
     * Shows the from for creating DashboardController
     * 
     * @return void
     */
    public function create()
    {
        
    }

    /**
     * Store the data from DashboardController POST form
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Show the edit form for DashboardController
     *
     * @param Request $request
     * @return void
     */
    public function edit(Request $request)
    {
        $id = $request->route('id');
    
    }

    /**
     * Update the existing record
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $id = $request->route('id');
    
    }

    /**
    * Delete the record 
    *
    * @param Request $request
    * @return void
    */
    public function destroy(Request $request)
    {
        $id = $request->route('id');
    
    }

}