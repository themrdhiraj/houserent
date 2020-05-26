<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class HouseServices extends Controller
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
        $services = Service::orderBy('id', 'asc')->paginate(5);
        return view('service/showServices')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/addServices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'service_name' => 'required',
            'service_money' => 'required',
        ]);

       // create posts
        $service = new Service;
        $service->service_name = $request->input('service_name');
        $service->service_money = $request->input('service_money');
        $service->user_id = auth()->user()->id;

        $success = $service->save();

        if ($success) {
            return redirect('/services')->with('success', 'Service added successfully!');
        }else{
            return redirect('/services')->with('error', 'There was a problem while adding service!');
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
        $service = Service::find($id);
        return view('service/editServices')->with('service', $service);
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
        $this->validate($request,[
            'service_name' => 'required',
            'service_money' => 'required',
        ]);

       // create posts
        $service = Service::find($id);
        $service->service_name = $request->input('service_name');
        $service->service_money = $request->input('service_money');
        $service->user_id = auth()->user()->id;

        $success = $service->save();

        if ($success) {
            return redirect('/services')->with('success', 'Service updated successfully!');
        }else{
            return redirect('/services')->with('error', 'There was a problem while updating service!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        $success = $service->delete();

        if ($success) {
            return redirect('/services')->with('success', 'Service '.$service->service_name.' Deleted!!!');
        }else{
            return redirect('/services')->with('error', 'Service not Deleted!!!');
        }
    }
}
