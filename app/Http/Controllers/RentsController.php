<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Service;
use App\Payment;

class RentsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::all();
        return view('rent/dueRents')->with('peoples',$peoples);
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
        for ($i = 0; $i < count($request->payment_services); $i++) {
        $answers[] = [
            'payment_services' => $request->payment_services[$i],
            'payment_money' => isset($request->payment_money[$i]) ? $request->payment_money[$i] : '0',
            'people_id' => $request->people_id,
            'created_at' => date('Y-m-d h:i:s'),

        ];
    }
    $success = Payment::insert($answers);

        

        if ($success) {
            return redirect('/rents')->with('success', 'Payment successful!');
        }else{
            return redirect('/rents')->with('error', 'There was a problem while adding a person!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people_id = $id;
        $services = Service::all();

        $data = array(
            'people_id' => $people_id,
            'services' => $services
        );
        return view('rent/collectRent')->with($data);
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


    public function allRents()
    {
       $data = array(
            'peoples' => People::join('payments', 'payments.people_id', '=', 'people.id')->join('services', 'services.id', '=', 'payments.payment_services')->paginate(10)
       );
       
       return view('rent/allRents')->with($data);
    }


    public function paidRents($id)
    {
        $data = array(
            'payments' => Payment::where('people_id',$id)->join('services', 'services.id', '=', 'payments.payment_services')->join('people', 'payments.people_id', '=', 'people.id')->get()
        );
        return view('rent/paidRents')->with($data);
    }
    public function destroy($id)
    {
        //
    }
}
