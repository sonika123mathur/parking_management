<?php

namespace App\Http\Controllers;

use App\Http\Traits\CurlRequest;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    use CurlRequest;
    public function index()
    {
        $apiResult = $this->apiReqGet("parking-list");

        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                $data['parking'] = collect($result->response->parkings)->where('is_active',1);
                return view('welcome')->with($data);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }
}
