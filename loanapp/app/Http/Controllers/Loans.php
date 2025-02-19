<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use Illuminate\Http\Request;

class Loans extends Controller
{
     public function Loans(Request $request)
{
    $amount = $request->input('amount'); // Principal amount
    $months = $request->input('months');
    $banks = Bank::all();

    $results = [];

    foreach ($banks as $bank) {
        $interest_rate = $bank->interest_rate; // Interest rate from the bank
        $monthly_interest = $interest_rate / 100; // Monthly interest rate
        $monthly_payment = $amount * $monthly_interest / (1 - pow(1 + $monthly_interest, -$months)); // Monthly payment

        // Total amount to be paid over the loan period
        $total_payment = $monthly_payment * $months;

        // Total interest paid over the loan period
        $total_interest = $total_payment - $amount;

        $results[] = [
            'bank' => $bank->name,
            'interest_rate' => $interest_rate, // Display interest rate
            'principal' => round($amount, 2), // Display principal (loan amount)
            'interest' => round($total_interest, 2), // Total interest paid
            'monthly_payment' => round($monthly_payment, 2), // Monthly payment
            'total_payment' => round($total_payment, 2), // Total amount to be paid
            'months' => $months, // Total amount to be paid
        ];
    }

    return view('result', compact('results'));
}

}
