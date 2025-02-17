<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
Route::get('/', function () {
    return view('create');
});
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoices.show');
Route::get('/invoices/{id}/download', [InvoiceController::class, 'downloadPDF'])->name('invoices.download');

#pages
Route::get('/terms-of-use', [InvoiceController::class, 'terms']);
Route::get('/about', [InvoiceController::class, 'about']);
Route::get('/privacy-policy', [InvoiceController::class, 'privacy']);
Route::get('/contact', [InvoiceController::class, 'contact']);
Route::get('/sitemap', [InvoiceController::class, 'sitemap']);

#articles
Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article1']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article2']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article3']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article4']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article5']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article6']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article7']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article8']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article9']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article10']);

#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article11']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article12']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article13']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article14']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article15']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article16']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article17']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article18']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article19']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article20']);

#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article21']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article22']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article23']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article24']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article25']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article26']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article27']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article28']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article29']);
#Route::get('/articles/why-every-business-needs-an-invoice-generator-and-how-to-choose-the-right-one', [InvoiceController::class, 'article30']);