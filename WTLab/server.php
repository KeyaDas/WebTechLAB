<?php
    session_start();
    $flname = "";
    $email    = "";
    $errors   = array();

    $db = mysqli_connect('localhost', 'root', '', 'test');

    if(isset($_POST['submit'])){

        $flname = mysqli_real_escape_string($db, $_POST['flname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $degree = mysqli_real_escape_string($db, $_POST['degree']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $cont = mysqli_real_escape_string($db, $_POST['cont']);
        $dob = mysqli_real_escape_string($db, $_POST['dob']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        if(empty($flname)) { 
            array_push($errors, "Full Name is required"); 
        }
        if(empty($email)) {
            array_push($errors, "Enter a valid email");
        }
        if (empty($dob)) {
            array_push($errors, "Enter a date");
        }
        if (empty($gender)) {
            array_push($errors, "Selecting gender is required");
        }
        if (empty($cont) || !preg_match("/^[0-9]{10}$/", $cont)) {
            array_push($errors, "Enter valid contact number");
        }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        $check = "SELECT * FROM students WHERE flname='$flname' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $check);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['flname'] === $flname) {
              array_push($errors, "student is already exists");
            }
        
            if ($user['email'] === $email) {
              array_push($errors, "email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);   //not visible to db

            $query = "INSERT INTO students (flname, email, gender, degree, address, cont, dob, password) 
                    VALUES ('$flname', '$email', '$gender', '$degree', '$address', '$cont', '$dob', '$password')";

            mysqli_query($db, $query);
            $_SESSION['flname'] = $flname;
            $_SESSION['success'] = "You Are Logged in";
            header('location: index.php');
        }

    }


