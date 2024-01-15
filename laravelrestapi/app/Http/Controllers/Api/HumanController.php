<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Human;
use Illuminate\Http\Request;
use App\Http\Resources\HumanCollection;
use App\Http\Requests\StoreHumanRequest;
use App\Http\Resources\HumanResource;
use App\Http\Requests\UpdateHumanRequest;
use Illuminate\Support\Facades\DB;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$human = Human::all();
        //return HumanResource::collection($human);
        return new HumanCollection(Human::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreHumanRequest $request)
    {
        $human = Human::create($request->all());
        return response()->json($people, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $human = Human::create($request->all());
        return new HumanResource($human);
    }

    /**
     * Display the specified resource.
     */
    public function show(Human $human)
    {
        return response()->json($human, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHumanRequest $request, Human $human)
    {
        $human->update(["firstName" => $request["firstName"]]);
        $human->update(["lastName" => $request["lastName"]]);
        $human->update(["telephoneNumber" => $request["telephoneNumber"]]);
        $human->update(["street" => $request["street"]]);
        $human->update(["city" => $request["city"]]);
        $human->update(["country" => $request["country"]]);
        return response()->json(null,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $human)
    {
        $human->delete();
        return response(null, 200);
    }
}
