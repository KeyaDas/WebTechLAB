<?php include('server.php') ?>
<?php
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Registration</h2>
    </div>    

    <form action="register.php" method="POST">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="flname" value="<?php echo $flname; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Gender</label>
            <select name="gender">
                <option value="male" <?php if (isset($gender) && $gender == 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if (isset($gender) && $gender == 'female') echo 'selected'; ?>>Female</option>
                <option value="others" <?php if (isset($gender) && $gender == 'others') echo 'selected'; ?>>Others</option>
            </select>                
        </div>
        <div class="input-group">
            <label>Degree</label>
            <select name="degree">
            <option value="MSc" <?php if (isset($degree) && $degree == 'MSc') echo 'selected'; ?>>MSc</option>
            <option value="MA" <?php if (isset($degree) && $degree == 'MA') echo 'selected'; ?>>MA</option>
            <option value="MBA" <?php if (isset($degree) && $degree == 'MBA') echo 'selected'; ?>>MBA</option>
        </select>
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <label>Contact</label>
            <input type="number" name="cont" value="<?php echo $cont; ?>">
        </div>
        <div class="input-group">
            <label>D.O.B</label>
            <input type="date" name="dob" value="<?php echo $dob; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
  	    </div>
        <div class="input-group">
  	        <button type="submit" class="btn" name="submit">Register</button>
  	    </div>
        
    </form>

</body>
</html>