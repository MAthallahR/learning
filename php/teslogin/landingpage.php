<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="icon" href="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" type="image/gif" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(90deg, #fff, #0FB0F4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        .container:hover {
            transform: scale(1.02);
        }
        .link{
            text-decoration: none;
            width: 100%;
            display: inline-block;
            pointer-events: none; 
        }
        .kotak{
            background-color: #51eefc;
            height: 75px;
            width: 100%; 
            margin: 20px 0;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition:all 0.3s;
            pointer-events: auto;
        }
        .kotak:hover{
            background: #1269cc;
            transform: scale(1.05);
            box-shadow: 0 0 5px #51eefc, 0 0 10px #51eefc; 
            animation: w 1s infinite;
        }
        @keyframes w {
            0% {
                text-shadow: 0 0 10px rgb(32, 32, 255);
            }
            50% {
                text-shadow: 0 0 20px rgb(32, 32, 255);
            }
            100% {
                text-shadow: 0 0 10px rgb(32, 32, 255);
            }
        }
        
        .ltex{
            color: #1269cc;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            transition: color 0.3s;
        }
        .kotak:hover .ltex{
            color: #51eefc;
        }
        h1{
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }
        img {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: black;">
            <img src="https://media1.tenor.com/m/VHsiL8B8P0wAAAAC/shincore-wave-emoji.gif" height="30" width="50"> 
            Hi There! Please Select 
            <img src="https://media1.tenor.com/m/VHsiL8B8P0wAAAAC/shincore-wave-emoji.gif" height="30" width="50">
        </h1>
        <a href="register.php" class="link">
            <div class="kotak">
                <p class="ltex">REGISTER</p>
            </div>
        </a>
        <a href="login.php" class="link">
            <div class="kotak">
                <p class="ltex">LOGIN</p>
            </div>
        </a>
    </div>
</body>

</html>
