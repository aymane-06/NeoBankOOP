<?php
include_once('../model/Account.php');
include_once('../config/DataBase.php');

class EditeAccount{

    public static function GeteditAccount($tabelNAme,$id ) {
        global $pdo;
        $sql="SELECT * FROM customer JOIN $tabelNAme ON customer.customer_id = $tabelNAme.customer_id WHERE customer.customer_id = $id;";
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
    if($acc instanceof BusinessAccount){
    $sql="UPDATE businessaccount SET credit_limit=:credit_limit , transaction_fee=:transactionfee WHERE customer_id=:id;";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
     "credit_limit"=>$acc->getCriditLimite(),
     "transactionfee"=>$acc->getTransactionFee(),
     "id"=>$id
    ]);

}else if($acc instanceof CurrentAccount){
    $sql="UPDATE currentaccount SET overdraft_limit=:overdraft_limit , monthlyFee=:monthlyFee WHERE customer_id=:id;";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
     "overdraft_limit"=>$acc->getOverdraftLimit(),
     "monthlyFee"=>$acc->getMonthlyFee(),
     "id"=>$id
    ]);

    
}else if($acc instanceof SavingsAccount){
    $sql="UPDATE savingsaccount SET interest_rate=:interest_rate , minimum_balance=:minimum_balance WHERE customer_id=:id;";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
     "interest_rate"=>$acc->getInterstRate(),
     "minimum_balance"=>$acc->getMinBalance(),
     "id"=>$id
    ]);

    
}



    }
}

?>
