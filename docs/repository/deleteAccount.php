<?php
include_once('../model/Account.php');
include_once('../config/DataBase.php');

class DeleteAccount{
    public static function DeleteAccount($id)  {
        global $pdo;
        $sql="DELETE FROM `customer` WHERE customer_id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            "id"=>$id
        ]);
        
    }
}

?>