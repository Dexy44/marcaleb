<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Washy-Washy Transicle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'poppins', sans-serif;
        }

        nav {
            display: flex;
            width: 100%;
            height: 2p;
            align-items: center;
            flex-wrap: wrap;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
        }

        .logo {
            font-size: 33px;
            font-weight: bold;
            margin-left: 5%;
            height: 46px;           
            cursor: pointer;
            color: white;
        }

        nav ul {
            flex: 1;
            text-align: right;
            padding-right: 30px;
            list-style: none;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 40px 30px;
            position: relative;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            position: relative;
            padding-bottom: 5px;
        }

        nav ul li a::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #ffffff;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s;
        }

        nav ul li a:hover::before {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
        
        }

        .social-icons a {
            font-size: 25px;
            margin-bottom: 8px;
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-label {            
            display: inline-block;
            width: 150px;
            font-weight: bold;
            margin-right: 20px; 

        }

        .underline-input {
    position: relative;
}

.underline-input input {
    border: solid #fff;
    border-bottom: 1px solid #fff;
    color: white;
    padding: 5px;
    font-size: 16px;
    width: 80%;
    background-color: transparent; /* Added this line */
}

.underline-input .underline {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
}

        .form-radio {
            vertical-align: middle;
        }

        .form-submit {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 12px;
            background: linear-gradient(45deg, skyblue, magenta);
        }

        .registration-container {
            position: absolute;
            top: 55%;
            left: 77%;
            transform: translate(-50%, -50%);
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 20px;
            padding: 20px;
            max-width: 380px; 
            text-align: center;
            color: #fff;
        }

        .registration-container h2 {
            margin-bottom: 5px;
        }

        .log-in-container {
            text-align: center;
            margin-top: 20px;
        }

        .log-in-container a {
            color: #ffffff;
            text-decoration: none;
        }

        .log-in-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 12px;
        }

        #tab1,
        #tab2,
        #tab3,
        #tab4 {
            display: none;
        }

        .form-group.gender {
            text-align: center;
            margin-top: 10px;
}     

