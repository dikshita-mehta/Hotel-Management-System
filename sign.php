<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            #h4{
                color: black; 
                t-family: 'Times New Roman';
                Times, serif; 
                font-weight: bold; 
                text-align: center;
            }
            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h4 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h4>
        <div style="position: absolute; top: 30px; left: 20px; width: 100px;">
            <a href="login.php"><i class="material-icons" style="font-size: 40px; color: black;">home</i></a>
        </div>
        <div class="bg-text" style="align-items: center;">
            <form action="" method="POST">
                <h4>Username: <input type="text" placeholder="Username" name="uname"></h4>
                <h4>Name: <input type="text" placeholder="name" name="name"></h4>
                <h4>Email: <input type="email" placeholder="Email" name="mail"></h4>
                <h4>Password: <input type="password" placeholder="Password" name="passw"></h4>
                <h4>Re enter Password: <input type="password" placeholder="Password" name="repassw"></h4>
                <input type="submit" value="Sign up">
            </form>
        </div>
    </body>
    <?php
        include_once('connection.php');
        
        function test_input($data) {
            
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if ($_SERVER["REQUEST_METHOD"]== "POST") 
        {
            $username = test_input($_POST["uname"]);
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["mail"]);
            $password = test_input($_POST["passw"]);
            $repass = test_input($_POST["repassw"]);
            $stmt = $conn->prepare("SELECT * FROM userlogin");
            $stmt->execute();
            $users = $stmt->fetchAll();
            
            $var = 1;

            foreach ($users as $user) 
            {
                if($user['username'] == $username)
                $var *= 0;
            }
            if ($var != 0) 
            {
                if ($password == $repass) 
                {
                    $sql = "INSERT INTO userlogin VALUES ($username,$name,$email,$password)";
                    $conn->exec($sql);
                }
                else
                {
                    echo "<script language='javascript'>";
                    echo "alert('Password not matching')";
                    echo "</script>";
                    die();
                }
            }
            else
            {
                echo "<script language='javascript'>";
                echo "alert('Username already exists')";
                echo "</script>";
                die();
            }  
        }

        ?>
</html>