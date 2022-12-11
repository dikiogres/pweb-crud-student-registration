<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMAN 1 Coding</title>
</head>

<body>
    <header>
        <h3>Registered Student</h3>
    </header>

    <nav>
        <a href="registration-form.php">[+] Add New</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>School Origin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM prospective_student";
        $query = mysqli_query($db, $sql);

        while($student = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$student['id']."</td>";
            echo "<td>".$student['name']."</td>";
            echo "<td>".$student['address']."</td>";
            echo "<td>".$student['gender']."</td>";
            echo "<td>".$student['religion']."</td>";
            echo "<td>".$student['school_origin']."</td>";

            echo "<td>";
            echo "<a href='edit-form.php?id=".$student['id']."'>Edit</a> | ";
            //echo "<a href='hapus.php?id=".$student['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>