@extends('welcome')
@section('content')

    <div class="calculator-container">
        <h2 class="section-title">Capitec Repayments calculator</h2>
        <div class="green-underline"></div>
        
        <div class="calculator-box">
            <p class="calculator-description">
                Enter the amount you need, choose your repayment term and add insurance. We'll tell you the monthly and total cost of your loan.
            </p>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-4">
                        <label for="loanAmount" class="form-label">How much do you want to borrow?</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">R</span>
                            <input type="text" class="form-control" id="loanAmount" value="0" placeholder="Enter loan amount">
                        </div>
                        <div class="amount-hint">Enter an amount between R2,000 and R400,000</div>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label">What's your preferred repayment term?</label>
                        <div class="range-current">
                            <span id="yearValue">2 years</span>
                        </div>
                        <input type="range" class="form-range" min="6" max="72" step="1" id="termSlider" value="24">
                        <div class="range-labels">
                            <span>6 months</span>
                            <span>6 years</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="result-container">
                        <div class="mb-4">
                            <div class="result-label">
                                How much you'll pay back each month
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle info-icon" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                            <div class="result-value" id="monthlyPayment">R0.00</div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="result-label">
                                How much you'll pay back in total
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle info-icon" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                            <div class="result-value" id="totalPayment">R0.00</div>
                        </div>
                        
                        <div>
                            <div class="result-label">
                                Example interest rate
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle info-icon" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                            <div class="interest-value" id="interestRate">18%</div>
                            <a href="#" class="explore-btn">
                                Explore rate
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- New "How to apply" section -->
        <div class="how-to-apply">
            <h3>How to apply for loan at Capitec</h3>
            <p>
                Applying for a loan at Capitec is simple and convenient. You can apply online through the Capitec banking app, visit any Capitec branch, or use their website. Make sure you have your ID document, proof of income (such as payslips), and bank statements ready. Capitec offers competitive interest rates based on your personal credit profile, with loans ranging from R2,000 to R400,000. Once approved, funds can be disbursed quickly, often within 24 hours. Repayment terms are flexible, ranging from 6 months to 6 years, allowing you to choose a plan that fits your budget. Remember that your monthly repayment amount will depend on the loan amount, term length, and your personalized interest rate.
            </p>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loanAmountInput = document.getElementById('loanAmount');
            const termSlider = document.getElementById('termSlider');
            const yearValueSpan = document.getElementById('yearValue');
            const monthlyPaymentDiv = document.getElementById('monthlyPayment');
            const totalPaymentDiv = document.getElementById('totalPayment');
            
            // Format currency function
            function formatCurrency(amount) {
                return 'R' + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            }
            
            // Format currency without decimals
            function formatCurrencyNoDec(amount) {
                return 'R' + Math.round(amount).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            
            // Calculate loan payments
            function calculateLoan() {
                // Get input values
                let loanAmount = parseFloat(loanAmountInput.value.replace(/[^\d.]/g, ''));
                let loanTerm = parseInt(termSlider.value);
                let interestRate = 0.18; // 18% annual interest
                
                // Input validation
                if (isNaN(loanAmount) || loanAmount < 0) {
                    loanAmount = 0;
                }
                
                // If amount is below minimum or above maximum, still calculate but provide visual feedback
                if (loanAmount > 0 && loanAmount < 2000) {
                    loanAmountInput.classList.add('is-invalid');
                } else if (loanAmount > 400000) {
                    loanAmountInput.classList.add('is-invalid');
                } else {
                    loanAmountInput.classList.remove('is-invalid');
                }
                
                // Convert annual interest rate to monthly
                let monthlyRate = interestRate / 12;
                
                // If loan amount is 0, set results to 0
                if (loanAmount === 0) {
                    monthlyPaymentDiv.textContent = 'R0.00';
                    totalPaymentDiv.textContent = 'R0.00';
                } else {
                    // Calculate monthly payment using loan formula
                    let monthlyPayment = loanAmount * monthlyRate * Math.pow(1 + monthlyRate, loanTerm) / 
                                        (Math.pow(1 + monthlyRate, loanTerm) - 1);
                    
                    // Calculate total payment
                    let totalPayment = monthlyPayment * loanTerm;
                    
                    // Update the display
                    monthlyPaymentDiv.textContent = formatCurrency(monthlyPayment);
                    totalPaymentDiv.textContent = formatCurrency(totalPayment);
                }
                
                // Update term display
                if (loanTerm < 12) {
                    yearValueSpan.textContent = loanTerm + ' months';
                } else if (loanTerm === 12) {
                    yearValueSpan.textContent = '1 year';
                } else if (loanTerm % 12 === 0) {
                    yearValueSpan.textContent = (loanTerm / 12) + ' years';
                } else {
                    const years = Math.floor(loanTerm / 12);
                    const months = loanTerm % 12;
                    yearValueSpan.textContent = years + ' year' + (years > 1 ? 's' : '') + 
                                            ' ' + months + ' month' + (months > 1 ? 's' : '');
                }
            }
            
            // Add event listeners
            loanAmountInput.addEventListener('input', calculateLoan);
            loanAmountInput.addEventListener('blur', function() {
                calculateLoan();
            });
            
            termSlider.addEventListener('input', calculateLoan);
            
            // Initialize calculation
            calculateLoan();
        });
    </script>

@endsection