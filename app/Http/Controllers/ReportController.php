<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
    	$data['menu'] = 7;
    	$data['title'] = "Report Transaksi";
    	$data['no'] = 1;

    	if(!isset($_GET['type'])) {
	    	return view('report/index', $data);
    	} else {
    		$data['data'] = $request->toArray();
    		switch ($request->type) {
    			case 'all':
    				$data['bookings'] = Booking::whereBetween('order_date', [$request['start_date'], $request['end_date']])
    				->join('clients', 'clients.client_id', '=', 'bookings.client_id')
    				->join('cars', 'cars.car_id', '=', 'bookings.car_id')
    				->get();
    				break;
    			case 'process' :
    				$data['bookings'] = Booking::where('status', 'process')->whereBetween('order_date', [$request['start_date'], $request['end_date']])
    				->join('clients', 'clients.client_id', '=', 'bookings.client_id')
    				->join('cars', 'cars.car_id', '=', 'bookings.car_id')
    				->get();
    				break;
    			case 'paid' :
    				$data['bookings'] = Booking::where('status', 'paid')->whereBetween('order_date', [$request['start_date'], $request['end_date']])
    				->join('clients', 'clients.client_id', '=', 'bookings.client_id')
    				->join('cars', 'cars.car_id', '=', 'bookings.car_id')
    				->get();
    				break;
    		}
    		if($request->type == 'all'){
    			
    		} else if($request->type == 'process'){

    		}
    		
    		return view('report/transaction', $data);
    	}
    	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
