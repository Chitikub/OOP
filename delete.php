<?php

include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->id = 1;

if ($user->delete()) {
    echo "User deleted successfully.";
} else {
    echo "Failed to delete user.";
}

?>
