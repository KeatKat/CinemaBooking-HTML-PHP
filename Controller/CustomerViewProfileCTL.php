<?php

include_once "Entity/UserAccount.php";

class CustomerViewProfileCTL
{
    public function viewProfile($username)
    {
        $userAccount = new UserAccount();
        $result = $userAccount->getProfile($username);
        return $result;
    }
}
