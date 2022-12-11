<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMAN 1 Coding</title>
</head>

<body>
    <header>
        <h3>New Student Registration Form</h3>
        <h1>SMAN 1 Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="registration-form.php">Register New</a></li>
            <li><a href="student-list.php">Registrants</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'success'){
                echo "New student registration successful!";
            } else {
                echo "Registration failed!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>