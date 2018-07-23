<?php

namespace App\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Team;
use App\TeamMember;
use App\BrokerageAgent;
use App\Brokerage;
use App\Agents;

class UsersController extends Controller
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
        $role = Sentinel::findRoleById(2);
        $users = $role->users()->with('roles')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brokerage = Brokerage::get();
        return view('admin.users.create',compact('brokerage'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'brokerage'=> 'required',
            'phone' => 'required',
        ]);
        // Create an admin user
        $user = Sentinel::create(
            [
                'email' => $request->email,
                'password' => $request->password,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
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
        $data = $request->all();
        $data["user_id"] = $user->id;
        Agents::create($data);
        foreach($request->brokerage as $value){
         $brokerage_agent = new BrokerageAgent;
         $brokerage_agent->user_id = $user->id;
         $brokerage_agent->brokerage_id = $value;
         $brokerage_agent->save();
        }

        $msg = "User  is created";
        Session::flash('success', $msg);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brokerage = Brokerage::get();
        $brokerage_agent = BrokerageAgent::where('user_id',$id)->get();

        $user = User::where('id', $id)->first();
        return view('admin.users.edit', compact('user','brokerage','brokerage_agent'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',

        ]);
        $user = Sentinel::findById($id);
        if (count($request->password) > 0) {
            Sentinel::update($user, ['password' => $request->password, 'first_name' => $request->first_name,
                'last_name' => $request->last_name]);
        } else {
            Sentinel::update($user, ['first_name' => $request->first_name,
                'last_name' => $request->last_name]);
        }
        $data = $request->all();
//        $data = request()->except(['_token', '_method','fiest']);

        Agents::where('user_id',$id)->update(['phone'=>$request->phone]);
        $msg = "User  is Updated";
        Session::flash('success', $msg);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        $msg = "User is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function team()
    {
        $team = Team::get();
        return view('admin.users.team',compact('team'));
    }

    public function addTeam()
    {
        $role = Sentinel::findRoleById(2);
        $users = $role->users()->with('roles')->get();
        return view('admin.users.add-team', compact('users'));
    }

    public function storeTeam(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'member' => 'required',
        ]);
        $member = $request->member;
        $team = new Team;
        $team->name = $request->name;
        $team->save();
        foreach ($member as $value) {
            $team_member = new TeamMember;
            $team_member->team_id = $team->id;
            $team_member->user_id = $value;
            $team_member->save();
        }
        $msg = "Team is Created";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function teamMember($id){
        $team = Team::where('id',$id)->first();
        $team_member = TeamMember::where('team_id',$id)->get();
        return view('admin.users.team-member',compact('team','team_member'));
    }
    public function teamEdit($id)
    {
        $role = Sentinel::findRoleById(2);
        $users = $role->users()->with('roles')->get();
        $team = Team::where('id',$id)->first();
        $team_member = TeamMember::where('team_id',$id)->get();

        return view('admin.users.edit-team',compact('team','team_member','users'));
    }
    public function teamUpdate(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'member' => 'required',
        ]);
        $team_member = TeamMember::where('team_id',$id)->delete();

        $member = $request->member;
        foreach ($member as $value) {
            $team_member = new TeamMember;
            $team_member->team_id = $id;
            $team_member->user_id = $value;
            $team_member->save();
        }
        $msg = "Team is Updated";
        Session::flash('success', $msg);
        return redirect()->back();
    }

    public function teamDelete($id){
        $team = Team::where('id',$id)->first();
        $team->delete();
        $team_member = TeamMember::where('team_id',$id)->delete();
        $msg = "Team is deleted";
        Session::flash('success', $msg);
        return redirect()->back();

    }
}
