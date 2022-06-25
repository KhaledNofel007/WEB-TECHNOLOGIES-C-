<!DOCTYPE html>
<html lang="en">

<head>

    <title>Edit Profile</title>

</head>

<body>
    <div>
        <span>
            <h1>RUH Fragrance</h1>
            <span>Logged in as</span> <span><a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/dashboard.php">User</a></span>
    </div>
    <div>
        <form method="POST">
            <div>
                <ul>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/viewProfile.php">View Profile</a>
                    </li><br>
                    <li>
                        <a href="">Edit Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changeProfilePicture.php">Change Profile Picture</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changePassword.php">Change Password</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/homepage.html">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
        <div class="accView">
            <h3>EDIT PROFILE</h3>
            <form action="">
                <div>
                    <span>Name</span>
                    &nbsp;&nbsp;<input type="text">
                </div>
                </br>
                <div>
                    <span>Email</span>
                    &nbsp;&nbsp;<input type="text">
                </div>
                </br>
                <div>
                    <span>Gender</span>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other
                </div>
                </br>
                <div>
                    <span>Date of Birth</span>
                    <input type="date">
                </div><br><br>
                <div>
                    <input type="submit" name="submit">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset">
                </div>
            </form>
        </div>
    </div>
    <div style="text-align: center;">
        </br>
        </br>
        </br>
        </br>
        </br>
        <p>Copyright &copy; 2017</p>
    </div>
</body>

</html>