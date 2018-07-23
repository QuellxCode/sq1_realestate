<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientsApplicants;
use App\User;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use Image;
use Sentinel;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        return view('admin.clients.index', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');

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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'district' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'nationality' => 'required',
            'pan' => 'required',
            'dob' => 'required',
            'occupation' => 'required',
            'photo' => 'required',
            'id_proof' => 'required',
            'address_proof' => 'required',
        ]);
        $data = $request->all();
        $from = Carbon::parse($request->dob);
        $data['dob'] = $from->format('y-m-d');
        $data['password'] = 'password';
        $data['holder_id'] = 'password';

        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        $id_proof = $request->file('id_proof');
        if (count($id_proof) > 0) {
            $filename = time() . '.' . $id_proof->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $filename;
            Image::make($id_proof->getRealPath())->resize(200, 300)->save($path_map);
            $data['id_proof'] = $filename;
        }
        $image = $request->file('address_proof');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            $data['address_proof'] = $filename;
        }
        $user = Sentinel::create(
            [
                'email' => $request->email,
                'password' => 'pasword',
                'first_name' => $request->name,
                'last_name' => $request->email,
                'status' => 1,
            ]
        );
        // Activate the admin directly
        $activation = Activation::create($user);
        Activation::complete($user, $activation->code);

        // Find the group using the group id
        $adminGroup = Sentinel::findRoleBySlug('user');

        // Assign the group to the user
        $adminGroup->users()->attach($user);
        $data['user_id'] = $user->id;
        Client::create($data);
        $msg = "Client is created";
        Session::flash('success', $msg);
        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::where('id', $id)->first();
        return view('admin.clients.view', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->first();
        return view('admin.clients.edit', compact('client'));
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
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'district' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'nationality' => 'required',
            'pan' => 'required',
            'dob' => 'required',
            'occupation' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method', 'applicable','email']);
        $from = Carbon::parse($request->dob);
        $data['dob'] = $from->format('y-m-d');
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        $id_proof = $request->file('id_proof');
        if (count($id_proof) > 0) {
            $filename = time() . '.' . $id_proof->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $filename;
            Image::make($id_proof->getRealPath())->resize(200, 300)->save($path_map);
            $data['id_proof'] = $filename;
        }
        $image = $request->file('address_proof');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            $data['address_proof'] = $filename;
        }
        $client = Client::where('id', $id)->first();
        $client->update($data);
        Sentinel::update($client->user_id, ['first_name' => $request->name,
            // 'last_name' => $request->last_name
        ]);
        $msg = "Client is Updated";
        Session::flash('success', $msg);
        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('id', $id)->first();
        $client->delete();
        User::where('id', $client->user_id)->update(['status' => 0]);
        $client_applicant = ClientsApplicants::where('id', $client->client_id)->first();
        $client_applicant->delete();
        User::where('id', $client_applicant->user_id)->update(['status' => 0]);
        $msg = "Client is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }
    public function applicant($id)
    {
        $client_applicant = ClientsApplicants::where('client_id', $id)->get();
        return view('admin.clients.co-client', compact('client_applicant','id'));
    }
    public function createApplicant($id)
    {
        return view('admin.clients.co-client-create',compact('id'));
    }
    public function storeApplicant(Request $request, $id){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'district' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'nationality' => 'required',
            'pan' => 'required',
            'dob' => 'required',
            'occupation' => 'required',
            'photo' => 'required',
            'id_proof' => 'required',
            'address_proof' => 'required',
        ]);
        $data = $request->all();
        $from = Carbon::parse($request->dob);
        $data['dob'] = $from->format('y-m-d');
        $data['password'] = 'password';
        $data['holder_id'] = 'password';

        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        $id_proof = $request->file('id_proof');
        if (count($id_proof) > 0) {
            $filename = time() . '.' . $id_proof->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $filename;
            Image::make($id_proof->getRealPath())->resize(200, 300)->save($path_map);
            $data['id_proof'] = $filename;
        }
        $image = $request->file('address_proof');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            $data['address_proof'] = $filename;
        }
        $user = Sentinel::create(
            [
                'email' => $request->email,
                'password' => 'pasword',
                'first_name' => $request->name,
                'last_name' => $request->email,
                'status' => 1,
            ]
        );
        // Activate the admin directly
        $activation = Activation::create($user);
        Activation::complete($user, $activation->code);

        // Find the group using the group id
        $adminGroup = Sentinel::findRoleBySlug('user');

        // Assign the group to the user
        $adminGroup->users()->attach($user);
        $data['user_id'] = $user->id;
        $data['client_id'] = $id;
        ClientsApplicants::create($data);
        $msg = "Applicant is created";
        Session::flash('success', $msg);
        return redirect('/applicant/'.$id);
    }

    public function editApplicant($id){
        $client_applicant = ClientsApplicants::where('id', $id)->first();
        return view('admin.clients.co-client-edit', compact('client_applicant'));
    }
    public function updateApplicant(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'district' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'nationality' => 'required',
            'pan' => 'required',
            'dob' => 'required',
            'occupation' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method', 'applicable']);
        $from = Carbon::parse($request->dob);
        $data['dob'] = $from->format('y-m-d');
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        $id_proof = $request->file('id_proof');
        if (count($id_proof) > 0) {
            $filename = time() . '.' . $id_proof->getClientOriginalExtension();
            $path_map = 'application-file/img/' . $filename;
            Image::make($id_proof->getRealPath())->resize(200, 300)->save($path_map);
            $data['id_proof'] = $filename;
        }
        $image = $request->file('address_proof');
        if (count($image) > 0) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'application-file/img/' . $filename;
            Image::make($image->getRealPath())->resize(200, 300)->save($path);
            $data['address_proof'] = $filename;
        }
        $applicant = ClientsApplicants::where('id', $id)->first();
        $applicant->update($data);
        Sentinel::update($applicant->user_id, ['first_name' => $request->name,
            // 'last_name' => $request->last_name
        ]);
        $msg = "Applicant is Updated";
        Session::flash('success', $msg);
        return redirect('/client');
    }
    public function viewAppliant($id)
    {
        $client_applicant = ClientsApplicants::where('id', $id)->first();
        return view('admin.clients.co-client-view', compact('client_applicant'));
    }
    public function deleteAppliant($id)
    {
        $client_applicant = ClientsApplicants::where('id', $id)->first();
        $client_applicant->delete();
        User::where('id', $client_applicant->user_id)->update(['status' => 0]);
        $msg = "Applicant is deleted";
        Session::flash('success', $msg);
        return redirect('/client');
    }
}
