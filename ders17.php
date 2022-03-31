<?php
echo "Gün türleri <br/>";
echo date("d")."<br/>";
echo date("j")."<br/>";
echo date("D")."<br/>";
echo date("l")."<br/>";
echo date("N")."<br/>";
echo date("w")."<br/>";
echo date("z")."<br/>";
echo "<br/>";
echo "hatfa <br/>";
echo date("W")."<br/>";
echo "<br/>";
echo "Ay <br/>";
echo date("F")."<br/>";
echo date("M")."<br/>";
echo date("m")."<br/>";
echo date("n")."<br/>";
echo "Aydaki Gün Sayısı: ".date("t")."<br/>";

echo "<br/>";
echo "Yıl <br/>";
echo "Artık Yıl mı: ";
if(date("L")=="1")
    echo "Bu yıl artık yıldır<br/>";
else
    echo "Bu yıl artık değildir<br/>";
echo date("Y")."<br/>";
echo date("y")."<br/>";

echo "<br/>";
echo "Zaman <br/>";
echo date("g")."<br/>";
echo date("G")."<br/>";
echo date("h")."<br/>";
echo date("H")."<br/>";
echo date("i")."<br/>";
echo date("s")."<br/>";

$aylar=array(1=>"Ocak",2=>"Şubat",3=>"Mart",4=>"Nisan",5=>"Mayıs",6=>"Haziran",7=>"Temmuz",8=>"Ağustos",
    9=>"Eylül",10=>"Ekim",11=>"Kasım",12=>"Aralık");
echo "Bügünün Tarihi:".date("d")." ".$aylar[date("n")]." ".date("Y")."<br/>";
