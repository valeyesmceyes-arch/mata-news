<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    //homepage
    public function index(){
        //logic
        $name = 'June Mata';
        $sex = 'Male';
        $colors = ['Red', 'Green', 'Blue',   'Yellow','Orange' ];

        return view('home',[
            'name' => $name,
            'sex' => $sex,
            'colors' => $colors
        ]); 
        //not home.blade.php just home is enough because blade.php is default view file extension in laravel

        // return ('this is index from main controller');
    }
    //about us page
    public function about_us(){
        //logic
        return view('others.about-us');
        //why others.about-us? because about-us.blade.php is inside others folder in views folder. so we need to give the path of the file from views folder. and dot(.) is used to separate the folder name and file name.

        // return ('this is about us');
    }
    //contact page
    public function contact_us(){
        //  logic
        return view('others.contact-us');  //use . or \ for folder reference
        // return ('this is contact us'); 
    }


}
