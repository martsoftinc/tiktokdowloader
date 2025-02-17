<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .invoice-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .invoice-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .invoice-section {
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .invoice-section:last-child {
            border-bottom: none;
        }
        .invoice-details p {
            margin: 0 0 5px;
        }
        .total {
            font-weight: bold;
            font-size: 20px;
            color: #495057;
        }
        .logo img {
            max-width: 200px;
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Invoice Generator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="invoice-container">
            <!-- Invoice Title -->
            <h2 class="invoice-title text-center">Invoice #{{ $invoice->invoice_number }}</h2>

            <!-- Client Section -->
            <div class="invoice-section">
                <h5>Client Information</h5>
                <div class="invoice-details">
                    <p><strong>Name:</strong> {{ $invoice->client_name }}</p>
                    <p><strong>Number:</strong> {{ $invoice->client_number }}</p>
                    <p><strong>Address:</strong> {{ $invoice->client_address }}</p>
                </div>
            </div>

            <!-- Product Section -->
            <div class="invoice-section">
    <h5>Product Details</h5>
    <div class="invoice-details">
        @foreach($invoice->items as $item)
            <div class="mb-3">
                <p><strong>Product:</strong> {{ $item->product_description }}</p>
                <p><strong>Price per unit:</strong> ${{ number_format($item->unit_cost, 2) }}</p>
                <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
                <p><strong>Amount:</strong> {{ $item->amount }}</p>
                <hr>
            </div>
        @endforeach
    </div>
</div>

            <!-- Summary Section -->
            <div class="invoice-section">
                <h5>Summary</h5>
                <div class="invoice-details">
                    <p><strong>Subtotal:</strong> ${{ number_format($invoice->subtotal, 2) }}</p>
                    <p><strong>Tax ({{ $invoice->tax_percentage }}%):</strong> ${{ number_format(($invoice->subtotal * $invoice->tax_percentage) / 100, 2) }}</p>
                    <p class="total"><strong>Total:</strong> ${{ number_format($invoice->total, 2) }}</p>
                </div>
            </div>

            <!-- Payment Section -->
            <div class="invoice-section">
                <h5>Payment Information</h5>
                <div class="invoice-details">
                    <p><strong>Method:</strong> {{ $invoice->payment_method }}</p>
                    <p><strong>Name:</strong> {{ $invoice->payment_name }}</p>
                    <p><strong>Bank Account Number:</strong> {{ $invoice->bank_account_number }}</p>
                    <p><strong>Bank Name:</strong> {{ $invoice->bank_name }}</p>
                    <p><strong>Branch:</strong> {{ $invoice->bank_branch }}</p>
                </div>
            </div>

            <!-- Sender Section -->
            <div class="invoice-section">
                <h5>Sender Information</h5>
                <div class="invoice-details">
                    <p><strong>Company Name:</strong> {{ $invoice->sender_company_name }}</p>
                    <p><strong>Company Number:</strong> {{ $invoice->sender_company_number }}</p>
                    <p><strong>Company Address:</strong> {{ $invoice->sender_company_address }}</p>
                </div>
            </div>

            <!-- Uploaded Logo -->
            @if($invoice->logo_path)
            <div class="invoice-section logo text-center">
                <h5>Uploaded Logo</h5>
                <img src="{{ asset('storage/'.$invoice->logo_path) }}" alt="Logo">
            </div>
            @endif

            <!-- Download Button -->
            <div class="text-center mt-4">
                <a href="{{ route('invoices.download', $invoice->id) }}" class="btn btn-primary">Download PDF</a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <p>&copy; 2025 Simple Invoice Generator. All rights reserved.</p>
            <ul class="list-unstyled">
                <li><a href="#" class="text-dark">Privacy Policy</a></li>
                <li><a href="#" class="text-dark">Terms of Service</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
