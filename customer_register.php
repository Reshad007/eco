<!DOCTYPE>
<?php 

	session_start();	

	include("functions/functions.php");
	include("includes/db.php");
 ?>
<html>
	<head>
		<title>Collect Your Name</title>

		<link rel="stylesheet" href="styles/style.css" media="all">
	</head>

	<body>
		
		<!--Main Container starts here-->
		<div class="main_wrapper">
			
			<!--Header starts here-->
			<div class="header_wrapper">

				<a href="index.php"><img id="logo" src="images/logo.png"></a>
				<img id="banner" src="images/ad_banner.jpg">

			</div>
			<!--Header ends here-->

			<!--Navigation Bar starts here-->
			<div class="menubar">

				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					<li><a href="customer_register.php">Sign Up</a></li>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>

				<div id="form">
					<form action="results.php" method="get"
					 enctype="multipart/form-data">
					 <input type="text" name="user_query" placeholder="Search a Product">
					 <input type="submit" name="search" value="Search">
					</form>
				</div>


			</div>
			<!--Navigation Bar ends here-->

			<!--Content wrapper starts here-->
			<div class="content_wrapper">

				<div id="sidebar">

						<div id="sidebar_title">Categories</div>

						<ul id="cats">
							
							<?php getCats(); ?>	

						</ul>

						<div id="sidebar_title">Brands</div>

						<ul id="cats">
							
							<?php getBrands(); ?>

						</ul>
				</div>



				<div id="content_area">

					<?php cart(); ?>

					<div id="shopping_cart">
						<span style="float:right; font-size:18px; padding:5px; line-height: 40px;">
							Welcome Guest! <b style="color:yellow">Shopping Cart:</b> 
							Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?><a href="cart.php" style="color:yellow"> Go to cart</a>
						</span>

					</div>


					<form action="customer_register.php" method="post" enctype="multipart/form-data">
						
						<table align="center" width="750">

							<tr align="center">
								<td colspan="6"><h2>Create an Account</h2></td>
							</tr>

							<tr>
								<td align="right" >Customer Name:</td>
								<td><input type="text" name="c_name" required ></td>
							</tr>

							<tr>
								<td align="right" >Customer Email:</td>
								<td><input type="text" name="c_email" required></td>
							</tr>

							<tr>
								<td align="right" >Customer Password:</td>
								<td><input type="password" name="c_pass" required></td>
							</tr>

							<tr>
								<td align="right" >Customer Image:</td>
								<td><input type="file" name="c_image" required></td>
							</tr>

							<tr>
								<td align="right" >Customer Country:</td>
								<td>
									<select name="c_country" >
										<option value="">Select a Country</option>
										<option value="AFG">Afghanistan</option>
										<option value="ALA">Åland Islands</option>
										<option value="ALB">Albania</option>
										<option value="DZA">Algeria</option>
										<option value="ASM">American Samoa</option>
										<option value="AND">Andorra</option>
										<option value="AGO">Angola</option>
										<option value="AIA">Anguilla</option>
										<option value="ATA">Antarctica</option>
										<option value="ATG">Antigua and Barbuda</option>
										<option value="ARG">Argentina</option>
										<option value="ARM">Armenia</option>
										<option value="ABW">Aruba</option>
										<option value="AUS">Australia</option>
										<option value="AUT">Austria</option>
										<option value="AZE">Azerbaijan</option>
										<option value="BHS">Bahamas</option>
										<option value="BHR">Bahrain</option>
										<option value="BGD">Bangladesh</option>
										<option value="BRB">Barbados</option>
										<option value="BLR">Belarus</option>
										<option value="BEL">Belgium</option>
										<option value="BLZ">Belize</option>
										<option value="BEN">Benin</option>
										<option value="BMU">Bermuda</option>
										<option value="BTN">Bhutan</option>
										<option value="BOL">Bolivia, Plurinational State of</option>
										<option value="BES">Bonaire, Sint Eustatius and Saba</option>
										<option value="BIH">Bosnia and Herzegovina</option>
										<option value="BWA">Botswana</option>
										<option value="BVT">Bouvet Island</option>
										<option value="BRA">Brazil</option>
										<option value="IOT">British Indian Ocean Territory</option>
										<option value="BRN">Brunei Darussalam</option>
										<option value="BGR">Bulgaria</option>
										<option value="BFA">Burkina Faso</option>
										<option value="BDI">Burundi</option>
										<option value="KHM">Cambodia</option>
										<option value="CMR">Cameroon</option>
										<option value="CAN">Canada</option>
										<option value="CPV">Cape Verde</option>
										<option value="CYM">Cayman Islands</option>
										<option value="CAF">Central African Republic</option>
										<option value="TCD">Chad</option>
										<option value="CHL">Chile</option>
										<option value="CHN">China</option>
										<option value="CXR">Christmas Island</option>
										<option value="CCK">Cocos (Keeling) Islands</option>
										<option value="COL">Colombia</option>
										<option value="COM">Comoros</option>
										<option value="COG">Congo</option>
										<option value="COD">Congo, the Democratic Republic of the</option>
										<option value="COK">Cook Islands</option>
										<option value="CRI">Costa Rica</option>
										<option value="CIV">Côte d'Ivoire</option>
										<option value="HRV">Croatia</option>
										<option value="CUB">Cuba</option>
										<option value="CUW">Curaçao</option>
										<option value="CYP">Cyprus</option>
										<option value="CZE">Czech Republic</option>
										<option value="DNK">Denmark</option>
										<option value="DJI">Djibouti</option>
										<option value="DMA">Dominica</option>
										<option value="DOM">Dominican Republic</option>
										<option value="ECU">Ecuador</option>
										<option value="EGY">Egypt</option>
										<option value="SLV">El Salvador</option>
										<option value="GNQ">Equatorial Guinea</option>
										<option value="ERI">Eritrea</option>
										<option value="EST">Estonia</option>
										<option value="ETH">Ethiopia</option>
										<option value="FLK">Falkland Islands (Malvinas)</option>
										<option value="FRO">Faroe Islands</option>
										<option value="FJI">Fiji</option>
										<option value="FIN">Finland</option>
										<option value="FRA">France</option>
										<option value="GUF">French Guiana</option>
										<option value="PYF">French Polynesia</option>
										<option value="ATF">French Southern Territories</option>
										<option value="GAB">Gabon</option>
										<option value="GMB">Gambia</option>
										<option value="GEO">Georgia</option>
										<option value="DEU">Germany</option>
										<option value="GHA">Ghana</option>
										<option value="GIB">Gibraltar</option>
										<option value="GRC">Greece</option>
										<option value="GRL">Greenland</option>
										<option value="GRD">Grenada</option>
										<option value="GLP">Guadeloupe</option>
										<option value="GUM">Guam</option>
										<option value="GTM">Guatemala</option>
										<option value="GGY">Guernsey</option>
										<option value="GIN">Guinea</option>
										<option value="GNB">Guinea-Bissau</option>
										<option value="GUY">Guyana</option>
										<option value="HTI">Haiti</option>
										<option value="HMD">Heard Island and McDonald Islands</option>
										<option value="VAT">Holy See (Vatican City State)</option>
										<option value="HND">Honduras</option>
										<option value="HKG">Hong Kong</option>
										<option value="HUN">Hungary</option>
										<option value="ISL">Iceland</option>
										<option value="IND">India</option>
										<option value="IDN">Indonesia</option>
										<option value="IRN">Iran, Islamic Republic of</option>
										<option value="IRQ">Iraq</option>
										<option value="IRL">Ireland</option>
										<option value="IMN">Isle of Man</option>
										<option value="ISR">Israel</option>
										<option value="ITA">Italy</option>
										<option value="JAM">Jamaica</option>
										<option value="JPN">Japan</option>
										<option value="JEY">Jersey</option>
										<option value="JOR">Jordan</option>
										<option value="KAZ">Kazakhstan</option>
										<option value="KEN">Kenya</option>
										<option value="KIR">Kiribati</option>
										<option value="PRK">Korea, Democratic People's Republic of</option>
										<option value="KOR">Korea, Republic of</option>
										<option value="KWT">Kuwait</option>
										<option value="KGZ">Kyrgyzstan</option>
										<option value="LAO">Lao People's Democratic Republic</option>
										<option value="LVA">Latvia</option>
										<option value="LBN">Lebanon</option>
										<option value="LSO">Lesotho</option>
										<option value="LBR">Liberia</option>
										<option value="LBY">Libya</option>
										<option value="LIE">Liechtenstein</option>
										<option value="LTU">Lithuania</option>
										<option value="LUX">Luxembourg</option>
										<option value="MAC">Macao</option>
										<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
										<option value="MDG">Madagascar</option>
										<option value="MWI">Malawi</option>
										<option value="MYS">Malaysia</option>
										<option value="MDV">Maldives</option>
										<option value="MLI">Mali</option>
										<option value="MLT">Malta</option>
										<option value="MHL">Marshall Islands</option>
										<option value="MTQ">Martinique</option>
										<option value="MRT">Mauritania</option>
										<option value="MUS">Mauritius</option>
										<option value="MYT">Mayotte</option>
										<option value="MEX">Mexico</option>
										<option value="FSM">Micronesia, Federated States of</option>
										<option value="MDA">Moldova, Republic of</option>
										<option value="MCO">Monaco</option>
										<option value="MNG">Mongolia</option>
										<option value="MNE">Montenegro</option>
										<option value="MSR">Montserrat</option>
										<option value="MAR">Morocco</option>
										<option value="MOZ">Mozambique</option>
										<option value="MMR">Myanmar</option>
										<option value="NAM">Namibia</option>
										<option value="NRU">Nauru</option>
										<option value="NPL">Nepal</option>
										<option value="NLD">Netherlands</option>
										<option value="NCL">New Caledonia</option>
										<option value="NZL">New Zealand</option>
										<option value="NIC">Nicaragua</option>
										<option value="NER">Niger</option>
										<option value="NGA">Nigeria</option>
										<option value="NIU">Niue</option>
										<option value="NFK">Norfolk Island</option>
										<option value="MNP">Northern Mariana Islands</option>
										<option value="NOR">Norway</option>
										<option value="OMN">Oman</option>
										<option value="PAK">Pakistan</option>
										<option value="PLW">Palau</option>
										<option value="PSE">Palestinian Territory, Occupied</option>
										<option value="PAN">Panama</option>
										<option value="PNG">Papua New Guinea</option>
										<option value="PRY">Paraguay</option>
										<option value="PER">Peru</option>
										<option value="PHL">Philippines</option>
										<option value="PCN">Pitcairn</option>
										<option value="POL">Poland</option>
										<option value="PRT">Portugal</option>
										<option value="PRI">Puerto Rico</option>
										<option value="QAT">Qatar</option>
										<option value="REU">Réunion</option>
										<option value="ROU">Romania</option>
										<option value="RUS">Russian Federation</option>
										<option value="RWA">Rwanda</option>
										<option value="BLM">Saint Barthélemy</option>
										<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
										<option value="KNA">Saint Kitts and Nevis</option>
										<option value="LCA">Saint Lucia</option>
										<option value="MAF">Saint Martin (French part)</option>
										<option value="SPM">Saint Pierre and Miquelon</option>
										<option value="VCT">Saint Vincent and the Grenadines</option>
										<option value="WSM">Samoa</option>
										<option value="SMR">San Marino</option>
										<option value="STP">Sao Tome and Principe</option>
										<option value="SAU">Saudi Arabia</option>
										<option value="SEN">Senegal</option>
										<option value="SRB">Serbia</option>
										<option value="SYC">Seychelles</option>
										<option value="SLE">Sierra Leone</option>
										<option value="SGP">Singapore</option>
										<option value="SXM">Sint Maarten (Dutch part)</option>
										<option value="SVK">Slovakia</option>
										<option value="SVN">Slovenia</option>
										<option value="SLB">Solomon Islands</option>
										<option value="SOM">Somalia</option>
										<option value="ZAF">South Africa</option>
										<option value="SGS">South Georgia and the South Sandwich Islands</option>
										<option value="SSD">South Sudan</option>
										<option value="ESP">Spain</option>
										<option value="LKA">Sri Lanka</option>
										<option value="SDN">Sudan</option>
										<option value="SUR">Suriname</option>
										<option value="SJM">Svalbard and Jan Mayen</option>
										<option value="SWZ">Swaziland</option>
										<option value="SWE">Sweden</option>
										<option value="CHE">Switzerland</option>
										<option value="SYR">Syrian Arab Republic</option>
										<option value="TWN">Taiwan, Province of China</option>
										<option value="TJK">Tajikistan</option>
										<option value="TZA">Tanzania, United Republic of</option>
										<option value="THA">Thailand</option>
										<option value="TLS">Timor-Leste</option>
										<option value="TGO">Togo</option>
										<option value="TKL">Tokelau</option>
										<option value="TON">Tonga</option>
										<option value="TTO">Trinidad and Tobago</option>
										<option value="TUN">Tunisia</option>
										<option value="TUR">Turkey</option>
										<option value="TKM">Turkmenistan</option>
										<option value="TCA">Turks and Caicos Islands</option>
										<option value="TUV">Tuvalu</option>
										<option value="UGA">Uganda</option>
										<option value="UKR">Ukraine</option>
										<option value="ARE">United Arab Emirates</option>
										<option value="GBR">United Kingdom</option>
										<option value="USA">United States</option>
										<option value="UMI">United States Minor Outlying Islands</option>
										<option value="URY">Uruguay</option>
										<option value="UZB">Uzbekistan</option>
										<option value="VUT">Vanuatu</option>
										<option value="VEN">Venezuela, Bolivarian Republic of</option>
										<option value="VNM">Viet Nam</option>
										<option value="VGB">Virgin Islands, British</option>
										<option value="VIR">Virgin Islands, U.S.</option>
										<option value="WLF">Wallis and Futuna</option>
										<option value="ESH">Western Sahara</option>
										<option value="YEM">Yemen</option>
										<option value="ZMB">Zambia</option>
										<option value="ZWE">Zimbabwe</option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="right" >Customer City:</td>
								<td><input type="text" name="c_city" required></td>
							</tr>

							<tr>
								<td align="right" >Customer Contact:</td>
								<td><input type="text" name="c_contact" required></td>
							</tr>     

							<tr>
								<td align="right" >Customer Address:</td>
								<td><input type="text" name="c_address" required></td>
							</tr>  

							<tr align="center">
								<td colspan="6"><input type="submit" name="register" value="Create Account"></td>
							</tr>
							
						</table>

					</form>
	
				</div>



			</div>	
			<!--Content wrapper ends here-->

			<div id="footer">
	
				<h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Collect Your Name</h2>

			</div>

		</div>
		<!--Main Container ends here-->
		
	</body>
