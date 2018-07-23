<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brokerage;
use Image;
use Session;
class BrokerageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brokerage = Brokerage::get();
        return view('admin.brokerage.index', compact('brokerage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brokerage.create');

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
            'photo' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $data = $request->all();
        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        Brokerage::create($data);
        $msg = "Brokerage is created";
        Session::flash('success', $msg);
        return redirect('/brokerage');
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
        $brokerage = Brokerage::where('id',$id)->first();
        return view('admin.brokerage.update',compact('brokerage'));
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
            'phone' => 'required',
            'address' => 'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);

        $photo = $request->file('photo');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->resize(200, 300)->save($photo_path);
            $data['photo'] = $photo_filename;
        }
        Brokerage::where('id', $id)->update($data);
        $msg = "Brokerage is created";
        Session::flash('success', $msg);
        return redirect('/brokerage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brokerage = Brokerage::where('id', $id)->first();
        $brokerage->delete();
        $msg = "Brokerage is deleted";
        Session::flash('success', $msg);
        return redirect('/brokerage');
    }
}
