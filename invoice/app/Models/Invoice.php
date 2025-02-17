<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number', 'client_name', 'client_number', 'client_address', 'subtotal', 'tax_percentage', 
        'total', 'payment_method', 'payment_name', 'bank_account_number', 'bank_name', 'bank_branch', 
        'sender_company_name', 'sender_company_number', 'sender_company_address', 'logo_path',
    ];

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
