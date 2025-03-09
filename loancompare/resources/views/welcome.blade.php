<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDFTools - Simple & Reliable PDF Tools</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --light-purple: #f0eeff;
            --card-bg: #f5f5ff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background-color: var(--light-purple);
        }
        
        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .navbar-brand span {
            color: #333;
        }
        
        /* Centered and larger menu */
        .navbar-nav {
            margin: 0 auto;
            display: flex;
            align-items: center;
        }
        
        .nav-link {
            color: #333;
            font-weight: 500;
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem !important;
            text-align: center;
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .dropdown-menu {
            font-size: 1.1rem;
        }
        
        .dropdown-item {
            padding: 0.5rem 1.5rem;
        }
        
        .hero-section {
            background-color: var(--light-purple);
            padding: 3rem 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .hero-section p {
            font-size: 1.1rem;
            color: #555;
        }
        
        /* Make entire card clickable */
        .tool-card-link {
            display: block;
            text-decoration: none;
            color: inherit;
            height: 100%;
        }
        
        .tool-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        
        .tool-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .tool-icon i {
            font-size: 2rem;
            color: var(--primary-color);
        }
        
        .tool-card h3 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        .tool-card p {
            font-size: 0.9rem;
            color: #666;
        }
        
        .ad-banner {
            background-color: #007bff;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            margin: 2rem 0;
        }
        
        .footer {
            background-color: var(--light-purple);
            padding: 2rem 0;
            margin-top: 2rem;
        }
        
        .footer-logo {
            font-weight: bold;
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            display: block;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .footer-links a {
            color: #333;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1rem 0;
        }
        
        .social-links a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            transition: background-color 0.3s, color 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .copyright {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        
        .back-to-top:hover {
            opacity: 1;
            color: white;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .navbar-nav {
                margin: 1rem 0;
            }
            
            .nav-link {
                text-align: left;
            }
        }
        
        @media (max-width: 768px) {
            .tool-card {
                margin-bottom: 1rem;
            }
        }

         .calculator-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .section-title {
            margin-bottom: 20px;
            font-weight: 700;
            color: #333;
        }
        
        .green-underline {
            border-top: 4px solid #2EB872;
            width: 280px;
            margin-bottom: 30px;
        }
        
        .calculator-box {
            border-radius: 10px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .calculator-description {
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
        }
        
        .result-container {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 25px;
        }
        
        .result-label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .info-icon {
            margin-left: 8px;
            color: #6c757d;
            cursor: pointer;
        }
        
        .result-value {
            font-size: 42px;
            font-weight: 700;
            color: #2EB872;
            margin-bottom: 20px;
        }
        
        .interest-value {
            font-size: 42px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }
        
        .explore-btn {
            color: #2EB872;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 600;
        }
        
        .form-label {
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }
        
        .amount-hint {
            margin-top: 8px;
            font-size: 14px;
            color: #6c757d;
        }
        
        .range-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 14px;
            color: #6c757d;
        }
        
        .range-current {
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            margin: 10px 0;
            color: #333;
        }
        
        /* Custom Range Slider */
        input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 5px;
            background: #e9ecef;
            outline: none;
        }
        
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #2EB872;
            cursor: pointer;
            border: 4px solid white;
            box-shadow: 0 0 0 1px #2EB872;
        }
        
        input[type="range"]::-moz-range-thumb {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #2EB872;
            cursor: pointer;
            border: 4px solid white;
            box-shadow: 0 0 0 1px #2EB872;
        }
        
        .input-group-text {
            background-color: #fff;
            font-weight: 600;
        }
        
        .how-to-apply {
            margin-top: 40px;
        }
        
        .how-to-apply h3 {
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }
        
        .how-to-apply p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">PDF<span>Tools</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Merge PDF</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compress PDF</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            All PDF Tools
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Capitec Loan Calculator</a></li>
                            <li><a class="dropdown-item" href="#">Compress PDF</a></li>
                            <li><a class="dropdown-item" href="#">Convert PDF</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">All Tools</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle text-decoration-none" type="button" data-bs-toggle="dropdown">
                        🇺🇸 English
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">🇺🇸 English</a></li>
                        <li><a class="dropdown-item" href="#">🇪🇸 Español</a></li>
                        <li><a class="dropdown-item" href="#">🇫🇷 Français</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Simple & Free South Africa Loans and Insurance Tools</h1>
            <p>Calculate personal loans and insurance premiums</p>
            
        </div>
    </section>
@yield('content')
    <!-- Tools Section -->
    <section class="py-5">
        <div class="container">
            <!-- First Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-object-group"></i>
                            </div>
                            <h3>Loan Calculator South Africa</h3>
                         
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h3>Capitec Personal Loan Calculator</h3>
                          
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <h3>FNB Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-sort"></i>
                            </div>
                            <h3>Standard Bank Personal Loan Calculator</h3>
                           
                        </div>
                    </a>
                </div>
            </div>

            <!-- Second Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-compress"></i>
                            </div>
                            <h3>First Rand Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-adjust"></i>
                            </div>
                            <h3>Nedbank Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-export"></i>
                            </div>
                            <h3>Investec Bank Personal Loan Calculator</h3>
                           
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <h3>Absa Personal Loan Calculator</h3>
                           
                        </div>
                    </a>
                </div>
            </div>

            <!-- Third Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-image"></i>
                            </div>
                            <h3>Vodacom Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-image"></i>
                            </div>
                            <h3>Wesbank Personal Loan Calculator</h3>
                         
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-image"></i>
                            </div>
                            <h3>Access Bank Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-image"></i>
                            </div>
                            <h3>Oldmutual Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
            </div>

            <!-- Fourth Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-word"></i>
                            </div>
                            <h3>Cafin Personal Loan Calculator</h3>
                           
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-powerpoint"></i>
                            </div>
                            <h3>Sanlam Personal Loan Calculator</h3>
                           
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3>Wonga Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-excel"></i>
                            </div>
                            <h3>Direct Axis Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
            </div>

            <!-- Fifth Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>Arcadia Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>African Bank Personal Loan Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>Discount Finder for Insurance</h3>
                            
                        </div>
                    </a>
                </div>
            </div>

            <!-- Sixth Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>Car Insurance Cost Estimator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>Travel Insurance Quote Generator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3>Medical Aid Cost Estimator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-file-archive"></i>
                            </div>
                            <h3>Car Insurance Eligibility Checker</h3>
                            
                        </div>
                    </a>
                </div>
            </div>

            <!-- Seventh Row of Tools -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h3>Instant Insurance Quote Generator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="tool-card-link">
                        <div class="tool-card">
                            <div class="tool-icon">
                                <i class="fas fa-unlock"></i>
                            </div>
                            <h3>Pet Insurance Cost Calculator</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Empty space for alignment -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Empty space for alignment -->
                </div>
            </div>

           
        </div>
    </section>

    <!-- Thank You Section -->
    <section class="py-4 bg-light">
        <div class="container text-center">
            <h4>Thank you for using our services</h4>
            <p>If you could share our website with your friends, that would be a great help</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                <a href="#" class="footer-logo">PDF<span>Tools</span></a>
                <div class="footer-links">
                    <a href="#">About</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                </div>
                <p class="copyright">
                    Doronov © PDFTools 2024. All rights reserved
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>