<?php
include_once("Entity/UserProfile.php");

class UserAdminUpdateUserProfileCTL
{
    function retrieveUserProfile()
    {
        $rup = new UserProfile();
        $options = $rup->retrieveUserProfile();
        return $options;
    }
    function editUserProfile($profileName, $profileDescription)
    {
        $p = new UserProfile();
        $results = $p->editUserProfile($profileName, $profileDescription);
        return $results;
    }
}
