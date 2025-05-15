<?php

$username = getenv('USER') ?: getenv('USERNAME');
$userProfile = getenv('USERPROFILE');
$homepath = getenv('HOMEPATH');


echo 'My username is ' . ($username ?: 'not set') . '! <br>';
echo 'My user profile is ' . ($userProfile ?: 'not set') . '! <br>';
echo 'My homepath is ' . ($homepath ?: 'not set') . '! <br>';

?> 