<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task Eight</title>
    <link rel="stylesheet" href="src/css/global.css">
    <link rel="stylesheet" href="src/css/table.css">
    <script src="Validation.js"></script>
    <link rel="stylesheet" href="lab8.css">
</head>
<body>
    <header>
        <h1>Javascript Form Validation</h1>

           </header>
    
    <div>
        <form name="Validation" onsubmit="return valName(), valMail(), valGender(), valDOB(), valPass()" method="post">
            <table>
                <tr>
                    <th>First Name</th>
                    <td>
                        <input type="text" name="FirstName">
                    </td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>
                        <input type="text" name="LastName">
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="text" name="Email">
                    </td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" name="gender">Male
                        <input type="radio" name="gender">Female
                        <input type="radio" name="gender">Other
                    </td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>
                        <input type="date" name="DOB">
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        <input type="text" name="password">
                    </td>
                </tr>
                <tr>
                    <th>Confirm Password</th>
                    <td>
                        <input type="text" name="conPassword">
                    </td>
                </tr>
            </table><br>
            <div>
                <input type="submit">
                <input type="reset">
            </div>
        </form>
    </div>
</body>
</html>