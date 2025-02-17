<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    // Show the form to create an invoice
   public function create()
    {
        return view('invoices.create');
    }

    public function terms(){return view('pages.terms');}
    public function about(){return view('pages.about');}
    public function privacy(){return view('pages.privacy');}
    public function contact(){return view('pages.contact');}
    public function sitemap(){return view('pages.sitemap');}


    public function article1(){return view('articles.1');}
    public function article2(){return view('articles.2');}
    public function article3(){return view('articles.3');}
    public function article4(){return view('articles.4');}
    public function article5(){return view('articles.5');}
    public function article6(){return view('articles.6');}
    public function article7(){return view('articles.7');}
    public function article8(){return view('articles.8');}
    public function article9(){return view('articles.9');}
    public function article10(){return view('articles.10');}
    public function article11(){return view('articles.11');}
    public function article12(){return view('articles.12');}
    public function article13(){return view('articles.13');}
    public function article14(){return view('articles.14');}
    public function article15(){return view('articles.15');}
    public function article16(){return view('articles.16');}
    public function article17(){return view('articles.17');}
    public function article18(){return view('articles.18');}
    public function article19(){return view('articles.19');}
    public function article20(){return view('articles.20');}
    public function article21(){return view('articles.21');}
    public function article22(){return view('articles.22');}
    public function article23(){return view('articles.23');}
    public function article24(){return view('articles.24');}
    public function article25(){return view('articles.25');}
    public function article26(){return view('articles.26');}
    public function article27(){return view('articles.27');}
    public function article28(){return view('articles.28');}
    public function article29(){return view('articles.29');}
    public function article30(){return view('articles.30');}

    public function store(Request $request)
    {
        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'client_number' => 'required|string',
            'client_address' => 'required|string',
            'products.*.description' => 'required|string',
            'products.*.unit_cost' => 'required|numeric',
            'products.*.quantity' => 'required|integer',
            'tax_percentage' => 'required|numeric',
            'payment_method' => 'required|string',
            'payment_name' => 'required|string',
            'bank_account_number' => 'required|string',
            'bank_name' => 'required|string',
            'bank_branch' => 'required|string',
            'sender_company_name' => 'required|string',
            'sender_company_number' => 'required|string',
            'sender_company_address' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store logo if uploaded
        $logoPath = $request->hasFile('logo') ? $request->file('logo')->store('logos', 'public') : null;

        // Calculate subtotal, tax, and total
        $subtotal = 0;
        foreach ($request->products as $product) {
            $subtotal += $product['unit_cost'] * $product['quantity'];
        }
        $tax = ($subtotal * $request->tax_percentage) / 100;
        $total = $subtotal + $tax;

        // Create the invoice
        $invoice = Invoice::create([
            'invoice_number' => $request->invoice_number,
            'client_name' => $request->client_name,
            'client_number' => $request->client_number,
            'client_address' => $request->client_address,
            'subtotal' => $subtotal,
            'tax_percentage' => $request->tax_percentage,
            'total' => $total,
            'payment_method' => $request->payment_method,
            'payment_name' => $request->payment_name,
            'bank_account_number' => $request->bank_account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'sender_company_name' => $request->sender_company_name,
            'sender_company_number' => $request->sender_company_number,
            'sender_company_address' => $request->sender_company_address,
            'logo_path' => $logoPath,
        ]);

        // Create invoice items
        foreach ($request->products as $product) {
            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'product_description' => $product['description'],
                'unit_cost' => $product['unit_cost'],
                'quantity' => $product['quantity'],
                'amount' => $product['unit_cost'] * $product['quantity'],
            ]);
        }

        return redirect()->route('invoices.show', $invoice->id);
    }

    public function show($id)
    {
        $invoice = Invoice::with('items')->findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }

  public function downloadPDF($id)
{
    $invoice = Invoice::with('items')->findOrFail($id);
    
    // Generate the HTML content from the view
    $html = view('invoices.pdf', compact('invoice'))->render();

    // Path to Node.js binary
    $nodeBinaryPath = 'C:/Program Files/nodejs/node.exe';  // Make sure this is the correct path on your system

    // Use Browsershot to capture the HTML and generate a PDF
    Browsershot::html($html)
        ->setNodeBinary($nodeBinaryPath) // Path to Node.js binary
        ->save(storage_path('app/public/invoice-' . $invoice->invoice_number . '.pdf'));

    return response()->download(storage_path('app/public/invoice-' . $invoice->invoice_number . '.pdf'));
}
}
