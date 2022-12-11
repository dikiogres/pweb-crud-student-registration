<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMAN 1 Coding</title>
</head>

<body>
    <header>
        <h3>New Student Registration Form</h3>
    </header>

    <form action="registration-process.php" method="POST">

        <fieldset>

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Full Name" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </p>
        <p>
            <label for="religion">Religion: </label>
            <select name="religion">
                <option>Islam</option>
                <option>Christian</option>
                <option>Hindu</option>
                <option>Buddhist</option>
                <option>Atheist</option>
            </select>
        </p>
        <p>
            <label for="school_origin">School Origin: </label>
            <input type="text" name="school_origin" placeholder="school name" />
        </p>
        <p>
            <input type="submit" value="Register" name="register" />
        </p>

        </fieldset>

    </form>

    </body>
</html>