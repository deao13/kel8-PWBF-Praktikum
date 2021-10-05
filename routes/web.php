<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });


Route::get('/', function () {
    return view('home' ,[
        "title" => "Home",
    ]);

});



Route::get('/register', function () {
    return view('register' , [
        "title" => "Login",
    ]);

});


Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "definisi" => " ASIPS (Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
        dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam 
        pencatatan status gizi balita sebagai upaya pencegahan stunting. 
        Aplikasi ini bertujuan untuk melacak, mencatat dan merekam status gizi balita secara 
        tepat, cepat dan sesuai dengan pengukuran di masing - masing posyandu. 
        Sehingga jika ada balita yang terindikasi mengalami STUNTING maka langsung terlihat pada rekap 
        laporan yang ada pada masing – masing posyandu."
    ]);

});

Route::get('/news', function () {
    
    return view('news' , [
        "title" => "News",
        "news" => [
            [
                "author" => "DeaO",
                "title" => "ASIPS Week 1",
                "slug" => "asips-week-1",
                "body" => "Lorem ipsum dolores auvet...."
            ],
            [
                "author" => "Nad",
                "title" => "ASIPS Week 2",
                "slug" => "asips-week-2",
                "body" => "Lorem ipsum dolores auvet...."
            ]
        ]
       
    ]);
  
});


// halaman single blog_asips
Route::get('news/{slug}' , function($slug){
    $blog_asips = [
        [
            "title" => "ASIPS Week Satu" ,
            "slug" => "asips week satu" ,
            "author" => "Dea dan Nadya" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Inventore praesentium maiores neque porro? A facere perferendis repudiandae
            obcaecati molestiae mollitia. Fugit, esse dolorem eius asperiores libero molestiae
            praesentium necessitatibus provident."
        ] ,
        [
            "title" => "ASIPS Week Dua" ,
            "slug" => "asips week 2" ,
            "author" => "Pascal dan Billy" ,
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Earum iusto consequatur fugiat delectus? Error eum eligendi temporibus
            provident vel iure, impedit neque alias illum est ut necessitatibus? 
            Maxime modi impedit dignissimos labore cum tenetur eum, distinctio molestias perspiciatis, 
            blanditiis hic totam nam quibusdam. Praesentium sapiente, quae quis nesciunt odit aperiam 
            exercitationem laborum voluptates autem officia incidunt modi. 
            Consectetur provident placeat ducimus officiis voluptas error dicta voluptate mollitia nesciunt minima, 
            veniam, laboriosam eos vero obcaecati omnis laborum tempora debitis sed ullam!"
        ] 
    ];



$new_asips = [];
    foreach($blog_asips as $asips){
        if($asips["slug"] === $slug){
            $new_asips = $asips;
        }
    }
    return view('blog_asips', [
        "title" => "single blog asips" ,
        "asips" => $new_asips
    ]);
});




