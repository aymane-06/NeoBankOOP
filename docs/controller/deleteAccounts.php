<?php
include_once("../repository/deleteAccount.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    DeleteAccount::DeleteAccount($id);
    
}


?>