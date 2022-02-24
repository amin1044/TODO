<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Banner\Entities\Banner;
use Modules\Sliders\Entities\Slider;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{



    public function index(Request $request)
    {
//        Sliders
        $sliders_main = Slider::all();
//        Banners
        $banners_four = Banner::where('type', 3)->where('status', 1)->orderby('id', 'DESC')->take(4)->get();
        $banners_one_down = Banner::where('type', 4)->where('status', 1)->orderby('id', 'DESC')->first();
        $banners_two_left = Banner::where('type', 1)->take(2)->get();
        $banners_one_right = Banner::where('type', 2)->where('status', 1)->orderby('id', 'DESC')->first();
        $brands = Banner::where('type', 5)->where('status', 1)->orderby('id', 'DESC')->get();
//        Banners

///       Product

///       Product
        $users = User::find(Auth::id());

        return view('FrontEnd.Home.index',
            compact(   'banners_four', 'banners_one_right', 'banners_two_left', 'banners_one_down',
                'sliders_main','brands','users'));
    }

}
