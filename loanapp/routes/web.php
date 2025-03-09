<?php

use App\Http\Controllers\Loans;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/terms-of-service', function () {
    return view('terms');
});

Route::post('/', [Loans::class, 'Loans'])->name('Loans');

Route::get('/articles/how-to-apply-for-a-personal-loan-at-nedbank-south-africa', function () { return view('articles/1'); });
Route::get('/articles/business-loans-from-standard-bank-financing-options-for-entrepreneurs', function () { return view('articles/2'); });
Route::get('/articles/microfinance-loans-from-wonga-south-africa-empowering-small-business-owners', function () { return view('articles/3'); });
Route::get('/articles/secured-vs-unsecured-loans-at-fnb-which-is-the-best-option-for-you', function () { return view('articles/4'); });
Route::get('/articles/vehicle-financing-with-wesbank-getting-the-best-car-loan-in-south-africa', function () { return view('articles/5'); });
#Route::get('/articles/quic', function () { return view('articles/6'); });
#Route::get('/articles/standard-cha', function () { return view('articles/7'); });
#Route::get('/articles/how-to-ge', function () { return view('articles/8'); });
#Route::get('/articles/benefits of  ', function () { return view('articles/9'); });
#Route::get('/articles/', function () { return view('articles/10'); });
#Route::get('/articles/how-to-g', function () { return view('articles/11'); });
#Route::get('/articles/what', function () { return view('articles/12'); });
#Route::get('/articles/bes', function () { return view('articles/13'); });
#Route::get('/articles/how-to-apply-for-a', function () { return view('articles/14'); });
#Route::get('/articles/a-guide-to-', function () { return view('articles/15'); });
#Route::get('/articles/how', function () { return view('articles/16'); });
#Route::get('/articles/1', function () { return view('articles/17'); });
#Route::get('/articles/1', function () { return view('articles/18'); });
#Route::get('/articles/1', function () { return view('articles/19'); });
#Route::get('/articles/1', function () { return view('articles/20'); });
