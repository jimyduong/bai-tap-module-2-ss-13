<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {

    echo 'Hello World!';

});
Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/login', function () {
    return view('login');
});

Route::post('login', function (Illuminate\Http\Request $request) {
    if ($request->user == 'admin' && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});

Route::get('/inputDiscount',function (){
    return view('inputDiscount');
});
Route::post('inputDiscount',function (Illuminate\Http\Request $request){

    $ProductDescription=$request->ProductDescription;
    $ListPrice=$request->ListPrice;
    $DiscountPercent=$request->DiscountPercent;


    $DiscountAmount = $request->ListPrice * $request->DiscountPercent * 0.01;
    $discountPrice=$request->ListPrice - $DiscountAmount;
    return view('display_discount', compact('DiscountAmount','discountPrice','ProductDescription',
    'ListPrice','DiscountPercent'));
});

Route::get('/inputTranslate',function (){
   return view('inputTranslate');
});
Route::post('inputTranslate',function (Illuminate\Http\Request $request){
    $input=$request->input;
    $arrWord=['hello'=>'xin chao','bye'=>'tam biet'];
    foreach ($arrWord as $key=>$value){
        if($input==$key){
            return view('displayTranslate', compact('input','value'));
        }
    }

        return view('errorTranslate');
});