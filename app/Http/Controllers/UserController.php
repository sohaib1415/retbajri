<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Media;

use App\Models\UserDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function profile()
    {
        $user  = auth()->user();
        if(auth()->user())
            $user_details       = UserDetail::where('user_id',$user->id)->first();
        else
            $user_details       = "";
        return view('user.profile',compact('user','user_details'));
    }

    public function userProfile($id)
    {
        $user           = User::where('id',$id)->first();
        $user_details   = UserDetail::where('user_id',$id)->first();
        return view('user.profile',compact('user','user_details'));
    }

    public function store(Request $request)
    {
        dd($request);
        $validator = Validator::make($request->all(),[
            'title'=>'required|string',
            'description'=>'string'

        ]);

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }

        try{
            DB::beginTransaction();

            $town_model =   new User();
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

    public function profileEdit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit-profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request)
    {
        //dd($request);
        $user_id    =   auth()->user()->id;
        $user_data  =   User::findOrFail($user_id);

        $validator = Validator::make($request->all(),[
            "name"=>'string|required',
            'description'=>'string'
        ]);
        if ($validator->fails()) {
            return redirect('my-profile')->with('status', $validator->errors());
        }

        try{
            DB::beginTransaction();
            $user_data->name            =   $request->name;
            $user_data->bio             =   $request->bio;
            $user_data->instagram_link  =   $request->instagram_link;
            $user_data->fb_link         =   $request->fb_link;
            $user_data->twitter_link    =   $request->twitter_link;
            $user_data->skype_id        =   $request->skype_id;
            $user_data->city_id         =   $request->city_id;
            $user_data->save();
            DB::commit();
            //return redirect('home')->with('status', 'Town is successfully added!');
        }
        catch(\Exception $e){
            dd($e);
            DB::rollback();
            return response()->json($e,500);
        }


        try{
            if($file    =   $request->file('user_image')){
                $name   =   time().$file->getClientOriginalName();
                $path   =   'assets/users/';
                $file->move('assets/users/', $name);
                /*Insert your data*/
                DB::beginTransaction();
                $media_modal     =   new Media([
                    'title'         =>  $name,
                    'slug'          =>  $name,
                    'file_type'     =>  $file->getClientOriginalExtension(),
                    'filename'      =>  $name,
                    'mediable_id'   =>  auth()->user()->id,
                    'mediable_type' =>  'App\User',
                    'path'          =>  $path,
                ]);
                $media_modal->save();
                DB::commit();
            }
            return redirect('my-profile')->with('status', 'Profile is successfully updated!');
        }
        catch(\Exception $e){
            dd($e);
            DB::rollback();
            return response()->json($e,500);
        }
    }

    public function ads()
    {
        $user               = auth()->user();
        if(auth()->user())
            $user_details       = UserDetail::where('user_id',$user->id)->first();
        else
            $user_details       = "";
        return view('user.ads',compact('user','user_details'));
    }
    public function emailSend(Request $request)
    {
        return view('pages.email');
    }

}
