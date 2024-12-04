<?php
$success = false;

if (isset($_POST['name'])) {
    $session = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($session, $username, $password,'trip');
    if (!$con) {
        die("Connection to database failed due to " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    ;
    $gender = $_POST['gender'];
    ;
    $phone = $_POST['phone'];
    ;
    $course = $_POST['course'];
    ;
    $branch = $_POST['branch'];
    ;

    $sql = "INSERT INTO `trip` (`name`, `age`, `phone`, `gender`, `course`, `branch`, `date`)" .
        "VALUES ('$name', '$age', '$phone', '$gender', '$course', '$branch', current_timestamp());";

    if ($con->query($sql) == true) {
        $success = true;
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="parent">
        <div class="logo"></div>
        <div class="container">
        <?php if ($success): ?>
            <p style="text-align: center; display: block; margin: 50px auto; color: rgb(30, 81, 30); font-size: 20px;">Thanks for submitting your form. We are happy to see you joining us for the trip.</p>
            <?php else: ?>
            <form action="index.php" method="post">
                <h1>Welcome to Trip form</h1>
                <p>Enter your details to confirm participation in the trip</p>
                <table border="2">
                    <tr>
                        <td>
                            <label for="name">Name: </label>
                        </td>
                        <td>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="name">Age: </label>
                        </td>
                        <td>
                            <input type="number" name="age" id="age" placeholder="Enter your age" value="18" required>
                        </td>
    
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Phone Number: </label>
                        </td>
                        <td>
                            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number"
                                maxlength="10" required>
                        </td>
    
                    </tr>
                    <tr>
                        <td>
                            <label for="gender">Gender: </label>
                        </td>
                        <td>
                            <input type="radio" name="gender" id="male" value="Male" required>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="Femal" required>
                            <label for="female">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="course">Course: </label>
                            </td>
                            <td>
                                <input type="radio" name="course" id="btech" value="B.Tech">
                                <label for="btech">B.Tech</label>
                                <input type="radio" name="course" id="bba" value="BBA">
                                <label for="bba">BBA</label>
                            </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="branch">Branch: </label>
                            </td>
                            <td>
                                <select name="branch">
                                    <option>CSE</option>
                                    <option selected>IT</option>
                                    <option>ECE</option>
                                    <option>ECE (IoT)</option>
                                    <option>EE</option>
                                    <option>ME</option>
                                    <option>CE</option>
                                    <option>ChE</option>
                                    <option>Not Applicable</option>
                                </select>
                            </td>
                    </tr>
    
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit">
                        </td>
                    </tr>
                </table>
    
            </form>
            <?php endif; ?>
        </div>
    </div>
    
    
    <script src="script.js"></script>
</body>

</html>