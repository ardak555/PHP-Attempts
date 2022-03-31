<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Formdan Veri Alma</title>
</head>
<body>
<form id="form1" name="form1" method="POST" action="ders15.php"> <!--Get ile dene-->
    <table width="400" border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td colspan="2"><center>Üyelik Formu</center></td>
        </tr>
        <tr>
            <td width="110">Adınız Soyadınız:</td>
            <td width="276">
                <input type="text" name="adisoyadi" size="35"/>
            </td>
        </tr>
        <tr>
            <td>Kullanıcı Adı</td>
            <td>
                <input type="text" name="kullaniciadi" size35>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Şifre</td>
            <td>
                <input type="password" name="sifre" size35>
            </td>
        </tr>
        <tr>
            <td>Email Adresi</td>
            <td>
                <input type="email" name="email" size="35"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <center> <input type="submit" name="button" value="Üye Ol"  >
               </center></td>
        </tr>
    </table>

</form>
</body>
</html>
<?php
echo "Adınız Soyadınız: ".$_POST["adisoyadi"]."<br/>"; //GET ile de dene
echo "Kullanıcı Adı: ".$_POST["kullaniciadi"]."<br/>"; //GET ile de dene
echo "Şifre: ".$_POST["sifre"]."<br/>";					//GET ile de dene
echo "Email: ".$_POST["email"]."<br/>";					//GET ile de dene
// echo "Buton: ".$_GET["button"]."<br/>";
