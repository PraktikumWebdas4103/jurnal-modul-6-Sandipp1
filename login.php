<form action=" " method="POST">
 <table>
  <tr>
   <td>Nama : </td>
   <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Nim :</td>
    <td><input type="Password" name="nim"></td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="submit"></td>
   </tr>
  </table>
 </form>
<?php$servername = "localhost";
$username ="root";
$password = "";
$db = "pendaftaran";
$con = new mysqli($servername,$username,$password,$db);

if($con==false){
  die("Connection Failed: ". $con->connect_eror);
}
session_start();
$login=array(
 "nama"=>"",
 "nim" =>""
);
  if(isset($_POST['submit'])){
   $nama = $_POST['nama'];
   $nim = $_POST['nim'];

   if($nama== $nama[""] && $nim==$nim[""]){
    $_session['user']=$user;
    header("location:proses.php");
   }else{
    header("location:login.php");
   }
  }
?>