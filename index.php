<?php

require "users.php";

$users = getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>PHP CRUD APP</title>
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user) : ?>
        <tr>
            <td><?= $user['name']?></td>
            <td><?= $user['username']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['phone']?></td>
            <td><?= $user['website']?></td>
            <td>
                <a href="" class="btn btn-sm btn-outline-info">View</a>
                <a href="" class="btn btn-sm btn-outline-secondary">Update</a>
                <a href="" class="btn btn-sm btn-outline-danger">Delete</a>

            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>