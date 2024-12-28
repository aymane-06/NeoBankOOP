<?php
include_once("../repository/editeAccount.php");
include_once("../model/BusinessAccount.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
echo json_encode(EditeAccount::GeteditAccount("businessaccount",$id));
}
if(isset($_POST["save"])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $balance=$_POST['balance'];
    $CriLi=$_POST['CriLi'];
    $TranFee=$_POST['TranFee'];


    $acc=new BusinessAccount($name,$balance,$email,$CriLi,$TranFee);

    EditeAccount::editAccount($acc,$id);

    header("location:../showBuisnesAccount.php");

}
?>