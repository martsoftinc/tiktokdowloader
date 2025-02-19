<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculation Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Loan Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Loan Results Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Loan Calculation Results</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Bank</th>
                                <th>Term(Months)</th>
                                <th>Interest Rate (%)</th>
                                <th>Principal (Amount)</th>
                                <th>Total Interest</th>
                                <th>Monthly Payment</th>
                                <th>Total Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $result)
                            <tr>
                                <td>{{ $result['bank'] }}</td>
                                <td>{{ $result['months'] }}</td>
                                <td>{{ $result['interest_rate'] }}%</td>
                                <td>{{ $result['principal'] }}</td>
                                <td>{{ $result['interest'] }}</td>
                                <td>{{ $result['monthly_payment'] }}</td>
                                <td>{{ $result['total_payment'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <a href="/" class="btn btn-primary">Back to Calculator</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <!-- Footer Links -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="text-uppercase">Loan Calculator</h5>
                    <p>
                        Calculate your monthly loan repayments with fixed interest rates from various banks.
                    </p>
                </div>

                <!-- Privacy and Terms Links -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/privacy-policy" class="text-dark">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/terms-of-service" class="text-dark">Terms and Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-white">
            © 2025 Loan Calculator | All Rights Reserved.
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
