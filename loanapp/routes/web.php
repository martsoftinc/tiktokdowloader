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

Route::get('/articles/how-to-apply-for-a-personal-loan-at-gcb-bank-in-ghana', function () { return view('articles/1'); });
Route::get('/articles/explore-stanbic-bank-ghana-s-low-interest-loans', function () { return view('articles/2'); });
Route::get('/articles/a-guide-to-getting-business-loans-from-ecobank-ghana', function () { return view('articles/3'); });
Route::get('/articles/the-best-loan-options-from-absa-bank-for-entrepreneurs-in-ghana', function () { return view('articles/4'); });
Route::get('/articles/understanding-fidelity-bank-ghana-student-loans', function () { return view('articles/5'); });
Route::get('/articles/quick-loans-from-uba-ghana-what-you-need-to-know', function () { return view('articles/6'); });
Route::get('/articles/standard-chartered-bank-ghana-s-top-5-home-loan-products', function () { return view('articles/7'); });
Route::get('/articles/how-to-get-an-sme-loan-from-first-national-bank-ghana', function () { return view('articles/8'); });
Route::get('/articles/benefits of Applying for an Agribusiness Loan from the Agricultural Development Bank of Ghana (ADB)', function () { return view('articles/9'); });
Route::get('/articles/personal-loan-rate-comparison-gcb-vs-ecobank', function () { return view('articles/10'); });
Route::get('/articles/how-to-get-the-best-mortgage-deal-from-calbank-ghana', function () { return view('articles/11'); });
Route::get('/articles/what-to-expect-when-applying-for-a-loan-at-prudential-bank-ghana', function () { return view('articles/12'); });
Route::get('/articles/best-zenith-bank-car-loan-options-in-ghana-2025', function () { return view('articles/13'); });
Route::get('/articles/how-to-apply-for-a-societe-generale-ghana-emergency-loan-guide', function () { return view('articles/14'); });
Route::get('/articles/a-guide-to-loan-types-and-banking-institutions-in-ghana', function () { return view('articles/15'); });
Route::get('/articles/how-to-maximize-your-chances-of-getting-a-loan-approval-at-stanbic-bank-ghana', function () { return view('articles/16'); });
#Route::get('/articles/1', function () { return view('articles/17'); });
#Route::get('/articles/1', function () { return view('articles/18'); });
#Route::get('/articles/1', function () { return view('articles/19'); });
#Route::get('/articles/1', function () { return view('articles/20'); });
