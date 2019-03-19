<html>
<head>
<title>.:: Program Menghitung Discount ::.</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>
<body>
<font face=verdana size=2>
<form action=latdiscont.php method=post>Jumlah Bayar
<input class=uang type=text name=totalbeli><br><br>
<input type=submit value="Hitung Diskon" name=tuku>
</form>

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


</body>
<script type="text/javascript">
$(document).ready(function(){
// Format mata uang.
$( '.uang' ).mask('#.##0', {reverse: true});

})
</script>
</html>