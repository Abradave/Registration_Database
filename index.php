<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php
        require_once "UserTableMethod.php";
        $data = new UserTableMethod();
        $data -> getAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>    
</body>
</html>