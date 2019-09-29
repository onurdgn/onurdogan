<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$e_fiyat=2;
$a_fiyat=2.5;
$m_fiyat=3;
$h_fiyat=5;
$p_fiyat=2.5;

$e_kg=3.2;
$a_kg=2;
$m_kg=1;
$h_kg=3;
$p_kg=5;

$s1=2*3.2;
$s2=2*2.5;
$s3=1*3;
$s4=3*5;
$s5=5*2.5;

$tl1="$s1"*7;
$tl2="$s2"*6;
$tl3="$s3"*6;
$tl4="$s4"*7;
$tl5="$s5";

$top="$tl1"+"$tl2"+"$tl3"+"$tl4"+"$tl5";







echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<th>Pazar Sepeti</th>";


echo "</tr>";
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<th width='113px'>Ürün    </th>";
echo "<th width='113px'>Kg/Adet</th>";
echo "<th width='113px'>Kg/Adet Fiyatı</th>";
echo "<th width='113px'>Tutar</th>";
echo "<th width='113px'>Tl cinsinden tutar</th>";
echo "</tr>";



//elma satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='113px'>Elma</td>";
echo "<td width='113px'>$e_kg</td>";
echo "<td width='113px'>$e_fiyat</td>";
echo "<td width='113px'>$s1</td>";
echo "<td width='113px'>$tl1</td>";
echo "</tr>";
echo "</table>";

//echo "armut".$a_kg."  kg".$a_fiyat."  dolar"."  tutar".$s2."  tl'dir'".$tl2."   tldir."."<br>";
//echo "marul".$m_kg."  kg".$m_fiyat."  dolar"."  tutar".$s3."  tl'dir'".$tl3."   tldir."."<br>";
//echo "havuc".$h_kg."  kg".$h_fiyat."  euro"." tutar".$s4."  tl'dir'".$tl4."   tldir."."<br>";
//echo "patates".$p_kg."  kg".$p_fiyat."  tl"." tutar".$s5."  tl'dir'".$tl5."   tldir."."<br>";


//armut satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='113px'>Armut</td>";
echo "<td width='113px'>$a_kg</td>";
echo "<td width='113px'>$a_fiyat</td>";
echo "<td width='113px'>$s2</td>";
echo "<td width='113px'>$tl2</td>";
echo "</tr>";
echo "</table>";

//marul satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='113px'>Marul</td>";
echo "<td width='113px'>$m_kg</td>";
echo "<td width='113px'>$m_fiyat</td>";
echo "<td width='113px'>$s3</td>";
echo "<td width='113px'>$tl3</td>";
echo "</tr>";
echo "</table>";

//havuç satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='113px'>Havuç</td>";
echo "<td width='113px'>$h_kg</td>";
echo "<td width='113px'>$h_fiyat</td>";
echo "<td width='113px'>$s4</td>";
echo "<td width='113px'>$tl4</td>";
echo "</tr>";
echo "</table>";

//patates satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='113px'>Patates</td>";
echo "<td width='113px'>$m_kg</td>";
echo "<td width='113px'>$m_fiyat</td>";
echo "<td width='113px'>$s5</td>";
echo "<td width='113px'>$tl5</td>";
echo "</tr>";
echo "</table>";

//toplam satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td width='470px'>Toplam</td>";
echo "<td>$top</td>";
echo "</tr>";
echo "</table>";

//not satırı
echo "<table border='1' width='600px'>";
echo "<tr>";
echo "<td>Not:1€ = 7tl, 1$ = 6tl olarak hesaplanmıştır.</td>";
echo "</tr>";
echo "</table>";


?>
</body>
</html>