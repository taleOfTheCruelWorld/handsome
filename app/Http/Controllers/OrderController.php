<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Color;
use App\Models\Order;
use App\Models\RetakeType;
use App\Models\Tarif;
use App\Models\Type;
use Hash;
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
        $data['tarifs'] = Tarif::get();
        return view('index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->retake_type_id == 1 && $request->color_id == 1 && $request->type_id == 1){
            $request['tarif_id'] = 1; 
        }
        else if($request->type_id == 3 || $request->city_id != 1){
             $request['tarif_id'] = 3; 
        }
        else{
             $request['tarif_id'] = 2; 
        }
        Order::create($request->all());
        return back();

    }

}
