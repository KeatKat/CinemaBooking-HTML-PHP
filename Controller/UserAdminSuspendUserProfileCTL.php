<?php
include_once("Entity/UserProfile.php");

class UserAdminSuspendUserProfileCTL
{

    function retrieveUserProfile()
    {
        $rup = new UserProfile();
        $options = $rup->retrieveUserProfile();
        return $options;
    }

    function suspendUserProfile($profileName, $suspend)
    {
        $p = new UserProfile();
        $results = $p->suspendUserProfile($profileName, $suspend);
        return $results;
    }
}
