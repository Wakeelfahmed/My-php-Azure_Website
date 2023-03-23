<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Confirmation</title>
</head>
<body>
    <h1>Contact Us - Confirmation</h1>
    <p>Thank you for your message, <?php echo $_POST['name']; ?>!</p>
    <p>We have received your message and will respond to you at <?php echo $_POST['email']; 
    $email = $_POST['email'];
    $password = $_POST['txtpassword'];
    if($email == 'wakeelfahmed@gmail.com'){
        echo "<script>alert('email exists') </script>";
        session_start();
        $_SESSION['sid'] = session_id();
        header("Location:loginCheck.php");
    }
    else{
        echo "<script>alert('Email or password is incorrect!') </script>";
    }
    ?> as soon as possible.</p>
</body>
</html>