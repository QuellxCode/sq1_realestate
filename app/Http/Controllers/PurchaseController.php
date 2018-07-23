<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Projects;
use App\PaymentTypes;
use Session;
use App\Units;
use App\PurchasePayments;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase = Purchase::get();
        return view('admin.purchase.index',compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Projects::get();
        $units = Units::get();
        return view('admin.purchase.create',compact('projects','units'));
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
            'project_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'property_name' => 'required',
            'area' => 'required',
            'unit_id' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'remarks' => 'required',
        ]);
        $data = $request->all();
        $purchase = Purchase::create($data);
        $msg = "Purchase  is created";
        Session::flash('success', $msg);
        return redirect('/purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchase = Purchase::where('id',$id)->first();
        return view('admin.purchase.view',compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Projects::get();
        $units = Units::get();
        $purchase = Purchase::where('id',$id)->first();
        return view('admin.purchase.edit',compact('purchase','projects','units'));
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
            'project_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'property_name' => 'required',
            'area' => 'required',
            'unit_id' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'remarks' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        Purchase::where('id', $id)->update($data);
        $msg = "Purchase  is Updated";
        Session::flash('success', $msg);
        return redirect('/purchase');
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

    public function purchasePayments(){
        $payment_type = PaymentTypes::get();
        return view('admin.purchase.create_purchase_payment',compact('payment_type'));
    }
    public function storePurchasePayments(Request $request, $id){
        $this->validate($request, [
            'paymenttype_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'remarks' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        $data['purchase_id'] = $id;
        PurchasePayments::create($data);

        $msg = "Purchase  is Updated";
        Session::flash('success', $msg);
        return redirect('/purchase');
    }
    public function purchasePaymentList($id){
        $purchase_payments = PurchasePayments::where('id',$id)->get();
        return view('admin.purchase.purchase_payment',compact('purchase_payments'));
    }
    public function purchasePaymentEdit($id){
        $payment_type = PaymentTypes::get();
        $purchase_payments = PurchasePayments::where('id',$id)->first();
        return view('admin.purchase.edit_purchase_payment',compact('purchase_payments','payment_type'));
    }
    public function purchasePaymentUpdate(Request $request, $id){
        $this->validate($request, [
            'paymenttype_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'remarks' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        PurchasePayments::where('id', $id)->update($data);

        $msg = "Purchase Payments  is Updated";
        Session::flash('success', $msg);
        return redirect('/purchase');
    }
    public function delete(){

    }
}
