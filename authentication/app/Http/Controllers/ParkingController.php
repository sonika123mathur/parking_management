<?php

namespace App\Http\Controllers;

use App\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {
        $posts = Parking::orderby('id')->paginate(5); //show only 5 items at a time in descending order

        return view('posts.index', compact('posts'));
    }
}
