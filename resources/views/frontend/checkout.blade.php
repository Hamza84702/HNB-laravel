<style>
        .order-summary {
            border: 1px solid #e3e6f0;
            border-radius: .35rem;
            padding: 20px;
            background-color: #fff;
        }
        .order-summary h4 {
            border-bottom: 2px solid #4e73df;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #4e73df;
        }
        .order-summary .product-list {
            margin-bottom: 20px;
        }
        .order-summary .product-list .product-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e3e6f0;
        }
        .order-summary .totals {
            margin-bottom: 10px;
        }
        .order-summary .totals .totals-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        .order-summary .totals .total {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .btn-checkout {
            background-color: #4e73df;
            color: #fff;
            font-weight: bold;
            width: 100%;
            padding: 15px;
            border-radius: .35rem;
        }
        .hide{
            display:none;
        }
    </style>
@extends('frontend.layouts.main1')

@section('content')
<!-- Checkout Page Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <!-- Sign-in Option -->
            @if(!Auth::user())
            <div class="mb-4">
                <h4>Sign In / Register</h4>
                <p>If you have an account, sign in for a faster checkout experience.</p>
                <button class="btn btn-sm btn-primary"><a href="{{route('redirect')}}" style="color:white;">Log in</a></button>
            </div>
            @endif

            <!-- User Info Section -->
            <div class="mb-4" style="margin-top: 40px;">
                <h4>User Information</h4>
                <form 
                    role="form" 
                    action="{{route('stripe.post')}}" 
                    method="post" 
                    class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                    id="payment-form">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="useremail" class="form-control" id="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" name="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Billing Address -->
                    <div class="mb-4" style="margin-top: 40px;">
                        <h4>Billing Address</h4>
                        <div class="mb-3">
                            <label for="billingAddress" class="form-label">Address</label>
                            <input type="text" name="billingAddress" class="form-control" id="billingAddress" placeholder="Enter your billing address" required>
                        </div>
                        <div class="mb-3">
                            <label for="billingCountry" class="form-label">Country</label>
                            <div>
                            <select name="billingCountry" class="form-control" id="billingCountry" required>
                                <option value="">Select your country</option>
                                <option value="1">Pakistan</option>
                                <!-- Add country options here -->
                            </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="billingCity" class="form-label">City</label>
                            <input type="text" name="billingCity" class="form-control" id="billingCity" placeholder="Enter your city" required>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="mb-4" style="margin-top: 40px;">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sameAsBilling">
                            <label class="form-check-label" for="sameAsBilling">Same as billing address</label>
                        </div>
                        <h4>Shipping Address</h4>
                        <div class="mb-3">
                            <label for="shippingAddress" class="form-label">Address</label>
                            <input type="text" name="shippingAddress" class="form-control" id="shippingAddress" placeholder="Enter your shipping address" required>
                        </div>
                        <div class="mb-3">
                            <label for="shippingCountry" class="form-label">Country</label>
                            <div>
                            <select name="shippingCountry" class="form-control" id="shippingCountry" required>
                                <option value="">Select your country</option>
                                <option value="1">Pakistan</option>
                            </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="shippingCity" class="form-label">City</label>
                            <input type="text" name="shippingCity" class="form-control" id="shippingCity" placeholder="Enter your city" required>
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div class="mb-4" style="margin-top: 40px;">
                        <h4>Payment Information</h4>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="onlinepayment">
                            <label class="form-check-label" for="onlinepayment">Online Payment</label>
                        </div>
                        <div id="card-info" class="hide">
                        <div class="form-row row">
                            <div class="col-xs-12 form-group required">
                                <label class="control-label">Name on Card</label>
                                <input class="form-control" size="4" type="text">
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-xs-12 form-group card required">
                                <label class="control-label">Card Number</label>
                                <input autocomplete="off" class="form-control card-number" size="20" type="text">
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-xs-12 col-md-4 form-group cvc required">
                                <label class="control-label">CVC</label>
                                <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text">
                            </div>
                            <div class="col-xs-12 col-md-4 form-group expiration required">
                                <label class="control-label">Expiration Month</label>
                                <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text">
                            </div>
                            <div class="col-xs-12 col-md-4 form-group expiration required">
                                <label class="control-label">Expiration Year</label>
                                <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text">
                            </div>
                        </div>
    </div>
                        <div class="form-row row">
                            <div class="col-md-12 error form-group hide">
                                <div class="alert-danger alert">Please correct the errors and try again.</div>
                            </div>
                        </div>

                       
                    </div>
               
            </div>
        </div>

       <div class="container mt-5">
        <div class="col-lg-6 mx-auto">
        <div class="order-summary mb-4">
            <h4>Order Summary</h4>
            @php $totalprice=0; $totaldiscount=0; @endphp
            @foreach(cartdata() as $cart)
            @php $totalprice += $cart->product->price; $totaldiscount +=calculatetotaldiscount($cart->product->price,$cart->product->discount)  @endphp
            <div class="product-list">
                <div class="product-item">
                    <span><b>{{$cart->product->name}}</b> <i>({{$cart->qty}}x)</i>&nbsp;</span>
                    <span>${{$cart->product->price}}</span>
                </div>
            </div>
            @endforeach
            <div class="totals">
                <div class="totals-item">
                    <span>Subtotal:</span>
                    <span>${{$totalprice}}</span>
                </div>
                <div class="totals-item">
                    <span>Discount:</span>
                    <span>-${{$totaldiscount}}</span>
                </div>
                <div class="totals-item total">
                    <span>Total:</span>
                    <span>$110.00</span>
                </div>
            </div>
 <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
                            </div>
                        </div>        </div>
    </div>
     </form>
</div>
    </div>
</div>
<!-- End of Checkout Page Content -->

<style>
    .error-message {
        color: red;
        font-size: 12px;
    }

    .error-input {
        border: 1px solid red;
    }
</style>

<script>
    document.getElementById('sameAsBilling').addEventListener('change', function() {
        const isChecked = this.checked;
        const billingAddress = document.getElementById('billingAddress').value;
        const billingCountry = document.getElementById('billingCountry').value;
        const billingCity = document.getElementById('billingCity').value;
        const shippingAddress = document.getElementById('shippingAddress');
        const shippingCountry = document.getElementById('shippingCountry');
        const shippingCity = document.getElementById('shippingCity');

        if (isChecked) {
            shippingAddress.value = billingAddress;
            shippingCountry.value = billingCountry;
            shippingCity.value = billingCity;
            if (validateAddress(billingAddress) && validateCountry(billingCountry) && validateCity(billingCity)) {
                // Billing address is valid
                if (validateAddress(shippingAddress.value) && validateCountry(shippingCountry.value) && validateCity(shippingCity.value)) {
                    // Shipping address is also valid
                    // Proceed with the order submission
                    document.getElementById('placeOrderBtn').click(); // Trigger click event on Place Order button
                } else {
                    // Shipping address is not valid
                    displayErrorMessage(shippingAddress, 'Please provide valid shipping address details.');
                    displayErrorMessage(shippingCountry, 'Please select a country.');
                    displayErrorMessage(shippingCity, 'Please provide a city.');
                }
            } else {
                // Billing address is not valid
                displayErrorMessage(document.getElementById('billingAddress'), 'Please provide valid billing address details.');
                displayErrorMessage(document.getElementById('billingCountry'), 'Please select a country.');
                displayErrorMessage(document.getElementById('billingCity'), 'Please provide a city.');
            }
        } else {
            shippingAddress.value = '';
            shippingCountry.value = '';
            shippingCity.value = '';
        }
    });

    function validateAddress(address) {
        return address.trim() !== '';
    }

    function validateCountry(country) {
        return country.trim() !== '';
    }

    function validateCity(city) {
        return city.trim() !== '';
    }

    function displayErrorMessage(inputField, message) {
        // Check if error message already exists
        const errorMessage = inputField.nextElementSibling;
        if (errorMessage && errorMessage.classList.contains('error-message')) {
            // Update existing error message
            errorMessage.textContent = message;
        } else {
            // Create new error message and insert it below the input field
            const newErrorMessage = document.createElement('span');
            newErrorMessage.classList.add('error-message');
            newErrorMessage.textContent = message;
            inputField.parentNode.insertBefore(newErrorMessage, inputField.nextSibling);
        }
        // Add error style to input field
        inputField.classList.add('error-input');
    }

    document.getElementById('payment-form').addEventListener('submit', function(event) {
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const billingAddress = document.getElementById('billingAddress').value;
        const billingCountry = document.getElementById('billingCountry').value;
        const billingCity = document.getElementById('billingCity').value;
        const shippingAddress = document.getElementById('shippingAddress').value;
        const shippingCountry = document.getElementById('shippingCountry').value;
        const shippingCity = document.getElementById('shippingCity').value;

        // Reset input styles
        resetInputStyles();

        let hasError = false;

        if (!validateAddress(fullName) || !validateAddress(email) || !validateAddress(phoneNumber)) {
            // Display error messages for user information fields
            displayErrorMessage(document.getElementById('fullName'), 'Please provide your full name.');
            displayErrorMessage(document.getElementById('email'), 'Please provide your email address.');
            displayErrorMessage(document.getElementById('phoneNumber'), 'Please provide your phone number.');
            hasError = true;
        }

        if (!validateAddress(billingAddress) || !validateCountry(billingCountry) || !validateCity(billingCity)) {
            // Display error messages for billing address fields
            displayErrorMessage(document.getElementById('billingAddress'), 'Please provide valid billing address details.');
            displayErrorMessage(document.getElementById('billingCountry'), 'Please select a country.');
            displayErrorMessage(document.getElementById('billingCity'), 'Please provide a city.');
            hasError = true;
        }

        if (!validateAddress(shippingAddress) || !validateCountry(shippingCountry) || !validateCity(shippingCity)) {
            // Display error messages for shipping address fields
            displayErrorMessage(document.getElementById('shippingAddress'), 'Please provide valid shipping address details.');
            displayErrorMessage(document.getElementById('shippingCountry'), 'Please select a country.');
            displayErrorMessage(document.getElementById('shippingCity'), 'Please provide a city.');
            hasError = true;
        }

        if (hasError) {
            event.preventDefault();
        }
    });

    function resetInputStyles() {
        const inputFields = document.querySelectorAll('.error-input');
        inputFields.forEach(function(inputField) {
            inputField.classList.remove('error-input');
        });

        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function(errorMessage) {
            errorMessage.remove();
        });
    }

    // Add an event listener to the Place Order button
    document.getElementById('placeOrderBtn').addEventListener('click', function() {
        // Trigger form submission
        document.getElementById('payment-form').submit();
    });
</script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>

<script>
    document.getElementById('onlinepayment').addEventListener('change', function() {
        var cardInfo = document.getElementById('card-info');
        if (this.checked) {
            cardInfo.classList.remove('hide');
        } else {
            cardInfo.classList.add('hide');
        }
    });
</script>
@endsection
