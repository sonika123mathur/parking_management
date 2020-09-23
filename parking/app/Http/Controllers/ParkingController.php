<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiStatus;
use App\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ParkingController extends Controller
{
    use ApiStatus;

    public function index()
    {

        $response = array();
        $response['parkings'] = Parking::orderBy('id')->get();
        return $this->successResponse($response);

    }

    public function show($id)
    {
        $response = array();
        $response['parking'] = Parking::findOrFail($id);
        return $this->successResponse($response);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'access_key' => 'required|integer|unique:parkings'
        ]);

        if ($validator->fails()) {
            $response['message'] = $validator->errors()->first();
            return $this->failureResponse($response);
        }

        $input = $request->all();

        $response['parking'] = Parking::create($input);
        $response['message'] = "Parking space created successfully";
        return $this->successResponse($response);
    }


    public function parkingEdit(Request $request, $id)
    {
        $parking = Parking::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'access_key' => 'required|integer|unique:parkings,access_key,' . $id,
            'is_active' => 'required|boolean'
        ]);
        if ($validator->fails()) {
            $response['message'] = $validator->errors()->first();
            return $this->failureResponse($response);
        }

        $input = $request->all();

        DB::beginTransaction();

        try {
            $parking->fill($input)->save();


            DB::commit();

            $response['parking'] = $parking;
            $response['message'] = 'Parking Updated Successfully';
            return $this->successResponse($response);
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            $response['message'] = 'Parking can not save properly';
            return $this->failureResponse($response);
        }
    }


    public function parkingDelete($id)
    {
        //Find a parking with a given id and delete
        $parking = Parking::findOrFail($id);

        DB::beginTransaction();

        try {
            $parking->delete();
            DB::commit();
            $response['message'] = 'Parking Successfully Deleted';
            return $this->successResponse($response);
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            $response['message'] = 'Parking can not Delete properly';
            return $this->failureResponse($response);
        }
    }

    public function saveDistanceToServer(Request $request)
    {
        foreach ($request->all() as $access_key => $distance) {
            $parking = Parking::where('access_key', $access_key)->firstOrFail();
            if ($parking) {
                if (abs($parking->distance - $distance)>5){
                    $parking->distance = $distance;
                    $parking->save();
                }
            }
        }
        $response['message'] = "Sensors Data Successfully Updated in Server";
        return $this->successResponse($response);
    }

}
