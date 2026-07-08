<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// }); original

Route::get('/', [MainController::class, 'index'])->name('home'); //call index inside MainController class
//or code below

// Route::get('/about-us', function(){
//     return 'This is about us page ---->>>'.route('contact'); //generate URL Link to Contact Us Screen
// });

//______________________________________________________

//call about_us inside MainController class
Route::get('/about-us', [MainController::class, 'about_us'])->name('about');
//or code below 

// Route::get('/about-us', function(){
//     // Wrap the route helper inside a clickable HTML link tag
//     return 'This is about us page ---->>> <a href=" ' . route('contact') . ' ">Go to Contact Us</a>';
// })->name('about');

Route::get('/news-details/{id}', function($id){
    return 'This is news details page for ID:' . $id; //return or echo (print)
})->name('news-details');

//--------------------------------------------------------------

//shortcut call to contact_us inside MainController class
Route::get('/contact-us', [MainController::class, 'contact_us'])->name('contact');
//or code below 

// Route::get('/contact-us', function(){
//     return 'This is contact us page'; //return or echo (print)
// })->name('contact'); 
