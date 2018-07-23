<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\Configurations;
use App\PropertiesGroup;
use App\GroupFields;
use App\Leads;
use Carbon\Carbon;
use App\BlogCategory;
use App\Blog;
use App\BlogComment;
use App\Categories;
use App\PropertieAgents;
use App\BrokerageAgent;
use Nathanmac\Utilities\Parser\Parser;

class LandingController extends Controller
{
    public function index(){
        $properties = Properties::get();
        $generic= BlogCategory::where('category_id',1)->orderBy('id', 'DESC')->limit(3)->get();
        $configuration =   Configurations::first();
        $buying = BlogCategory::where('category_id',2)->orderBy('id', 'DESC')->limit(3)->get();
        $selling = BlogCategory::where('category_id',3)->orderBy('id', 'DESC')->limit(3)->get();
        $properties_condo = Properties::where('type','condo')->orderBy('id', 'DESC')->limit(3)->get();
                $properties_semi = Properties::where(['type'=>'semi-detached','type'=>'detached'])->orderBy('id', 'DESC')->limit(3)->get();

        return view('user.properties',compact('properties','configuration','generic','buying','selling','properties_condo','properties_semi'));
    }
    public function propertyDetail($id){
        $properties = Properties::where('id',$id)->first();
        $property_agent = PropertieAgents::where('properties_id',$id)->get();
        $brokerage = BrokerageAgent::where('user_id',$property_agent[0]->user_id)->first();
        return view('user.property-detail',compact('properties','property_agent','brokerage','buying'));
    }
    public function condoList($id){
        $properties_group = PropertiesGroup::where('properties_id',$id)->get();
        $properties = Properties::where('type','condo')->get();
        return view('user.condo-list',compact('properties_group'));
    }
    public function condoDetail($id){
        $condo_group = GroupFields::where('id',$id)->first();
        $properties= PropertiesGroup::where('id',$condo_group->group_id)->first();
        $property_agent = PropertieAgents::where('properties_id',$properties->properties_id)->get();
        $brokerage = BrokerageAgent::where('user_id',$property_agent[0]->user_id)->first();
//        $condo_group = GroupFields::where('id',$id)->first();

        return view('user.condo-detail',compact('condo_group','properties','property_agent','brokerage'));
    }
    public function saleCondo(){
        $properties = Properties::where('availiable','Sale')->get();
        $configuration =   Configurations::select('photo')->first();
        return view('user.sale-condo',compact('properties','configuration'));
    }
    public function rentCondo(){
        $properties = Properties::where('availiable','Rent')->get();
        $configuration =   Configurations::select('photo')->first();
        return view('user.rent-condo',compact('properties','configuration'));
    }
    public function condoReviews(){
        return view('user.condo-reviews',compact('properties','configuration'));
    }
    public function propertyLatLong($id){
        $properties = Properties::select('latitude','longitude')->where('id',$id)->first();
        return $properties;
    }
    public function mlsProperty(){
        $content = file_get_contents(storage_path('app/public/condo.xml'));

        $parser = new Parser();
        $parser->payload();
        $parsed = $parser->xml($content);
//$array_value =  $parsed['REData']['REProperties']['CondoProperty'][0];
//foreach($array_value as $value){
//    echo $value["MLS"];
//    echo storage_path().'/app/public/condo/photo'.$value["MLS"].'-1.jpeg';
//    //echo "<img src'".storage_path()."'>";
//}
        $array_value =  $parsed['REData']['REProperties']['CondoProperty'];
//        foreach($array_value as $value){
//            foreach($value as $data){
//                echo $data["MLS"];
//                // echo storage_path().'/app/public/condo/photo'.$value["MLS"].'-1.jpeg';
//                // echo "<img src'".storage_path()."/app/public/condo/photo".$data['MLS']."-1.jpeg'>";
//                //echo '<img src"'.storage_path().'/app/public/condo/photo">';
//            }
//
//        }
        return view('user.mls-property',compact('array_value'));
    }
    public function propertyLeads(Request $request, $id){
        //$id = base64_decode(strtr($id, '._-', '+/='));
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required',
        ]);
        $data = $request->all();
        $date_of_birth = Carbon::parse($request->from_date);
        $data['property_id'] = $id;
        $data['date_of_birth'] = $date_of_birth->format('y-m-d');
        $projects = Leads::create($data);
        return redirect()->back();
    }
    public function blogDetail($id){
        $categories =  Categories::get();
        $blog_comment = BlogComment::where('blog_id',$id)->get();
        $blog_category = BlogCategory::where('blog_id',$id)->get();
        $blog = Blog::where('id',$id)->first();
        return view('user.blog-detail',compact('blog','blog_category','blog_comment','categories'));
    }
    public function blogComment(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);
        $blog_comment = new BlogComment;
        $blog_comment->blog_id = $id;
        $blog_comment->name = $request->name;
        $blog_comment->email = $request->email;
        $blog_comment->message = $request->message;
        $blog_comment->save();
        return redirect()->back();
    }
    public function buying(){
        $buying = BlogCategory::where('category_id',2)->orderBy('id', 'DESC')->limit(3)->get();
        $selling = BlogCategory::where('category_id',2)->orderBy('id', 'DESC')->limit(3)->get();
        $blog_category = BlogCategory::where('category_id',2)->get();
        return view('user.buying',compact('blog_category','buying','selling'));
    }
    public function selling(){
        $blog_category = BlogCategory::where('category_id',3)->get();
        $buying = BlogCategory::where('category_id',2)->orderBy('id', 'DESC')->limit(3)->get();
        $selling = BlogCategory::where('category_id',2)->orderBy('id', 'DESC')->limit(3)->get();
        return view('user.selling',compact('blog_category','buying','selling'));
    }
    public function contactUs(){
        $configuration =   Configurations::first();
        return  view('user.contact',compact('configuration'));
    }
}
