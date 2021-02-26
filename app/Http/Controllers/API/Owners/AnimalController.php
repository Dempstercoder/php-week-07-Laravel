<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\API\AnimalResource;
use App\Models\Owner;
use App\Models\Animal;
use App\Http\Resources\API\AnimalListResource;
use App\Http\Requests\API\AnimalRequest;

// The first thing we need to consider is our URL structure. Animals belong to owners, so we should make this hierarchy clear in our URL structure. 

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // use Route Model Binding to get the specified owner
    public function index(Owner $owner)
    {
    // return all animals from a specific owner
    // uses Eloquent's magic relationship properties

    return AnimalResource::collection($owner->animals);
    // return AnimalResource::collection($owner->animals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $data = $request->all(); //requesting all data from the post
       
        $animal = new Animal($data); // creates a new animal from post in postman
        
        $animal->owner()->associate($owner); //this associates the animal with an owner

        $treatments = $request->get("treatments");

        $animal->save();

        $animal->setTreatments($treatments); //this sets the treatments on the animal. Important to save before setting the treatments.

        return new AnimalResource($animal);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner, Animal $animal) //the arguments here need to be in order of the url e.g. http://homestead.test/api/owners/6/animals/8
    //6 is the owner id ($owner part of the argument) and 8 is the animal ($animal).
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Owner $owner, Animal $animal) // parameters have to be in order of owner, animal (just like the url route)
    {   // get the request data
        $data = $request->all();

        // update the animal using the fill method
        // then save it to the database
        $animal->fill($data)->save();; // update($data) fills and saves at same time. But using fill() and save() instead.

        $animal->setTreatments($request->get("treatments"));

        return new AnimalResource($animal);
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
