<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\Projects;
use App\Leads;
use App\ProjectProperties;
use Carbon\Carbon;
use App\PropertiesGroup;
use App\GroupFields;
class RentalPropertiesController extends Controller
{
    public function campaignProperties($id){
      //  $id = base64_decode(strtr($id, '._-', '+/='));
        $id = str_replace('-', ' ', $id);
        $projects = Projects::where('name',$id)->first();
        $project_properties = ProjectProperties::where('project_id',$projects->id)->first();

        if($project_properties->properties->type == 'detached' || $project_properties->properties->type == 'semi-detached' || $project_properties->properties->type == 'apartment'){
            $properties = Properties::where('id',$project_properties->properties_id)->first();
            return view('admin.detail-external-rental',compact('properties','id'));
        }
        else{
            $properties = PropertiesGroup::where('properties_id',$project_properties->properties->id)->get();

            return view('admin.external-rental',compact('properties'));
        }
    }
    public function campaignPropertiesDetail($id){
        $id = base64_decode(strtr($id, '._-', '+/='));
        $properties = Properties::where('id',$id)->first();
        return view('admin.detail-external-rental',compact('properties','id'));
    }
    public function detailCondoProperty($id){
        $id = base64_decode(strtr($id, '._-', '+/='));
        $condo_property = GroupFields::where('id',$id)->first();
        $properties = PropertiesGroup::where('id',$condo_property->group_id)->first();
        return view('admin.condo-details-rental',compact('condo_property','properties'));
    }
    public function campaginLeads(Request $request, $id){
        $id = base64_decode(strtr($id, '._-', '+/='));
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
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
}
