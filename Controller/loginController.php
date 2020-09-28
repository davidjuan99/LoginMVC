<?php
include '../Model/user.php';
include '../Model/connection.php';

$femail = $_POST{'femail'};
$fpassword = $_POST{'fpassword'};
//echo "El email es: {$femail} y la contraseña es {$fpassword}";
//genero nuevo objeto user
$user = new User($femail, $fpassword);
echo $user->getEmail_user();
echo "<br>";
echo $user->getPasswd_user();
$sql="SELECT * FROM tbl_user where email_user=? and passwd_user=?";
$stmt=$conn->prepare($sql);
$stmt->bindParam(1,$femail);
$stmt->bindParam(2,$fpassword);
$stmt->execute();
$numUser=$stmt->rowCount();//filas afectadas, numero de personas que encuentra.
echo "<br>";
echo $numUser;

if ($numUser == 1) {
    header("Location:../View/home.php");
} else {
    echo "alert('Datos incorrectos')";
    header("Location:../View/vista_login.html");
}
?>