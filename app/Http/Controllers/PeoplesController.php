<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeoplesController extends Controller
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
        $peoples = People::orderBy('id','asc')->paginate(5);
        return view('showPeoples')->with('peoples', $peoples);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $floor = $request->input('floor');
        $room = $request->input('room');
        $data = array(
            'floor' => $floor,
            'room' => $room
        );

        if(is_null($floor) && is_null($room)){
            return redirect('/rooms')->with('error', 'Select room first!!!');
        }else{
            return view('addPeoples')->with('data', $data);
        }
        
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
            'people_name' => 'required',
            'people_contact' => 'required',
            'people_home_address' => 'required',
            'people_designation' => 'required',
            'people_total' => 'required'
        ]);

       // create posts
        $people = new People;
        $people->people_name = $request->input('people_name');
        $people->people_contact = $request->input('people_contact');
        $people->people_contact_other = $request->input('people_contact_other');
        $people->people_home_address = $request->input('people_home_address');
        $people->people_designation = $request->input('people_designation');
        $people->people_total = $request->input('people_total');

        $people->people_selected_room = $request->input('people_selected_room');
        $people->people_selected_floor = $request->input('people_selected_floor');

        $people->user_id = auth()->user()->id;
        $success = $people->save();

        if ($success) {
            return redirect('/peoples')->with('success', 'Person ('.$request->input('people_name').') added successfully!');
        }else{
            return redirect('/peoples')->with('error', 'There was a problem while adding a person!');
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
        $people = People::find($id);
        return view('showPeopleProfile')->with('people', $people);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::find($id);
        return view('editPeoples')->with('people', $people);
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
            'people_name' => 'required',
            'people_contact' => 'required',
            'people_home_address' => 'required',
            'people_designation' => 'required',
            'people_total' => 'required',
            
        ]);

       // create posts
        $people = People::find($id);
        $people->people_name = $request->input('people_name');
        $people->people_contact = $request->input('people_contact');
        $people->people_contact_other = $request->input('people_contact_other');
        $people->people_home_address = $request->input('people_home_address');
        $people->people_designation = $request->input('people_designation');
        $people->people_total = $request->input('people_total');

        $people->user_id = auth()->user()->id;

        $success = $people->save();

        if ($success) {
            return redirect('/peoples')->with('success', 'Person updated successfully!');
        }else{
            return redirect('/peoples')->with('error', 'There was a problem while updating person!');
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
       $people = People::find($id);

        $success = $people->delete();

        if ($success) {
            return redirect('/peoples')->with('success', 'Person ('.$people->people_name.') Deleted!!!');
        }else{
            return redirect('/peoples')->with('error', 'Person not Deleted!!!');
        }
    }
}