</html>		



<?php 

	if (isset($_POST['register'])) {

		/***************************************************

		            LOCAL VARIABLE DECLARATION

		 **************************************************/           
		
		// getting ip
		$ip = getIp();

		// saving data from the form field into the variable
		$c_name = $_POST['c_name'];

		// saving data from the form field into the variable
		$c_email = $_POST['c_email'];

		// saving data from the form field into the variable
		$c_pass = $_POST['c_pass'];

		// saving data from the form field into the variable
		$c_image = $_FILES['c_image'];					 		//
														 		// image saving structure
		$c_image_tmp = $_FILES['c_image']['tmp_name'];   		// 
 
		// saving data from the form field into the variable
		$c_country = $_POST['c_country'];

		// saving data from the form field into the variable
		$c_city = $_POST['c_city'];

		// saving data from the form field into the variable
		$c_contact = $_POST['c_contact'];

		// saving data from the form field into the variable
		$c_address = $_POST['c_address'];




		/***************************************************

		           INSERTING DATA INTO DATABASE

		 **************************************************/   



		// inserting picture in the folder
		//                 $temp name img , "destination of where it'll be saved"               
		move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image"); 

		// inserting text data into database
		$insert_c = "insert into customers
		(customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image)
		 values('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";    

		 // connecting to the database and inserting data
		$run_c = mysqli_query($con, $insert_c);

		$sel_cart = "select * from cart where ip_add='$ip'";

		$run_cart = mysqli_query($con, $sel_cart);

		$check_cart = mysqli_num_rows($run_cart);

		if ($check_cart == 0) {

			$_SESSION['customer_email']=$c_email;

			echo "<script>alert('Account has been created successfully, Thanks!')</script>";

			echo "<script>window.open('customer/my_account.php','_self')</script>";
		}else{

			$_SESSION['customer_email']=$c_email;

			echo "<script>alert('Account has been created successfully, Thanks!')</script>";

			echo "<script>window.open('checkout.php','_self')</script>";

		}



	}

 ?>

























