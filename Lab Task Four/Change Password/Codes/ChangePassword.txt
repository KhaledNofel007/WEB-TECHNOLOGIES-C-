<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
</head>

<body>
    <div>
        <span>
            <h1>RUH Fragrance</h1>
            <span>Logged in as</span> <span><a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/dashboard.php">User</a></span>
    </div>
    <div>
        <form method="POST">
            <div class="sidepanel">
                <ul>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/viewProfile.php">View Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/editProfile.php">Edit Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changeProfilePicture.php">Change Profile Picture</a>
                    </li><br>
                    <li>
                        <a href="">Change Password</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/homepage.html">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
        <div class="accView">
            <h3>CHANGE PASSWORD</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="changePasswordView">
                    <span>Current Password</span>
                    <input type="password" name="currentpassword">
                </div>
                <div class="changePasswordView" style="color: black">
                    <span>New Password</span>
                    <input type="password" name="newpassword">
                </div>
                <div class="changePasswordView" style="color: black">
                    <span>Retype New Password</span>
                    <input type="password" name="confirmpassword">
                </div><br><br>
                <div class="changePasswordView" style="text-align: left"> <input type="submit" name="Submit" value="Submit"></div>
            </form>
        </div>
    </div>
    <div style="text-align: center;">
        </br>
        </br>
        </br>
        </br>
        <p>Copyright &copy; 2017</p>
    </div>
</body>

</html>