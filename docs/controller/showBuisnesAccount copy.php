<?php
include_once '../model/AccountManager.php' ;

    echo json_encode(AccountManager::select('businessaccount')); 


