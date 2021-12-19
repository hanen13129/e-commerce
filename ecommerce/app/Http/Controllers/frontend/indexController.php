<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg; 
use Illuminate\Support\Facades\Hash;
use App\Models\BlogPost;

use App\Models\SubCategory;
use App\Models\SubSubCategory;
 
class IndexController extends Controller
{
    public function index(){
  return view('frontend.index');

    


    }

}