<!DOCTYPE html>
<html>
<head>
    <style>
    body {
        font-family: Arial;
        background-color: #f2f2f2;
    }

    form {
        width: 350px;
        margin: 50px auto;
        padding: 25px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px gray;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    input[type="reset"],
    input[type="submit"] {
        padding: 8px 15px;
        margin-top: 15px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"] {
        background-color: green;
        color: white;
    }

    input[type="reset"] {
        background-color: gray;
        color: white;
    }
</style>
    <title>Register Form</title>
</head>

<body>

<form method="post">

    <label>Enter Full Name</label><br>
    <input type="text" name="fullname">

    <br><br>

    <label>Enter Password</label><br>
    <input type="password" name="password">

    <br><br>

    <input type="radio" name="sex" value="male"> Male 
    <input type="radio" name="sex" value="female"> Female <br>

    <br><br>

    <input type="checkbox" name="faculties[]" value="engineering"> Engineering 
    <input type="checkbox" name="faculties[]" value="medicine"> Medicine
    <input type="checkbox" name="faculties[]" value="computer science"> Computer Science <br>
    <br><br>

    <input type="reset" value="reset form">
    <input type="submit" value="Register"><br>

</form>

<?php


if (!empty($_POST['fullname']))
    echo "User name: " . $_POST['fullname'];

if (!empty($_POST['password']))
    echo "<br>Password: " . $_POST['password'];

if (!empty($_POST['sex']))
    echo "<br>Sex: " . $_POST['sex'];

if (!empty($_POST['faculties']))
{
    foreach ($_POST['faculties'] as $faculty)
    {
        echo "<br>Faculty: " . $faculty;
    }
}



?>

</body>
</html>