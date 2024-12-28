<?php
include_once('../model/Account.php');
include_once('../config/DataBase.php');

class EditeAccount{

    public static function GeteditAccount($tabelNAme,$id ) {
        global $pdo;
        $sql="SELECT * FROM customer JOIN $tabelNAme ON customer.customer_id = businessaccount.customer_id WHERE customer.customer_id = $id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public static function editAccount(Account $acc ,$id) {
        global $pdo;
    $sql="UPDATE customer SET _name=:name , email=:email, balance=:balance WHERE customer_id=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "name"=>$acc->getTitulaireDuCompte(),
        "email"=>$acc->getEmail(),
        "balance"=>$acc->getBalance(),
        "id"=>$id
    ]);
    

    
}



}

?>
