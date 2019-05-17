<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BusinessMeanType;
use App\Models\BusinessMean;
use App\Models\BusinessMeanMedia;
use App\Models\BusinessMeanCategory;
use App\Models\Media;
use App\Models\UserDetail;

use App\Http\Resources\Town\TownCollection;
use App\Http\Resources\Town\TownResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\User;

class AdsubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns  =   BusinessMean::all();

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user               = auth()->user();
        $user_details       = UserDetail::where('user_id',$user->id)->first();
        $business_means     = new BusinessMean();
        $business_means_type= BusinessMeanType::all();
        //$userDetails = UserDetails::where('user_id', $user_id)->first();
        return view('ads\create',compact('business_means','business_means_type','user','user_details'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(),[
            'name'=>'string|required',
            'description'=>'string'
        ]);

        if ($validator->fails()) {
            return redirect('home')->with('status', $validator->errors());
        }

        try{
            $cat_id =   "category_".$request->data;
            $maincat_id =   "maincategory_".$request->data;
            $subcat_id =   "subcategory_".$request->data;
            $city_id =   "city_".$request->data;
            $name =   "title_".$request->data;
            $desc =   "description_".$request->data;
            $price =   "price_".$request->data;
           // dd($request->$name);
            $business_means_type= BusinessMeanType::find($request->data);
            $business_means_cat= BusinessMeanCategory::where('category_id',$request->$cat_id)->where('business_mean_type_id',$request->data)->first();
           // dd($business_means_cat);
            DB::beginTransaction();
            $business_mean  =   new BusinessMean([
            'user_id'       =>   auth()->user()->id,
            'city_id'       =>   $request->$city_id,
            'name'          =>   $request->$name,
            //if(isset($request->description."_".$request->data))
            'description'   =>   $request->$desc,
            'price'         =>   $request->$price,
            'business_mean_category_id' =>   $business_means_cat->id
            ]);

            //$town_model->description=$request->description."_".$request->data;
            $business_mean->save();
            DB::commit();
            //return redirect('home')->with('status', 'Town is successfully added!');
        }
        catch(\Exception $e){
            dd($e);
            DB::rollback();
            return response()->json($e,500);
        }

        try{
            $cat_name= Category::find($request->$maincat_id);
            //dd($cat_name->name);

            $images=array();
            if($files=$request->file('images_'.$request->data)){
                foreach($files as $file){
                    $name=time().$file->getClientOriginalName();
                    $path   =   'assets/'.$business_means_type->name.'/'.$cat_name->name;
                    $file->move('assets/'.$business_means_type->name.'/'.$cat_name->name, $name);
                    $images[]=$name;
                    /*Insert your data*/
                    DB::beginTransaction();
                   $media_modal  =   new Media([
                        'title'=>$name,
                        'slug'=>$name,
                        'file_type'=>$file->getClientOriginalExtension(),
                        'filename'=>$name,
                       // 'type'=>'image',
                        //'role'=>'user.photo',
                        'path'=>$path,
                    ]);
                    $media_modal->save();
                    DB::commit();
                    DB::beginTransaction();
                    $media =    Media::find($media_modal->id)->first();
                    //dd($media);
                    $b_m_media=new BusinessMeanMedia([
                        'media_id'=>$media_modal->id,
                        'business_mean_id'=>$business_mean->id
                    ]);
                    $b_m_media->save();
                    DB::commit();
                }
            }
            //DB::commit();
            return redirect('home')->with('status', 'Product is successfully added!');
        }
        catch(\Exception $e){
            dd($e);
            DB::rollback();
            return response()->json($e,500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town)
    {
        return new TownResource($town);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function edit(Town $town)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Town $town)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        //
    }
}
