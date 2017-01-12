<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\AddAgent;
use App\Http\Controllers\Controller;
use App\User;
use App\Shop;
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.agentregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddAgent $request)
    {
        $user= new User;
        $photo = $request->file('photo');
        $destinationPath = 'upload';
        $photo->move($destinationPath,$photo->getClientOriginalName());
        $user->photo=$photo->getClientOriginalName();
        $user->firstname=$request->input('firstname');
        $user->lastname=$request->input('lastname');
        $user->gender=$request->input('gender');
        $user->email=$request->input('email');
        $user->type=2;
        $user->save();

        $shop= new Shop;
        $logo=$request->file('logo');
        $logo->move($destinationPath.'/logo',$logo->getClientOriginalName());
        $shop->logo=$logo->getClientOriginalName();
        $shop->slogan=$request->slogan;
        $shop->cityId=$request->cityId;
        $shop->stateId=$request->stateId;
        $shop->zipcode=$request->zipcode;
        $shop->countryId=$request->countryId;
        $shop->website=$request->website;
        $shop->countryId=$request->countryId;
        $shop->stateId=$request->stateId;
        $shop->cityId=$request->cityId;
        $shop->save();
        
        return redirect('/agent/register')->with('message', 'Success!');
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
        //
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
        //
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
}
