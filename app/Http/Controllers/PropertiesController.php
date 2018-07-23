<?php

namespace App\Http\Controllers;

use App\CondoGroupGallery;
use App\GroupFields;
use App\Projects;
use App\Properties;
use App\PropertiesDocuments;
use App\PropertiesFlats;
use App\PropertiesGroup;
use App\PropertiesPhotos;
use App\PropertyDetached;
use App\PropertySemiDetached;
use App\Units;
use Illuminate\Http\Request;
use Image;
use App\PropertieAgents;
use Sentinel;

use Session;

class PropertiesController extends Controller
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
        $properties = Properties::get();
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Projects::get();
        $role = Sentinel::findRoleById(2);
        $agent = $role->users()->with('roles')->get();
        return view('admin.properties.create', compact('projects','agent'));
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
            'type' => 'required',
            'availiable' => 'required',
            'remarks' => 'required',
            'price' => 'required|numeric',
            'agents'=> 'required',

        ]);
        $data = $request->all();
        $photo = $request->file('feature_photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
            $data['feature_photo'] = $photo_path;
        }
        $file = $request->file('video');
        if (count($file) > 0) {
            $filename = $file->getClientOriginalName();
            $path = 'application-file/video/';
            $file->move($path, $filename);
            $data['video'] = $path;
        }
        $properties = Properties::create($data);
        foreach($request->agents as $value){
            $property_agent = new PropertieAgents;
            $property_agent->properties_id =$properties->id;
            $property_agent->user_id = $value;
            $property_agent->save();
        }


        if (!empty($request->bath_room) && !empty($request->bed_room) && !empty($request->garage) && !empty($request->area)) {
            $property_detached = new PropertyDetached;
            $property_detached->property_id = $properties->id;
            $property_detached->bath_room = $request->bath_room;
            $property_detached->bed_room = $request->bed_room;
            $property_detached->garage = $request->garage;
            $property_detached->area = $request->area;
            $property_detached->save();
        }
        if (!empty($request->semi_bath_room) && !empty($request->semi_bed_room) && !empty($request->semi_garage) && !empty($request->semi_area)) {
            $property_detached = new PropertySemiDetached;
            $property_detached->property_id = $properties->id;
            $property_detached->bath_room = $request->semi_bath_room;
            $property_detached->bed_room = $request->semi_bed_room;
            $property_detached->garage = $request->semi_garage;
            $property_detached->area = $request->semi_area;
            $property_detached->save();
        }
        if(!empty($_POST['groups'])){
            for ($k = 0; $k < count($_POST['groups']); $k++) {
                $s = $k + 1;
                $value = [
                    'properties_id' => $properties->id,
                    'name' => $_POST['groups']['group' . $s]
                ];
                $group = PropertiesGroup::create($value);
                for ($i = 0; $i < count($_POST['model']); $i++) {
                    $j = $i + 1;
                    // echo $_POST['price_from']['group' . $j][$i];
                    if (!empty($_POST['model']['group' . $s][$i]) && !empty($_POST['sqft']['group' . $s][$i]) && !empty($_POST['floors']['group' . $s][$i]) && !empty($_POST['price_from']['group' . $s][$i]) && !empty($_POST['features']['group' . $s][$i])) {
                        $model = $_POST['model']['group' . $s][$i];
                        $sqft = $_POST['sqft']['group' . $s][$i];
                        $floors = $_POST['floors']['group' . $s][$i];
                        $price_from = $_POST['price_from']['group' . $s][$i];
                        $features = $_POST['features']['group' . $s][$i];
                        $marks = [
                            'group_id' => $group->id,
                            'model' => $model,
                            'sqft' => $sqft,
                            'floors' => $floors,
                            'price_from' => $price_from,
                            'features' => $features
                        ];
                        GroupFields::create($marks);
                    }
                }
            }

        }

        $msg = "Properties  is created";
        Session::flash('success', $msg);
        if($request->type == 'condo'){
            return redirect('/condo/'.$properties->id);

        }
        return redirect('/properties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = Properties::where('id', $id)->first();
        return view('admin.properties.view', compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Properties::where('id', $id)->first();
        $role = Sentinel::findRoleById(2);
        $agent = $role->users()->with('roles')->get();
        $property_agent = PropertieAgents::where('properties_id',$id)->get();

        return view('admin.properties.edit', compact('properties','agent','property_agent'));
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
            'type' => 'required',
            'availiable' => 'required',
            'remarks' => 'required',
            'agents'=> 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method', 'bath_room', 'bed_room', 'garage', 'area', 'video','agents']);
        $photo = $request->file('feature_photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
            $data['feature_photo'] = $photo_path;
        }
        $file = $request->file('video');
        if (count($file) > 0) {
            $filename = $file->getClientOriginalName();
            $path = 'application-file/video/';
            $file->move($path, $filename);
            $data['video'] = $path;
        }
        if (!empty($request->bath_room) && !empty($request->bed_room) && !empty($request->garage) && !empty($request->area)) {
            PropertyDetached::where('property_id', $id)->update(['bath_room' => $request->bath_room, 'bed_room' => $request->bed_room, 'garage' => $request->garage, 'area' => $request->area,]);
        }
        $properties = Properties::where('id', $id)->update($data);
        PropertieAgents::where('properties_id',$id)->delete();
        foreach($request->agents as $value){
            $property_agent = new PropertieAgents;
            $property_agent->properties_id = $id;
            $property_agent->user_id = $value;
            $property_agent->save();
        }

        $msg = "Properties  is created";
        Session::flash('success', $msg);
        return redirect('/properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Properties::where('id', $id)->first();
        $properties->delete();
        $msg = "Property deleted";
        Session::flash('success', $msg);
        return redirect('/properties');

    }

    public function photos($id)
    {
        $property_id = $id;
        $photos = PropertiesPhotos::where('property_id', $id)->get();
        return view('admin.properties.photos', compact('photos', 'property_id'));
    }

    public function uploadPhotos(Request $request, $id)
    {
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
        }
        $properties_document = new PropertiesPhotos;
        $properties_document->property_id = $id;
        $properties_document->photo = $photo_path;
        $properties_document->save();
        $msg = "Photo is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function deletePhotos($id)
    {
        $properties_document = PropertiesPhotos::where('property_id', $id)->first();
        $properties_document->delete();
        $msg = "Photo is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function document($id)
    {
        $property_id = $id;
        $photos = PropertiesDocuments::where('property_id', $id)->get();
        return view('admin.properties.documents', compact('photos', 'property_id'));
    }

    public function documentsUpload(Request $request, $id)
    {
        $map = $request->file('map');
        if (count($map) > 0) {
            $map_filename = time() . '.' . $map->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $map_filename;
            Image::make($map->getRealPath())->resize(200, 300)->save($path_map);
        }

        $properties_document = new PropertiesDocuments;
        $properties_document->property_id = $id;
        $properties_document->photo = $path_map;
        $properties_document->save();
        $msg = "Document is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function documentsDelete($id)
    {
        $properties_document = PropertiesDocuments::where('id', $id)->first();
        $properties_document->delete();
        $msg = "Location Map is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function flats($id)
    {
        $property_id = $id;
        $units = Units::get();
        $flats = PropertiesFlats::where('property_id', $id)->get();
        return view('admin.properties.flats', compact('flats', 'property_id', 'units'));
    }

    public function featurePhotos($id)
    {
        $property_id = $id;
        $photos = Properties::select('feature_photo')->where('id', $id)->first();
        return view('admin.properties.feature-photo', compact('photos', 'property_id'));
    }

    public function uploadFeaturePhoto(Request $request, $id)
    {
        $this->validate($request, [
            'photo' => 'required',
        ]);
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
        }
        Properties::where('id', $id)->update(['feature_photo' => $photo_path]);
        $msg = "Photo is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function condoList($id)
    {
        $condo = PropertiesGroup::where('properties_id', $id)->get();
        return view('admin.properties.condo-list', compact('condo'));
    }

    public function condoFeatureImage($id)
    {
        $condo_images = GroupFields::where('id', $id)->first();
        return view('admin.properties.condo-feature-image', compact('condo_images'));

    }

    public function condoFeatureImageUpload(Request $request, $id)
    {
        $feature_image = $request->file('feature_image');
        if (count($feature_image) > 0) {
            $filename = time() . '.' . $feature_image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($feature_image->getRealPath())->save($path);
        }
        GroupFields::where('id', $id)->update(['feature_image' => $path]);
        $msg = "Photo is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();

    }
    public function condoImages($id)
    {
        $condo_images = CondoGroupGallery::where('model_id', $id)->get();
        return view('admin.properties.condo-images', compact('condo_images','id'));
    }

    public function condoImagesupload(Request $request, $id)
    {
        $image = $request->file('image');
        if (count($image) > 0) {
            foreach($image as $value){
                $filename = uniqid() . '.' . $value->getClientOriginalExtension();
                $path = 'application-file/img/' . $filename;
                Image::make($value->getRealPath())->save($path);
                $condo_images = new  CondoGroupGallery;
                $condo_images->model_id = $id;
                $condo_images->image = $path;
                $condo_images->save();
            }
        }
        $msg = "Photo is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }
    public function condoFloorPlan($id){
        $condo_floorplan = GroupFields::select('floor_plan')->where('group_id', $id)->first();
        return view('admin.properties.condo-floorplan', compact('condo_floorplan','id'));
    }
    public function condoFloorPlanupload(Request $request, $id)
    {
        $image = $request->file('image');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->save($path);
            GroupFields::where('group_id',$id)->update(['floor_plan'=>$path]);
        }
        $msg = "Floor Plan is uploaded";
        Session::flash('success', $msg);
        return redirect()->back();
    }
}
