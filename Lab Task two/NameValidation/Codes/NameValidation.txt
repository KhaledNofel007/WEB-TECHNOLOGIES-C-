<!DOCTYPE html>
<html lang="en">

<head>

  <title>PHP Form Validation</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $name = $email = $dob = $gender = $degree = $bloodGroup = "";
  $nameError = $emailError = $dobError = $genderError = $degreeError = $bloodGroupError = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameError = "Cannot be empty";
    } else {
      $name = $_POST["name"];
      if (!preg_match("/^[a-zA-Z- ]+$/", $name)) {
        $nameError = "Only letters, dash and periods are allowed";
      } elseif (!preg_match("/(\w+\s\w+)/", $name)) {
        $nameError = "Must be two words long";
      } else {
        if (!preg_match("/^[\pL]/", $name)) {
          $nameError = "Must start with a letter";
        }
      }
    }

    if (empty($_POST["email"])) {
      $emailError = "Cannot be empty";
    } else {
      $email = $_POST["email"];
      if (!preg_match("/(\w+)@(\w+){3,}.com/", $email)) {
        $emailError = "Is not valid";
      }
    }


    if (empty($_POST["dob"])) {
      $dobError = "Cannot be empty";
    } else {

      if (strtotime('1998-12-31') > strtotime($_POST["dob"]) && strtotime('1953-01-01') < strtotime($_POST["dob"])) {
        $dob = $_POST["dob"];
      } else {
        $dobError = "Out of range";
      }
    }

    if (empty($_POST["gender"])) {
      $genderError = "Gender is required";
    } else {
      $gender = $_POST["gender"];
    }


    if (!empty($_POST["degree"])) {

      $degree = $_POST["degree"];
    } else {
      $degreeError = "Cannot be empty";
    }


    if (empty($_POST['list']) && $_POST['list'] == '0') {
      $bloodGroupError = "Select one blood group";
    } else {
      $bloodGroup = $_POST["list"];
    }


    if (!empty($_POST['checkArr'])) {
      $degreeError = "Cannot be empty";
    }
  }
  ?>



  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div>
      <span>Name</span><br>
      <input type="text" name="name" value="<?php echo $name ?>"><br>
      <span class="error"><?php echo $nameError ?></span>
      <br>
    </div>
    <div>
      <Span>Email</Span><br>
      <input type="text" name="email" value="<?php echo $email ?>"><br>
      <span class="error"><?php echo $emailError ?></span><br>
    </div>
    <div>
      <span>Date of Birth</span><br>
      <input type="date" name="dob" value="<?php echo $dob ?>"><br>
      <span class="error"><?php echo $dobError ?></span><br>
    </div>
    <div>
      <Span>Gender</Span><br>
      <input type="radio" name="gender" value="Male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>Male
      <input type="radio" name="gender" value="Female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>Female
      <input type="radio" name="gender" value="Other" <?php if (isset($gender) && $gender == "other") echo "checked"; ?>>Other
      <br>
      <span class="error"><?php echo $genderError ?></span><br>
    </div>
   
    <div> 
    <Span>Degree</Span><br>
      <label>
        <input type="checkbox" name="checkArr[]" value="SSC">
        SSC
      </label>
      <label>

        <input type="checkbox" name="checkArr[]" value="HSC">
        HSC
      </label>
      <label>
        <input type="checkbox" name="checkArr[]" value="BSc">
        BSc
      </label>
      <label>
        <input type="checkbox" name="checkArr[]" value="MSc">
        MSc
      </label>
      <br>
      <span class="error"><?php echo $degreeError ?></span>
      <br>
    </div>

    <div>
    <br>
      <span>Blood Group</span><br>
      <select name="list" onchange="combo(this, bloodGroup)">
        <option value="0">Please Select</option>
        <option>A+</option>
        <option>B+</option>
        <option>AB+</option>
        <option>O+</option>
      </select>
      <span class="error"><?php echo $bloodGroupError ?></span>
    </div>

    <div>
      <br>
      <input type="submit" value="Submit" name="submit">
      </br>
    </div>
  </form>

  <br><br>
  <div class="input">
    <?php
    echo "Name: ", $name;
    echo "<br>";
    echo "Email: ", $email;
    echo "<br>";
    echo "Date of Birth: ", $dob;
    echo "<br>";
    echo "Gender: ", $gender;
    echo "<br>";
    echo "Degree: ";
    if (!empty($_POST['checkArr'])) {
      foreach ($_POST['checkArr'] as $checked) {
        echo $checked . ' ';
      }
    }
    echo "<br>";
    echo "Blood Group: ", $bloodGroup;
    ?>
  </div>
</body>

</html>