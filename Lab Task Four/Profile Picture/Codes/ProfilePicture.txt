<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profile Picture</title>

</head>

<body>
    <div>
        <span>
            <h1>RUH Fragrance</h1>
            <span>Logged in as</span> <span><a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/dashboard.php">User</a></span>
    </div>
    <div>
        <form method="POST">
            <div class="sidePanel">
                <ul>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/viewProfile.php">View Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/editProfile.php">Edit Profile</a>
                    </li><br>
                    <li>
                        <a href="">Change Profile Picture</a>
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
            <h3>PROFILE PICTURE</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="profileImg">
                    <img src="" alt="">
                </div><br><br>
                <div class="changeProfilePic">
                    <input type="file" name="file" />
                </div>
                </br>
                <div class="changeProfilePic">
                    <input type="submit" name="submit" value="Submit" />
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