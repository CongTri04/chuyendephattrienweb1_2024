<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
    $encoded_id = $_GET['id'];
    $_id = base64_decode($encoded_id);
    $user = $userModel->findUserById($_id); //Update existing user
}

if (!empty($_POST['submit'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $_POST['name'])) {
        $errors[] = "Name must be 5-15 characters long and contain valid characters: A->Z, a->z, 0->9.";
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/", $_POST['password'])) {
        $errors[] = "Password must be 5-10 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character.";
    }

    // If there are no validation errors, proceed with updating or inserting the user
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>

            <!-- Show validation errors if any -->
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        } ?>
                    </ul>
                </div>
            <?php } ?>

            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
