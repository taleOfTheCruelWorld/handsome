<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Color;
use App\Models\Order;
use App\Models\RetakeType;
use App\Models\Type;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cities'] = City::get();
        $data['types'] = Type::get();
        $data['colors'] = Color::get();
        $data['retake_types'] = RetakeType::get();
        return view('index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Order::create($request->all());
        return back();
        
    }

}
