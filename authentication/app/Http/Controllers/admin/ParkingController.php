<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\CurlRequest;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    use CurlRequest;

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data = array();

        $apiResult = $this->apiReqGet("parking-list");

        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                $data['parking'] = $result->response->parkings;
                return view('admin.pages.parking.index')->with($data);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.parking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//Validating title and body field
        $validate = $this->validate($request, [
            'name' => 'required',
            'access_key' => 'required|integer'
        ]);
        $apiResult = $this->apiReqPost("create-parking", $validate);
        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if (@$result->meta->status == 200) {
                return redirect()->route('admin.parking.index')->with('msg', $result->response->message);
            } elseif (@$result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        $apiResult = $this->apiReqGet("parking/$id");
        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                $data['parking'] = $result->response->parking;
                return view('admin.pages.parking.show')->with($data);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $apiResult = $this->apiReqGet("parking/$id");
        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                $data['parking'] = $result->response->parking;
                return view('admin.pages.parking.edit')->with($data);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
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
        $validate = $this->validate($request, [
            'name' => 'required',
            'access_key' => 'required|integer',
            'is_active' => 'required|boolean',
        ]);
        $apiResult = $this->apiReqPut("update-parking/$id", $validate);

        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                return redirect()->route('admin.parking.index')->with('msg', $result->response->message);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apiResult = $this->apiReqDel("delete-parking/$id");
        if ($apiResult['err']) {
            return back()->with('msgErr', $apiResult['err']);
        } else {
            $result = json_decode($apiResult['response']);
            if ($result->meta->status == 200) {
                return redirect()->route('admin.parking.index')->with('msg', $result->response->message);
            } elseif ($result->meta->status == 100) {
                return back()->with('msgErr', $result->response->message);
            }
        }
    }
}
