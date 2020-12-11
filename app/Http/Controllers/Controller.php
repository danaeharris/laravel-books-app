<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function book()
    {
        $results = $this->CallAPI(
            "GET",
            "https://openlibrary.org/works/OL14868646W.json"
        );
        $decodedResults = json_decode($results, true);

        $pageData = [
            "book" => $decodedResults,
        ];

        return view("app")->with($pageData);
    }

    function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}
