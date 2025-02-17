<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            color: #007BFF;
        }

        .header img {
            max-width: 120px;
        }

        .section h3 {
            font-size: 20px;
            color: #007BFF;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        .summary {
            margin-top: 20px;
            text-align: right;
        }

        .summary p {
            font-size: 16px;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
            color: #007BFF;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Header Section with Logo -->
        <div class="header">
            <h1>Invoice </h1>
            <div class="col-md-6">
            <h3>#{{ $invoice->invoice_number }}</h3>
            </div>
            @if($invoice->logo_path)
                <img src="{{ public_path('storage/' . $invoice->logo_path) }}" alt="Logo">
            @endif
        </div>

        <!-- Receiver and Sender Info in the Same Row Using Bootstrap Grid -->
        <div class="row section mt-4">
            <div class="col-md-6">
                <h3>Receiver Info</h3>
                <p><strong>Client Name:</strong> {{ $invoice->client_name }}</p>
                <p><strong>Client Number:</strong> {{ $invoice->client_number }}</p>
                <p><strong>Client Address:</strong> {{ $invoice->client_address }}</p>
            </div>

            <div class="col-md-6">
                <h3>Sender Info</h3>
                <p><strong>Sender Company Name:</strong> {{ $invoice->sender_company_name }}</p>
                <p><strong>Sender Company Number:</strong> {{ $invoice->sender_company_number }}</p>
                <p><strong>Sender Company Address:</strong> {{ $invoice->sender_company_address }}</p>
            </div>
        </div>

        <!-- Product Table -->
        <div class="section mt-5">
            <h3>Products</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Unit Cost</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoice->items as $item)
                        <tr>
                            <td>{{ $item->product_description }}</td>
                            <td>${{ number_format($item->unit_cost, 2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->amount, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Summary -->
        <div class="summary section">
            <p><strong>Subtotal:</strong> ${{ number_format($invoice->subtotal, 2) }}</p>
            <p><strong>Tax ({{ $invoice->tax_percentage }}%):</strong> ${{ number_format(($invoice->subtotal * $invoice->tax_percentage) / 100, 2) }}</p>
            <p class="total"><strong>Total:</strong> ${{ number_format($invoice->total, 2) }}</p>
        </div>

        <!-- Payment Info -->
        <div class="section">
            <h3>Payment Info</h3>
            <p><strong>Payment Method:</strong> {{ $invoice->payment_method }}</p>
            <p><strong>Payment Name:</strong> {{ $invoice->payment_name }}</p>
            <p><strong>Bank Account Number:</strong> {{ $invoice->bank_account_number }}</p>
            <p><strong>Bank Name:</strong> {{ $invoice->bank_name }}</p>
            <p><strong>Bank Branch:</strong> {{ $invoice->bank_branch }}</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you for your business!</p>
        </div>
    </div>
</body>
</html>
