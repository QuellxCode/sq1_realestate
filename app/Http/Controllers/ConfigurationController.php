<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configurations;
use Session;
use App\Categories;
use App\PaymentTypes;
use App\Currencies;
use App\Tax;
use Image;
use App\Units;
use App\Navbar;
class ConfigurationController extends Controller
{
    public function general(Request $request){
        $configuration =  Configurations::first();
        if (! $request->isMethod('post')) {
            return view('admin.configuration.general',compact('configuration'));
        }
        else{
            $this->validate($request, [
                'name' => 'required',
                'organization_name' => 'required',
                'domain_name' => 'required',
                'email' => 'required',
                'meta_title' => 'required',
                'meta_desc' => 'required',
                'timezone' => 'required',
//                'sms_notification' => 'required',
//                'email_notification' => 'required',
                'contact' => 'required',
                'currency' => 'required',
                'date_format' => 'required',
                'address' => 'required',
                'account_details' => 'required',
                'due_days' => 'required',
                'late_fees' => 'required',
                'language' => 'required',
                'dir_type' => 'required',
                'about_website'=>'required',
                //'translate' => 'required',
            ]);

            $data = $request->all();

           if(count($configuration) > 0){

               Configurations::first()->update($data);
           }else{
               Configurations::create($data);
           }

            $msg = "Configuration is updated";
            Session::flash('success', $msg);
            return redirect()->back();
        }

    }
    public function categoryList(){
        $categories  = Categories::get();
        return view('admin.configuration.category-list',compact('categories'));

    }

    public function categoryCreate(){
        return  view('admin.configuration.category-create');
    }
    public function categoryStore(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'short_name' => 'required',
            'ordering' => 'required',
            'type' => 'required',
        ]);
        $data = $request->all();
        Categories::create($data);
        $msg = "Category is created";
        Session::flash('success', $msg);
        return redirect('category-list');
    }
    public function categoryEdit($id){
        $category  = Categories::where('id',$id)->first();

        return  view('admin.configuration.category-edit',compact('category'));
    }
    public function categoryUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'short_name' => 'required',
            'ordering' => 'required',
            'type' => 'required',
        ]);
        $data = $request->all();
        Categories::where('id',$id)->update($data);
        $msg = "Category is updated";
        Session::flash('success', $msg);
        return redirect('category-list');
    }
    public function categoryDelete($id){
        $category  = Categories::where('id',$id)->first();
        $category->delete();
        $msg = "Category is deleted";
        Session::flash('success', $msg);
        return redirect('category-list');
    }
    public function paymentType(){
        $payment_type  = PaymentTypes::get();
        return view('admin.configuration.payment-type',compact('payment_type'));

    }
    public function paymentTypeCreate(){
        return  view('admin.configuration.create-payment-type');
    }
    public function paymentTypeStore(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $payment_type = new PaymentTypes;
        $payment_type->name = $request->name;
        $payment_type->save();
        $msg = "Payment Type is created";
        Session::flash('success', $msg);
        return redirect('payment-type-list');
    }
    public function paymentTypeEdit($id){
    $payment_type  = PaymentTypes::where('id',$id)->first();

    return  view('admin.configuration.edit-payment-type',compact('payment_type'));
}
    public function paymentTypeUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        PaymentTypes::where('id',$id)->update(['name'=>$request->name]);
        $msg = "Payment Type is updated";
        Session::flash('success', $msg);
        return redirect('payment-type');

    }
    public function paymentTypeDelete($id){
        $payment_type  = PaymentTypes::where('id',$id)->first();
        $payment_type->delete();
        $msg = "Payment Type is deleted";
        Session::flash('success', $msg);
        return redirect('payment-type');
    }

    public function currency(){
        $currency  = Currencies::get();
        return view('admin.configuration.currency',compact('currency'));

    }
    public function currencyCreate(){
        return  view('admin.configuration.currency-create');
    }
    public function currencyStore(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'short' => 'required',
        ]);
        $data = $request->all();
        Currencies::create($data);
        $msg = "Currency is created";
        Session::flash('success', $msg);
        return redirect('currency');
    }
    public function currencyEdit($id){
        $currency  = Currencies::where('id',$id)->first();

        return  view('admin.configuration.edit-currency',compact('currency'));
    }
    public function currencyUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'short' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        Currencies::where('id',$id)->update($data);
        $msg = "Currency is updated";
        Session::flash('success', $msg);
        return redirect('currency');

    }
    public function currencyDelete($id){
        $payment_type  = Currencies::where('id',$id)->first();
        $payment_type->delete();
        $msg = "Currency is deleted";
        Session::flash('success', $msg);
        return redirect('currency');
    }
    public function tax(){
        $tax = Tax::get();
        return view('admin.configuration.tax',compact('tax'));

    }
    public function taxCreate(){
        return  view('admin.configuration.tax-create');
    }
    public function taxStore(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'percent' => 'required',
        ]);
        $data = $request->all();
        Tax::create($data);
        $msg = "Tax is created";
        Session::flash('success', $msg);
        return redirect('tax');
    }
    public function taxEdit($id){
        $tax  = Tax::where('id',$id)->first();

        return  view('admin.configuration.edit-tax',compact('tax'));
    }
    public function taxUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'percent' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        Tax::where('id',$id)->update($data);
        $msg = "Tax is updated";
        Session::flash('success', $msg);
        return redirect('tax');

    }
    public function taxDelete($id){
        $tax  = Tax::where('id',$id)->first();
        $tax->delete();
        $msg = "Tax is deleted";
        Session::flash('success', $msg);
        return redirect('tax');
    }

    public function unit(){
        $unit = Units::get();
        return view('admin.configuration.unit',compact('unit'));

    }
    public function unitCreate(){
        return  view('admin.configuration.unit-create');
    }
    public function unitStore(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = $request->all();
        Units::create($data);
        $msg = "Unit is created";
        Session::flash('success', $msg);
        return redirect('unit');
    }
    public function unitEdit($id){
        $unit  = Units::where('id',$id)->first();
        return  view('admin.configuration.edit-unit',compact('unit'));
    }
    public function unitUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        Units::where('id',$id)->update($data);
        $msg = "Unit is updated";
        Session::flash('success', $msg);
        return redirect('unit');

    }
    public function unitDelete($id){
        $tax  = Units::where('id',$id)->first();
        $tax->delete();
        $msg = "Unit is deleted";
        Session::flash('success', $msg);
        return redirect('unit');
    }

    public function orgImage(){
       $configuration =  Configurations::where('id',1)->first();
        return view('admin.configuration.organization-image',compact('configuration'));
//        $image = $request->file('photo');
//        if (count($image) > 0) {
//            $filename = time() . '.' . $image->getClientOriginalExtension();
//            $path = 'application-file/img/' . $filename;
//            Image::make($image->getRealPath())->save($path);
//            Configurations::where('id', 1)->update(['photo' => $path]);
//        }
    }
    public function orgImageStore(Request $request){
        $image = $request->file('photo');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->save($path);
            Configurations::where('id', 1)->update(['photo' => $path]);
        }
        $msg = "Unit is deleted";
        Session::flash('success', $msg);
        return redirect()->back();
    }
    public function configNavBar(){
        $navbar =  Navbar::get();
        return view('admin.configuration.navbar-list',compact('navbar'));
    }
    public function editNavBar($id){
        $navbar =  Navbar::where('id',$id)->first();
        return view('admin.configuration.navbar',compact('navbar'));
    }
    public function updateNavBar(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        Navbar::where('id',$id)->update($data);
        $msg = "Navbar is updated";
        Session::flash('success', $msg);
        return redirect('navbar');
    }

}
