<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class LoanCalculator extends Controller
{




        public function loan(Request $request)
        {
            $amount = $request->input('amount');
            $months = $request->input('months');
            $banks = Bank::all();

            $results = [];

            foreach ($banks as $bank) {
                $monthly_interest = $bank->interest_rate / 100 / 12;
                $monthly_payment = $amount * $monthly_interest / (1 - pow(1 + $monthly_interest, -$months));
                $results[] = [
                    'bank' => $bank->name,
                    'monthly_payment' => round($monthly_payment, 2),
                ];
            }

            return view('/', compact('results'));
}

}
