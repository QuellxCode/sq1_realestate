<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Session;
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::get();
        return view('admin.plan.index',compact('plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plan.create');

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
            'installment' => 'required'

        ]);

        $data = $request->all();
        $plan = Plan::create($data);
        $msg = "Plan  is created";
        Session::flash('success', $msg);
        return redirect('/plan');
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
        $plan = Plan::where('id',$id)->first();
        return view('admin.plan.edit',compact('plan'));
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
            'installment' => 'required'
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        $plan = Plan::where('id',$id)->update($data);
        $msg = "Plan  is updated";
        Session::flash('success', $msg);
        return redirect('/plan');
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

    public function delete($id){
        $user = Plan::where('id',$id)->first();
        $user->delete();
        $msg = "Plan is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }
}
