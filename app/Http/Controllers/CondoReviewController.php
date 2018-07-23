<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\CondoReviews;
class CondoReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condo_reviews = CondoReviews::get();
        return view('admin.condo-review.index',compact('condo_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.condo-review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'no_of_floors' => 'required',
            'maintenance_fees' => 'required',
            'no_of_units' => 'numeric|required',
            'property_manage_contact' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'security_contact' => 'required',
            'leasing_contact' => 'required',
            'buying_contact' => 'required',
            'building_amenities' => 'required',
            'pets' => 'required',
            'corporation_no' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        CondoReviews::create($data);
        $msg = "Condo Review is created";
        Session::flash('success', $msg);
        return redirect('/condo-review');
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
        $condo_review = CondoReviews::where('id',$id)->first();
        return view('admin.condo-review.update',compact('condo_review'));
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
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'no_of_floors' => 'required',
            'maintenance_fees' => 'required',
            'no_of_units' => 'numeric|required',
            'property_manage_contact' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'security_contact' => 'required',
            'leasing_contact' => 'required',
            'buying_contact' => 'required',
            'building_amenities' => 'required',
            'pets' => 'required',
            'corporation_no' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        CondoReviews::where('id', $id)->update($data);
        $msg = "Condo Review is updated";
        Session::flash('success', $msg);
        return redirect('/condo-review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = CondoReviews::where('id', $id)->first();
        $client->delete();
        $msg = "Condo Review is deleted";
        Session::flash('success', $msg);
        return redirect('/condo-review');
    }
}
