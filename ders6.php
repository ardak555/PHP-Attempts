<?php
try {
    if (@mysqli_connect("localhost", "root", ""))
        echo "Veritabanına bağlandı...";
    else
        throw new Exception("Veritabanı Sunucusuna Bağlanılamadı");
}
catch (Exception $e){
    echo $e->getMessage();
}
echo"<br/><br/>";

class BaglantiHatasi extends Exception{}
class VeritabanıHatasi extends Exception{}

