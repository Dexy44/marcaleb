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

        .profile-picture {
            width: 230px;
            height: 205px;
            border-radius: 100%;
            margin-right: 10px;
            border: 4px solid #ffffff;
        }

        .profile-name {
            font-size: 25px;
            left: 10pt;
            color: rgb(255, 255, 255);
            position: relative;                 
        }

        .profile-container {
            position: absolute;
            top: 75%;
            left: 350px;
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
            left: 265px; /* Adjust as needed */
            margin-right: 20px;
            margin: 0;
            color: #ffffff;
        }

        .social-icons {
            position: absolute;
            bottom: -24px;
            right: -307px;
            display: flex;
            flex-direction: column;
        
        }

        .social-icons a {
            font-size: 25px;
            margin-bottom: 8px;
            color: white;
        }
        
        .profile-titles {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.profile-container {
    text-align: center;
}

.profile-group {
    text-align: center;
}

.profile-contain {
    display: inline-block;
    text-align: center;
    margin: 0 15px;
}

.profile-picture {
    max-width: 290px;
}

.profile-name {
    font-size: 1.2em;
    margin-right: 50px;
}

.profile-role {
    font-style: italic;
    color: #ffffff;
    margin-right: 30px;
}

.centered-paragraph {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 18px; /* Adjust as needed */
            color: #ffffff; /* Text color */
            z-index: 2;
}

.centered-paragraph h1 {
            font-size: 2em; /* Adjust as needed */
            margin-bottom: 10px; /* Adjust spacing */
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
    
        <div class="centered-paragraph">
            <h2>WE PROVIDE WORLD CLASS QUALITY SERVICES
                <br>FOR YOUR CARS</h2>
            <p>
            We will ensure that your transportation vehicle "TRANSICLE" neat and clean
            and as the parts of your transicle we also ensure that the parts we will use is, 
            HIGH QUALITY, GOOD, BETTER PERFORMANCE, & SAFE and SOUND.
            </p>
        </div>
    
    <div class="profile-container">
        <div class="profile-contain">
            <img class="profile-picture" src="marc.jpg" alt="Profile Picture">
            <div class="profile-name">Marcaleb De Paz</div>
            <div class="profile-role">LEADER/DEVELOPER</div>
        </div>
    
        <div class="profile-contain">
            <img class="profile-picture" src="dimaala.jpg" alt="Profile Picture">
            <div class="profile-name">Jhason Dimaala</div>
            <div class="profile-role">DEVELOPER</div>
        </div>
    
        <div class="profile-contain">
            <img class="profile-picture" src="artago.jpg" alt="Profile Picture">
            <div class="profile-name">Jerwin Artago</div>
            <div class="profile-role">DEVELOPER</div>
        </div>

    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</body>
</html>