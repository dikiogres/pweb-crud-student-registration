<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: student.list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM prospective_student WHERE id=$id";
$query = mysqli_query($db, $sql);
$student = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data not found...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Form | SMAN 1 Coding</title>
</head>

<body>
    <header>
        <h3>Edit Student Form</h3>
    </header>

    <form action="edit-process.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $student['id'] ?>" />

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="name lengkap" value="<?php echo $student['name'] ?>" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"><?php echo $student['address'] ?></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <?php $jk = $student['gender']; ?>
            <label><input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? "checked": "" ?>> Male</label>
            <label><input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? "checked": "" ?>> Female</label>
        </p>
        <p>
            <label for="religion">Religion: </label>
            <?php $religion = $student['religion']; ?>
            <select name="religion">
                <option <?php echo ($religion == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($religion == 'Christian') ? "selected": "" ?>>Christian</option>
                <option <?php echo ($religion == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($religion == 'Buddhist') ? "selected": "" ?>>Buddhist</option>
                <option <?php echo ($religion == 'Atheist') ? "selected": "" ?>>Atheist</option>
            </select>
        </p>
        <p>
            <label for="school_origin">School Origin: </label>
            <input type="text" name="school_origin" placeholder="school name" value="<?php echo $student['school_origin'] ?>" />
        </p>
        <p>
            <input type="submit" value="Save" name="save" />
        </p>

        </fieldset>


    </form>

    </body>
</html>