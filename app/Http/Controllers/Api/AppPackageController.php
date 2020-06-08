<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppPackage;
use App\Http\Resources\AppPackage as PackageResource;
use App\Model\CountryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

class AppPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $appPackage = AppPackage::all();
        return AppPackage::collection($appPackage);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return AppPackage::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\AppPackage  $appPackage
     * @return \Illuminate\Http\Response
     */
    public function show(AppPackage $appPackage)
    {
        return $appPackage;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\AppPackage  $appPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppPackage $appPackage)
    {
        return $appPackage->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\AppPackage  $appPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppPackage $appPackage)
    {
        $appPackage->delete();
    }
    public function getData(Request $request)
    {
        $headers = $request->header('app_package');
        $package = \App\model\AppPackage::all();
        if(!is_null($headers)){
            if (\App\model\AppPackage::where('package', $headers)->first())
            {
                Log::debug("header: " .$headers);
                $sql = "SELECT * FROM appdetail,appcross,apppackage where appdetail.id_appdetail=appcross.id_appdetail&&appcross.id_apppackage=apppackage.id_apppackage&&apppackage.package like ?";
                $results = DB::select($sql,array('%'.$headers.'%'));
                $str_json = json_encode($results);
                Log::debug("result:".$str_json);
                return response()->json($str_json,200);

                //  return PackageResource::collection($results);
            }else{
                return response()->json(["message:"=>"app not fount"],200);
            }
        }else{
            return response()->json(["message:"=>"app not fount"],200);
        }
    }
}
