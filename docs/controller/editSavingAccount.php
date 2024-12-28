<?php
include_once("../repository/editeAccount.php");
include_once("../model/SavingsAccount.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
echo json_encode(EditeAccount::GeteditAccount("savingsaccount",$id));
}
if(isset($_POST["save"])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $balance=$_POST['balance'];
    $CriLi=$_POST['CriLi'];
    $TranFee=$_POST['TranFee'];


    $acc=new SavingsAccount($name,$balance,$email,$CriLi,$TranFee);

    EditeAccount::editAccount($acc,$id);

    header("location:../showSavingAccount.php");

}
?>