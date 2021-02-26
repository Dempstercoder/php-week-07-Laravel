<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;
use App\Http\Resources\API\OwnerListResource;


class OwnerController extends Controller
{
    /** 
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    // $owners = Owner::all();  //get the articles (all() method)
    // return $owners; //(json formats this for us) //inject the articles data 

    // needs to return multiple articles
    // so we use the collection method
    return OwnerListResource::collection(Owner::all());
    } 




/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request) //the request ($request) is getting passed through the ownerrequest class
    {
    // get all of the submitted data
    $data = $request->all();
    // dd($data);
    // create a new owner, passing in the submitted data
    $owner = Owner::create($data);

    // redirect the browser to the new owner
    return new OwnerResource($owner);
    }
  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Owner $owner)
    { // shows the owners id
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request)
    {
    $data = $request->all();
    $owner->update($data);
    // return the resource
    return new OwnerResource($owner);
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
