<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $sql = "SELECT path FROM appscreenshot";
        $results = DB::select($sql);
        $str_json = json_encode($results);
        Log::debug("result:".$str_json);
        return [
            'packagename' => $this->packagename,
            'name'=>$this->name,
            'icon'=>$this->icon,
            'content'=>$this->content,
            'linkstore'=>$this->linkstore,
            'screenshot'=>$results
        ];
    }
}
