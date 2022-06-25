<?php
$message = $error = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error = "<label class='text-danger'>Enter Name</label>";
    } else if (empty($_POST["email"])) {
        $error = "<label class='text-danger'>Enter an e-mail</label>";
    } else if (empty($_POST["username"])) {
        $error = "<label class='text-danger'>Enter a username</label>";
    } else if (empty($_POST["password"])) {
        $error = "<label class='text-danger'>Enter a password</label>";
    } else if (empty($_POST["rePassword"])) {
        $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";
    } else if (empty($_POST["gender"])) {
        $error = "<label class='text-danger'>Gender cannot be empty</label>";
    } else {
        if (file_exists('data.json')) {
            $current_data = file_get_contents('data.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                "name"               =>     $_POST['name'],
                "email"          =>     $_POST["email"],
                "username"     =>     $_POST["username"],
                "gender"     =>     $_POST["gender"],
                "dob"     =>     $_POST["dob"]
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if (file_put_contents('data.json', $final_data)) {
                $message = "<label class='text-success'>File Appended Success fully</p>";
            }
        } else {
            $error = 'JSON File does not exist';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Registration</title>

</head>

<body>

    <div>
        <span>
            <h1>RUH Fragrance</h1>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp;<span><a href="http://localhost/LabTask/Lab%20Task%204/Homepage/homepage.html">Home</a></span>
            &nbsp; &nbsp;<span><a href="http://localhost/LabTask/Lab%20Task%204/Homepage/login.php">Login</a></span>
            &nbsp; &nbsp;<span><a href="">Registration</a></span>
        </span>
    </div>


    <div>
        <h3>REGISTRATION</h3>
        <form method="POST">
            <div class="regPage">
                <span>Name</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="name" class="alpha">
            </div>
            </br>
            <div class="regPage">
                <span>Email</span>
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" class="alpha">
            </div>
            <div class="regPage">
                </br>
                <span>User Name</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="username" class="alpha">
            </div>
            </br>
            <div class="regPage">
                <span>Password</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="password" class="alpha">
            </div>
            </br>
            <div class="regPage">

                <span>Confirm Password</span>
                &nbsp;
                <input type="text" name="rePassword" class="alpha">
            </div>
            <div class="regPage">
                </br>
                <Span>Gender</Span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
            </div>
            <div class="regPage">
                </br>
                <span>Date of Birth</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="dob">
            </div>
            </br>
            </br>

            <div class="regPage">
                <input type="submit" name="submit"> &nbsp;&nbsp; &nbsp;&nbsp; <input type="reset" name="reset">

            </div>

        </form>
    </div>
    <div style="text-align: center;">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>


        <p>Copyright &copy; 2017</p>
    </div>
</body>

</html>