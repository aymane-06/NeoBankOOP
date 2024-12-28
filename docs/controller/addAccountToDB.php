<?php
// include_once('../index.php');
include_once('../model/AccountManager.php');
include_once('../model/BusinessAccount.php');
include_once('../model/CurrentAccount.php');
include_once('../model/SavingsAccount.php');

if(isset($_POST['submit'])){
    $AccName=$_POST['accountHolder'];
    $email=$_POST['email'];
    $initialBalance=$_POST['initialBalance'];
    $accountType=$_POST['accountType'];
    if($accountType=='CurrentAccount'){
        $overdraft_limit=$_POST['overdraft_limit'];
        $monthlyFee=$_POST['monthlyFee'];
        $acc=new CurrentAccount($AccName,$initialBalance,$email,$overdraft_limit,$monthlyFee);
        AccountManager::insert($acc);
    }
    else if($accountType=='SavingsAccount'){
        $interest_rate=$_POST['interest_rate'];
        $minimum_balance=$_POST['minimum_balance'];
        $acc=new SavingsAccount($AccName,$initialBalance,$email,$interest_rate,$minimum_balance);
        AccountManager::insert($acc);
    }
    else if($accountType=='BusinessAccount'){
        $credit_limit=$_POST['credit_limit'];
        $transaction_fee=$_POST['transaction_fee'];
        $acc=new BusinessAccount($AccName,$initialBalance,$email,$credit_limit,$transaction_fee);
        AccountManager::insert($acc);
    }
    header('Location:../index.php');

}
