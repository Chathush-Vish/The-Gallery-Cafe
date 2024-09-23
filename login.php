<?php include './includes/config.php'; ?>

<?php
if (isset($_POST["login-btn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isLogged = false;
    $sPassword = null;  

    $query = "SELECT `sEmail`, `sPassword` FROM `staff` WHERE `sEmail` = '$email'";
    $result2 = mysqli_query($con, $query);

    if($result2){
        while($row1 = mysqli_fetch_assoc($result2)){
            $sEmail = $row1['sEmail'];
            $sPassword = $row1['sPassword'];
        }
    }

    if($password == 'admin' && $email == 'admin@gmail.com'){
        $_SESSION['email'] = $email;
        echo "<div class='notify w-100 vh-100 center'>
                <div class='msg-area center column g-2'><p>Log In as Admin</p><button class='ok-btn ' id='admin'>Ok</button></div>
                </div>";
    }
    else if($password == $sPassword && $email == $sEmail){
        $_SESSION['email'] = $email;
        echo "<div class='notify w-100 vh-100 center'>
                <div class='msg-area center column g-2'><p>Log In as Staff Member</p><button class='ok-btn ' id='admin'>Ok</button></div>
                </div>";
    }
    else{
        $sql = "SELECT `email`, `password` FROM `user` WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            if ($password == $row["password"] && $email == $row["email"]) {
                $isLogged = true;
                $_SESSION['email'] = $email;
                
                echo "<div class='notify w-100 vh-100 center'>
                <div class='msg-area center column g-2'><p>Log In Successful</p><button class='ok-btn ' id='home'>Ok</button></div>
                </div>";
            }
        }
        if (!$isLogged) {
            echo "<div class='notify w-100 vh-100 center'>
            <div class='msg-area center column g-2'><p>Email & Password don't match!</p><button class='ok-btn ' id='log'>Ok</button></div>
            </div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Gallery Cafe - Log In</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./login.css" />
    <link rel="stylesheet" href="./style.css" />
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
</head>
<body>
    <div class="login w-100 vh-100 center">
        <form action="login.php" method="POST" class="center column g-2">
            <div class="center column">
                <p>LOG IN</p>
                <small>Log in for more features</small>
            </div>
            <div class="w-100">
                <input type="email" placeholder="Your email" name="email" required />
            </div>
            <div class="w-100">
                <input type="password" placeholder="Password" name="password" required />
            </div>
            <div class="w-100">
                <input type="submit" value="Log In" class="login-btn" name="login-btn" />
            </div>
            <div class="line"></div>
            <div class="w-100">
                <a href="./register.php" class="sign-up">Sign Up</a>
            </div>
        </form>
    </div>
    <script src="./alert.js"></script>
</body>
</html>
