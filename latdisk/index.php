<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Diskon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100" style="background-image: url('images/th1.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="index.php" method="post">
				<span class="contact100-form-title">
					Latihan Kalkulator Discont
				</span>

				<!-- <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Tell us your name *</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
				</div> -->

				<!-- <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Enter your email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email">
				</div> -->

				<div class="wrap-input100">
					<span class="label-input100">Jumlah Bayar</span>
					<input class="input100 uang" type="text" name="totalbeli" placeholder="Masukan Nominal Belanja anda RP.-">
					<?php
					if(!empty($_POST['tuku'])){
					$totalbeli = $_POST['totalbeli'];
					$totalbeli = str_replace(".", "", $totalbeli);


					if (isset($totalbeli)){

					$toyar=intval($totalbeli);
					$diskon=0;

					if ($toyar>=500000){
					$diskon=(0.5*$toyar);
					} 
					else if ($toyar>=100000) {
					$diskon=(0.1*$toyar);
					}else if ($toyar>=50000) {
					$diskon=(0.05*$toyar);
					} else {
					print("Maaf Tidak Ada Diskon <br>\n");
					}



					{
					//printf("Jumlah Bayar = %d<br>\n",$toyar);
					echo "Jumlah Bayar = Rp ";
					echo number_format($toyar,2,",",".");
					echo "<br>";

					//printf("Diskon = %d<br>\n",$diskon);

					echo "Diskon = Rp ";
					echo number_format($diskon,2,",",".");
					echo "<br>";

					$totalbayar=$toyar-$diskon;
					//printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);

					echo "<b>Total Bayar = </b> Rp ";
					echo number_format($totalbayar,2,",",".");
					echo "<br>";

					echo "<b>Total Bayar = </b> Rp ";
					echo number_format($totalbayar,2,",",".");
					}

					}

					}
					?>

				</div>


				
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<!-- <span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->

				</div>
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type=submit value="Hitung Diskon" name=tuku>
							Hitung Diskon
						</button>

					</div>
				</div>


					
		</div>

		<!-- <span class="contact100-more">
				Call us on +001 345 6178
		</span> -->
	
	</div>

</form>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<!-- 	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!- ===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!-- =============================================================================================== -->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
<script src="jquery.min.js"></script>
<script src="jquery.mask.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

<script type="text/javascript">
$(document).ready(function(){
// Format mata uang.
$( '.uang' ).mask('#.##0', {reverse: true});

})
</script>

</body>

</html>