.profile-picture {
            width: 230px;
            height: 205px;
            border-radius: 100%;
            margin-right: 10px;
            border: 4px solid #ffffff;
        }

        .profile-name {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            font-style: italic;
            font-size: 50px;
            left: 10pt;
            color: rgb(255, 255, 255);
            position: relative;                 
        }

        .profile-container {
            position: absolute;
            top: 53%;
            left: 140px;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
        }

        .profile-contain:hover {
            transform: translateY(-5px);
        }

        .profile-container p {
            position: absolute;
            bottom: 1px; /* Adjust as needed */
            left: 270px; /* Adjust as needed */
            margin: 0;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">WASHY-WASHY</div>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="aboutus.php">ABOUT</a></li>
            <li><a href="logreg.php">REGISTRATION</a></li>
        </ul>
    </nav>

    <div class="video-container">
        <video autoplay loop muted plays-inline>
            <source src="RESONANCE.mp4" type="video/mp4">
        </video>
    </div>

    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    
  <!-- REGISTRATION FORM -->
  <div class="registration-container form-container show-registration">
  <h2 style="margin-bottom: 20px;">SIGN UP</h2>

        <input type="radio" id="tab1" name="tabs" checked>
        <label for="tab1" style="font-weight: bold; font-style: italic; font-size: 17px;">REGISTER</label>

        <span style="margin-right: 75px;"></span>

        <input type="radio" id="tab2" name="tabs">
        <label for="tab2" style="font-weight: bold; font-style: italic; font-size: 17px;">LOG IN</label>

        <form action="processing.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
        <div class="form-group form-element" style="margin-bottom: 20px;">
                <label class="form-label" for="full_name">Full name:</label>
            <div class="underline-input">
                <input type="text" id="fname" name="fname" required>
                <div class="underline"></div>
            </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="username">Username:</label>
            <div class="underline-input">
                <input type="text" id="username" name="username" required>
                <div class="underline"></div>
            </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
            <div class="underline-input">
            <input type="text" id="email" name="email" required>
                <div class="underline"></div>
            </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
            <div class="underline-input">
                <input class="underline-input" type="password" id="password" name="password" required>
            </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="contact">Contact Number:</label>
            <div class="underline-input">
                <input class="underline-input" type="tel" id="contactnum" name="contactnum" pattern="[0-9]{11}" required>
            </div>
            </div>

            <div class="form-group gender" style="margin-bottom: 25px;">
                <label id="gender" class="form-label">Gender:</label>
                <input class="form-radio" type="radio" id="Male" name="gender" value="Male" required>
                <label for="male">Male</label>
                <input class="form-radio" type="radio" id="Female" name="gender" value="female" required>
                <label for="female">Female</label>
            </div>

        <form action="processing.php" method="post" enctype="multipart/form-data">
            <input class="form-submit" type="submit" value="SUBMIT">
        </form>
    </div>

    <div class="profile-container">
        <img class="profile-picture" src="LAMBO.jpg" alt="Profile Picture">
        <div class="profile-name">
            TRANSICLE
            <br>
            WASHY-WASHY          
        </div>
        <p style="font-size: 20px; font-style: italic;"> x UNLEASH YOUR BEAST x
            <br>
            </p>
    </div> 

    <!-- LOG IN FORM -->
    <div class="registration-container form-container show-login">
    <h2 style="margin-bottom: 20px;">SIGN IN</h2>

    <input type="radio" id="tab3" name="tabs" value="register">
    <label for="tab3" style="font-weight: bold; font-style: italic; font-size: 17px;">REGISTER</label>

    <span style="margin-right: 75px;"></span>

    <input type="radio" id="tab4" name="tabs" value="login" checked>
    <label for="tab4" style="font-weight: bold; font-style: italic; font-size: 17px;">LOG IN</label>

    <form action="login.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
        <div class="form-group form-element" style="margin-bottom: 20px;">
                <label class="form-label" for="username">Username:</label>
                <div class="underline-input">
                    <input type="text" id="username" name="username" required>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label class="form-label" for="password">Password:</label>
                <div class="underline-input">
                    <input class="underline-input" type="password" id="password" name="password" required>
                </div>
            </div>

            <input class="form-submit" type="submit" value="SUBMIT">
            <input type="hidden" name="refID" value="<?php echo str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT); ?>">
    <input type="hidden" name="service_type" id="selected_service" value="">
        </form>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const registerTab = document.getElementById('tab1');
        const loginTab = document.getElementById('tab2');
        const registerForm = document.querySelector('.show-registration');
        const loginForm = document.querySelector('.show-login');
        const registerInLoginForm = document.getElementById('tab3');
        const loginInRegisterForm = document.getElementById('tab4');

        function showRegisterForm() {
            registerForm.style.display = 'block';
            loginForm.style.display = 'none';
        }

        function showLoginForm() {
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        }

        function showRegisterFromLogin() {
            registerForm.style.display = 'block';
            loginForm.style.display = 'none';
        }

        function showLoginFromRegister() {
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        }

        registerTab.addEventListener('change', showRegisterForm);
        loginTab.addEventListener('change', showLoginForm);
        registerInLoginForm.addEventListener('change', showRegisterFromLogin);
        loginInRegisterForm.addEventListener('change', showLoginFromRegister);

        // Show the default form based on the initially checked tab
        if (registerTab.checked) {
            showRegisterForm();
        } else if (loginTab.checked) {
            showLoginForm();
        } else if (registerInLoginForm.checked) {
            showRegisterFromLogin();
        } else if (loginInRegisterForm.checked) {
            showLoginFromRegister();
        }
    });
</script>
</body>
</html>

<script>
    // Check if there's an error message in the URL
    const urlParams = new URLSearchParams(window.location.search);
    const errorMessage = urlParams.get('error');

    if (errorMessage) {
        const errorMessageContainer = document.getElementById('error-message');
        errorMessageContainer.innerHTML = `<p style="color: red;">${errorMessage}</p>`;
    }
</script>
