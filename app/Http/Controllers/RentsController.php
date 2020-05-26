<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Service;
use App\Payment;
use App\PaymentLog;

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
        // $p = Payment::select('people_id')->groupBy('people_id')->get();

        // $no_payment = People::select('id')->whereNotIn('id',[2])->get();

        // $total_money = Service::select('service_money')->sum('service_money');

        // $due = Payment::select('people_id')->groupBy('people_id')->havingRaw('SUM(payment_money) < '.$total_money)->get();
        // $data = array(
        //     'people' => People::where('id',$due[0]->people_id)->get()
        // );
        // return $data;
        $peoples = People::where('full_payment_status','0')->get();
        return view('rent/dueRents')->with('peoples', $peoples);
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
        // Checks total incomming money
        $sum = 0;
        foreach ($request->payment_money as $key) {
            $sum += (int)$key;
        }

        $check_status = People::select('payment_status')->find($request->people_id);

        $total_money = Service::select('service_money')->sum('service_money');

        // Checks previous full payment or not
        if ($check_status->payment_status == 0) {
            for ($i = 0; $i < count($request->payment_services); $i++) {
                    $payment[] = [
                        'payment_services' => $request->payment_services[$i],
                        'payment_money' => isset($request->payment_money[$i]) ? $request->payment_money[$i] : '0',
                        'people_id' => $request->people_id,
                        'created_at' => date('Y-m-d h:i:s'),
                    ];
                }

            // Checks full payment or not
            if ($total_money <= $sum) {
                Payment::insert($payment);
                $success = People::where('id',$request->people_id)->update(['payment_status' => '1','full_payment_status' => '1']);
            }else{
                Payment::insert($payment);
                $success = People::where('id',$request->people_id)->update(['payment_status' => '1','full_payment_status' => '0']);
            }
        }else{

            // Update payment here
            for ($i = 0; $i < count($request->payment_services); $i++) {
                $payment[] = [
                    'payment_services' => $request->payment_services[$i],
                    'payment_money' => isset($request->payment_money[$i]) ? $request->payment_money[$i] : '0',
                    'people_id' => $request->people_id,
                    'created_at' => date('Y-m-d h:i:s'),
                    ];
                    Payment::where('people_id',$request->people_id)->where('payment_services', $request->payment_services[$i])->update(['payment_money' => $request->payment_money[$i]]);
                }
                $success = People::where('id',$request->people_id)->update(['payment_status' => '1','full_payment_status' => '1']);
            }
        
        // This is for payment logs
        for ($i = 0; $i < count($request->payment_services); $i++) {
            $payment[] = [
                'payment_services' => $request->payment_services[$i],
                'payment_money' => isset($request->payment_money[$i]) ? $request->payment_money[$i] : '0',
                'people_id' => $request->people_id,
                'created_at' => date('Y-m-d h:i:s'),
            ];
        }
        PaymentLog::insert($payment);


        if ($success) {
            return redirect('/rents')->with('success', 'Payment successful!');
        }else{
            return redirect('/rents')->with('error', 'There was a problem while updating the payment!');
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
            'people' => People::find($id),
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
    public function update()
    {
        $data = Session::get('data');
        return $data;
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
            'peoples' => People::join('payment_logs', 'payment_logs.people_id', '=', 'people.id')->join('services', 'services.id', '=', 'payment_logs.payment_services')->paginate(10)
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
