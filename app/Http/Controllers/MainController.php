<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\Town\TownCollection;
use App\Http\Resources\Town\TownResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns  =   Product::all();

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('towns\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'title'=>'required|string',
            'description'=>'string'

        ]);

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }

        try{
            DB::beginTransaction();

            $town_model =   new Town();
            $town_model->title =   $request->title;
            if(isset($request->description))
            $town_model->description=$request->description;
            $town_model->save();
            DB::commit();
            return redirect('home')->with('status', 'Town is successfully added!');
        }
        catch(\Exception $e){
            //dd();
            DB::rollback();
            return response()->json($e,500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town)
    {
        return new TownResource($town);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function profileEdit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit-profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //dd('grttt');

        $player = User::findOrFail($id);

        $player->name = request('name');
        $player->sport = request('sport');
        $player->country = request('country');

        $player->save();

        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        //
    }
}
