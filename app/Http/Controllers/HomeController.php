<?php 
namespace App\Http\Controllers;

use App\Models\City;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getCityData()
{
    $cities = City::with(['state', 'state.country'])->get();
    //dd($cities);
    return DataTables::of($cities)
        ->addColumn('state', function($city) {
            return $city->state ? $city->state->name : null;
        })
        ->addColumn('country', function($city) {
            return $city->state && $city->state->country ? $city->state->country->name : null;
        })
        ->make(true);
}

}
