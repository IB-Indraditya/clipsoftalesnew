<?php
    session_start(); // Start session for user authentication
    // Database connection
    $conn = new mysqli("localhost", "root", "", "clipsoftales");

    // Check connection
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    // Handle login request
    if (isset($_GET['email'], $_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM registration WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the hashed password
            if ($password=== $user['cpassword'] && $user['activation_token']==='activated') {
                // Store user email in session
                $_SESSION['user_email'] = $user['email'];

                // Redirect to writepad.php
                header("Location: dashboard.php");
                exit();
            } else {
                echo "<script>alert('Invalid Credentials');</script>";
            }
        } else {
            echo "<script>alert('User Not Found!');</script>";
        }

        $stmt->close(); // Close the prepared statement
    }

    $conn->close(); // Close the database connection
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                display: flex;
                align-items: flex-start;
                justify-content: center;
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            }
            .main{
                display: flex;
                flex-direction: column;
                height: auto;
                width: 100%;
                max-width: 1600px;
                min-height: 300px;
                box-shadow: 0 0 10px dimgray;
            }
            .con{
                height: auto;
                background: url('https://static.vecteezy.com/system/resources/previews/011/635/825/non_2x/abstract-square-interface-modern-background-concept-fingerprint-digital-scanning-visual-security-system-authentication-login-vector.jpg');
                background-attachment: fixed;
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                direction: ltr;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .con h1{
                font-family: Arial, Helvetica, sans-serif;
                color: white;
                font-size: 50px;
                margin-top: 50px;
                font-weight: light;
            }
            .con #logpg{
                margin-top: 100px;
            }
            .logcon{
                margin: 50px auto;
                margin-bottom: 50px;
                border-radius: 10px;
                padding: 10px;
                width: 80%;
                height: 500px;
                background-color: rgba(0, 0, 0, .5);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            input{
                padding: 10px;
                width: 90%;
                font-size: 20px;
                margin: 20px auto;
                border-radius: 5px;
                background: rgba(255, 255, 255, .85);
                border: none;
                box-shadow: 0 0 10px white;
            }
            input[type='submit']{
                background-color: white;
                box-shadow: none;
                width: 95%;
            }
            input[type='submit']:hover{
                background-color: lightskyblue;
                color: white;
                cursor: url('gpointer.png'), pointer !important;
            }
            input:focus{
                outline: none;
                background: white;
            }
            form{
              display: flex;
              align-items: center;
              justify-content: center;
              flex-direction: column;
            }
            .logcon img{
                margin: 0 auto;
                width: 40%;
                border-radius: 50%;
                box-shadow: 0 0 10px white;
                margin-bottom: 20px;
            }
            .new2b{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                color: white;
                margin-bottom: 0px;
                font-style: normal;
            }
            .new2b a{
                text-decoration: none;
                color: yellow;
                cursor: url('gpointer.png');
            }
            .new2b a:hover{
                color: lightgreen;
            }
            .footersec{
                box-shadow: 0 0 500px .5px rgba(3, 3, 135, 0.6) !important;
                background: rgba(0, 0, 20, .5) !important;
            }
            @media (min-width: 1900px){
                .con{
                    height: 100vh;
                }
            }
            @media (max-width: 700px){
                .logcon{
                    transform: scale(.85);
                    margin: 10px;
                    padding: 5px;
                }
                input{
                    width: 95%;
                }
                input[type='submit']{
                    width: 100%;

                }
                .falsestyle{
                    display: block !important;
                }
            }
            @media (max-width: 500px){
                .logcon{
                    transform: scale(.8);
                    margin: 10px;
                }
            }
            @media (max-width: 400px){
                .logcon{
                    width: 100%;
                    height: auto;
                    transform: scale(.8);
                    margin: 10px;
                    padding: 20px;
                }
            }
        </style>
    </head>
    <body>
        <section class="main"  id="gotop">
            <?php include 'header.php' ?>
            <section class="con">
            <div id='logpg'>&nbsp</div>
                <h1 class="reghd">&nbsp</h1>
                <section class="logcon">
                    <form action="" method='GET'>
                        <img src="https://png.pngtree.com/png-vector/20220609/ourmid/pngtree-person-gray-photo-placeholder-man-in-t-shirt-on-gray-background-png-image_4844908.png" alt="">
                        <p class="imgl"></p>
                        <input type="email" name='email' placeholder="Email Id" required>
                        <input type="password" name='password' placeholder="Password" required>
                        <input type="submit" value="Log In">
                    </form>
                    <p class="new2b">No account yet? &nbsp<a href="signup.php#signpg">Create Account</a></p>
                </section>
                
            </section>
            <?php include 'footer.php' ?>
        </section>
        <script>
            // document.querySelector('.acc').addEventListener('click', ()=>{
            //     document.querySelector('.dconi').classList.toggle('dshow');
            // });
            const newURL = window.location.protocol + "//" + window.location.host + "/php_files/clipsoftales/login.php#logpg";
            window.history.pushState({ path: newURL }, '', newURL);
        </script>
    </body>
</html>


