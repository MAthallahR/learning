<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #303030;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white ;
            display: flexbox;
            gap: 10px;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border-radius: 5px;
        }
        
        .linkmc1, .linkmc2 {
            display: inline-block;
            pointer-events: none;
            text-decoration: none;
        }
        
        .isim1md, .isim2md {
            background-color: #51eefc;
            height: 75px;
            width: 550px;
            margin: 20px auto;
            align-content: center;
            pointer-events: auto;
        }
        
        .isim1md:hover, .isim2md:hover {
            background: #1269cc;
            transition: all 0.3s;
            transform: scale(1, 1.1);
        }
        
        .isim1md:hover .isim1mc, .isim2md:hover .isim2mc {
            color: 	#51eefc;
            transition: all 0.3s;
            font-weight: bold;
            transform: scale(1, 0.90909);
        }
        
        .isim1mc, .isim2mc {
            color: #1269cc;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center"><img src="https://media1.tenor.com/m/VHsiL8B8P0wAAAAC/shincore-wave-emoji.gif" height="30" width="50"> Hi There Please Select <img src="https://media1.tenor.com/m/VHsiL8B8P0wAAAAC/shincore-wave-emoji.gif" height="30" width="50"></h1>
        <BR>
        <a href="login.php" class="linkmc1"><div class="isim1md"><p class="isim1mc">LOGIN</p></div></a>
        <a href="register.php" class="linkmc2"><div class="isim2md"><p class="isim2mc">REGISTER</p></div></a>
    </div>
</body>
</html>
