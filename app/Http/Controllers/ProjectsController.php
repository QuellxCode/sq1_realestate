<?php

namespace App\Http\Controllers;

use App\ProjectImages;
use App\ProjectLayoutPlans;
use App\ProjectLoccationMap;
use App\Projects;
use App\Properties;
use Illuminate\Http\Request;
use Image;
use App\ProjectProperties;
use Session;
use Carbon\Carbon;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $projects = Projects::where('status', 'Active')->orderBy('id', 'DESC')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Properties::get();
        return view('admin.projects.create',compact('properties'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
//            'city' => 'required',
//            'state' => 'required',
//            'address' => 'required',
//            'nearest_location' => 'required',
//            'reach' => 'required',
//            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'properties' => 'required'
        ]);

        $data = $request->all();
        $from = Carbon::parse($request->from_date);
        $to = Carbon::parse($request->to_date);
        $data['from_date'] = $from->format('y-m-d');
        $data['to_date'] = $to->format('y-m-d');
        $projects = Projects::create($data);

        $properties = $request->properties;

        foreach($properties as $value){
            $project_properties = new ProjectProperties;
            $project_properties->properties_id = $value;
            $project_properties->project_id = $projects->id;
            $project_properties->save();
        }

        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
        }
        $project_images = new ProjectImages;
        $project_images->project_id = $projects->id;
        $project_images->photo = $photo_path;
        $project_images->save();

        $map = $request->file('map');
        if (count($map) > 0) {
            $map_filename = time() . '.' . $map->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $map_filename;
            Image::make($map->getRealPath())->resize(200, 300)->save($path_map);
        }

        $project_location = new ProjectLoccationMap;
        $project_location->project_id = $projects->id;
        $project_location->photo = $path_map;
        $project_location->save();

        $image = $request->file('plan');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
        }

        $project_plan = new ProjectLayoutPlans;
        $project_plan->project_id = $projects->id;
        $project_plan->photo = $path;
        $project_plan->save();
        $msg = "Project  is created";
        Session::flash('success', $msg);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Projects::where('id', $id)->first();
        return view('admin.projects.view', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $properties = Properties::get();
       $project_properties =  ProjectProperties::where('project_id',$id)->get();
        $projects = Projects::where('id', $id)->first();
        return view('admin.projects.edit', compact('projects','project_properties','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
//            'city' => 'required',
//            'state' => 'required',
//            'address' => 'required',
//            'nearest_location' => 'required',
//            'reach' => 'required',
//            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'properties' => 'required'

        ]);

        $data = $request->all();
        $data = request()->except(['_token', '_method','properties']);
        $from = Carbon::parse($request->from_date);
        $to = Carbon::parse($request->to_date);
        $data['from_date'] = $from->format('y-m-d');
        $data['to_date'] = $to->format('y-m-d');
        Projects::where('id', $id)->update($data);

        $properties = $request->properties;
         ProjectProperties::where('project_id',$id)->delete();

        foreach($properties as $value){
            $project_properties = new ProjectProperties;
            $project_properties->properties_id = $value;
            $project_properties->project_id = $id;
            $project_properties->save();
        }
        $image = $request->file('photo');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            ProjectImages::where('user_id', $id)->update(['photo' => $path]);
        }
        $image = $request->file('map');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            ProjectLoccationMap::where('user_id', $id)->update(['photo' => $path]);

        }
        $image = $request->file('plan');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path_plan = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            ProjectLayoutPlans::where('user_id', $id)->update(['photo' => $path]);

        }
        $msg = "Project  is created";
        Session::flash('success', $msg);
        return redirect('/projects');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::where('id', $id)->first();
        $project->delete();
        $msg = "Project  is deleted";
        Session::flash('success', $msg);
        return redirect('/projects');
    }

    public function photos($id)
    {
        $project_id = $id;
        $photos = ProjectImages::where('project_id', $id)->get();
        return view('admin.projects.photos', compact('photos', 'project_id'));
    }

    public function locationMap($id)
    {
        $project_id = $id;
        $photos = ProjectLoccationMap::where('project_id', $id)->get();
        return view('admin.projects.location-map', compact('photos', 'project_id'));
    }

    public function layoutPlan($id)
    {
        $project_id = $id;
        $photos = ProjectLayoutPlans::where('project_id', $id)->get();
        return view('admin.projects.layout-plan', compact('photos', 'project_id'));
    }

    public function layoutPlanUpload(Request $request, $id)
    {
        $image = $request->file('plan');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
        }
        $project_plan = new ProjectLayoutPlans;
        $project_plan->project_id = $id;
        $project_plan->photo = $path;
        $project_plan->save();
        $msg = "Layout plan is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function locationMapUpload(Request $request, $id){
        $map = $request->file('map');
        if (count($map) > 0) {
            $map_filename = time() . '.' . $map->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $map_filename;
            Image::make($map->getRealPath())->resize(200, 300)->save($path_map);
        }

        $project_location = new ProjectLoccationMap;
        $project_location->project_id = $id;
        $project_location->photo = $path_map;
        $project_location->save();
        $msg = "Location Map is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function uploadPhotos(Request $request, $id){
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
        }
        $project_images = new ProjectImages;
        $project_images->project_id = $id;
        $project_images->photo = $photo_path;
        $project_images->save();
        $msg = "Photo is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }
    public function layoutPlanDelete($id){
        $project_layout_plans = ProjectLayoutPlans::where('id',$id)->first();
        $project_layout_plans->delete();
        $msg = "Layout Plan is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function locationMapDelete($id){
        $project_location_map = ProjectLoccationMap::where('id',$id)->first();
        $project_location_map->delete();
        $msg = "Location Map is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }
    public function deletePhotos($id){
        $project_images = ProjectImages::where('id',$id)->first();
        $project_images->delete();
        $msg = "Photo is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }
}
