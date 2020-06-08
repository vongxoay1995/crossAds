<?php

namespace App\Http\Controllers;

use App\model\AppPackage;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppDetailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function runBuilderSql($header, $locale)
    {
        $list_locale = array('en', 'vi', 'pt');
        if (in_array($locale, $list_locale)) {
            $current_locale = $locale;
        } else {
            $current_locale = "en";
        }
        $sql = "select p.id_appdetail,p.package,t.name,t.content,p.icon,p.linkstore from appdetail as p,appcross as c, apppackage as b,app_translate as t
                 where c.id_appdetail = p.id_appdetail and b.id_apppackage = c.id_apppackage and t.id_appdetail = p.id_appdetail and b.package like ? and t.locale like ?";
        $data = DB::select($sql, [$header, $current_locale]);
        $array = [];
        foreach ($data as $result) {
            $id = $result->id_appdetail;
            $images = DB::table('appscreenshot')->select("path")
                ->join('appdetail as app', 'app.id_appdetail', '=', 'appscreenshot.id_appdetail')
                ->where('appscreenshot.id_appdetail', '=', $id)
                ->get();
            $new_data = $images->pluck('path');
            $array[] = [
                'package' => $result->package,
                'icon' => $result->icon,
                'name' => $result->name,
                'content' => $result->content,
                'linkstore' => $result->linkstore,
                'images' => $new_data
            ];
        }
        return $array;
    }

    public function getData(Request $request)
    {
        $headers = $request->header('app-package');
        $locale = $request->header('locale');
        if (!is_null($headers) && !is_null($locale)) {
            if (AppPackage::where('package', $headers)->first()) {
                $results = $this->runBuilderSql($headers, $locale);
                $countData = count($results);
                $statusCode = 200;
                if ($countData > 0) {
                    $response = [
                        'status' => true,
                        'message' => "success",
                        'code' => $statusCode,
                        'data' => $results,
                    ];
                } else {
                    $response = [
                        'status' => true,
                        'message' => "success",
                        'code' => $statusCode,
                        'data' => "List app is empty",
                    ];
                }
                return response()->json($response, $statusCode);
            } else {
                $statusCode = 400;
                return response()->json([
                    'status' => true,
                    'message' => "error",
                    'code' => $statusCode,
                    'error' => "Application not found.",
                ], $statusCode);
            }
        } elseif (is_null($locale)) {
            $statusCode = 404;
            return response()->json([
                'status' => true,
                'message' => "error",
                'code' => $statusCode,
                'error' => "locale is null",
            ], $statusCode);
        } else {
            $statusCode = 404;
            return response()->json([
                'status' => true,
                'message' => "error",
                'code' => $statusCode,
                'error' => "app-package is null",
            ], $statusCode);
        }
    }
}
