<!DOCTYPE html>
<html lang="en">
<head>
	<title>3DM Client Integration Questionnaire</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">-->
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">-->
<!--===============================================================================================-->
<!--	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">-->
<!--===============================================================================================-->
<!--	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">-->
<!--===============================================================================================-->
<!--	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<!--	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="contact100-more flex-col-c-m" style="background: url('images/bg-01.jpg'); height: 1000px; no-repeat; position: fixed; background-size: cover;">
</div>
<div class="container-contact100">
    <div class="wrap-contact100">

        <form class="contact100-form validate-form" method="get" action="send.php">
				<span class="contact100-form-title">
					Please fill up the form:
				</span>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Full name</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <label class="label-input100" for="name">Company name</label>
                    <input id="company" class="input100" type="text" name="name" placeholder="Enter your Company name...">
                    <span class="focus-input100"></span>
                </div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">Email Address</label>
					<input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="required">
                    <label class="label-input100" for="name">Company in business since ?</label>
                    <input id="name" class="input100" type="text" name="name" placeholder="00.00.1900">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="required">
                    <label class="label-input100" for="name">E-commerce activity ?</label>
                    <input id="name" class="input100" type="text" name="name" placeholder="00.00.1900">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="required">
                    <label class="label-input100" for="name">What is your targeted start date?</label>
                    <input id="name" class="input100" type="text" name="name" placeholder="00.00.1900">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Please describe what is the nature of the products that need to be distributed at 3DM?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

				<div class="wrap-input100">
					<div class="label-input100">Are your products bulky?</div>
					<div>
						<select class="js-select2" name="service">
							<option>Please select</option>
							<option>Yes</option>
							<option>No</option>
                            <option>Not sure</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">What will be the estimated initial load shipped to us (number of skids, containers, cartons, etc…)?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Space Requirements</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>By pallet</option>
                            <option>By carton</option>
                            <option>By Squarefootage</option>
                            <option>By SKU</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Please specify the size of your skids (L X W X H)</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">How many active SKU's do you wish to integrate at 3DM?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Average number of new SKU per year?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Availability of SKU detail master file ? (item number, description, dimension, weight)</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Availability of SKU detail master file ? (item number, description, dimension, weight)</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Product requirement management</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Expiration date</option>
                            <option>Lot number</option>
                            <option>Lot number</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Do you have any fragile products?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Are your products barcoded?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Oversize product?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Average value per order (sell price)</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Temperature control environment?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Receiving requirement</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>By pallet</option>
                            <option>By carton</option>
                            <option>By Squarefootage</option>
                            <option>By SKU</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">How many receiving's will we have to process (Estimated)? Per week? Per year?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">How many receiving's will we have to process (Estimated)?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>By batch file</option>
                            <option>By email</option>
                            <option>By FTP site</option>
                            <option>By web services / API</option>
                            <option>By 3DM portal</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Fulfillment channel: B2B %? B2C %?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Are you planning to change your current distribution channel ?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Will we be treating rush orders for your account?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Do you require back orders processing?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Order type?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Cross-dock</option>
                            <option>By pallet</option>
                            <option>By carton</option>
                            <option>By unit</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">What is the estimated number of weekly orders?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Does your business experience seasonality? If so, can you please give us some visibility? Any Pick season ?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">What is the average number of SKU's per order?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">What is the expected frequency of order processing (daily, every two days, etc…)? </label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Will we include a personalized packing slip with each shipment?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Will we include marketing collaterals with each shipment?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Packaging supplies</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>3DM account</option>
                            <option>Your account</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Will we be managing returns ?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">What is your returns policy?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Refurbishing of products ?</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

            <div class="wrap-input100 validate-input">
                <label class="label-input100">Current issues accounted ?</label>
                <div class="input100"><br/>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="yes" /> Localisation
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="no" /> Cost efficienty
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="no" /> Turnaround time
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="no" /> Client experience
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="no" />Inventory discrepency
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" value="no" /> Other
                            <br/><br/></label>
                    </div>
                </div>
            </div>



                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Special requirement B2B (Banners / Retailers specific requirement) </label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Special requirement B2C (Slik paper / Bubble wrap / Others) </label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Disposal of obsolete SKU</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Send
                    </button>
                </div>
            </form>


                </div>
            </div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
