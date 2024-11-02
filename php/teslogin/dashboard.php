<?php 
session_start();
if (!isset($_SESSION['profile_name'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" type="image/gif" >
</head>
<style>
    ::-webkit-scrollbar{
        display: none;
    }
    body{
        background-color: #303030;
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
        width: 550px;
        margin: 20px auto;
        border-radius: 5px;
        justify-content: center;
        align-content: center;
        transition: all 0.3s;
        pointer-events: auto;
    }
    .kotak:hover{
        background: #1269cc;
        transform: scale(1, 1.1);
        box-shadow: 0 0 5px #51eefc, 0 0 10px #51eefc; 
        animation: w 1.5s infinite;
    }
        @keyframes w{
        0%{
            box-shadow: 0 0 10px #51eefc;
        }
        50%{
            box-shadow: 0 0 20px #51eefc;
        }
        100%{
            box-shadow: 0 0 10px #51eefc;
        }
    }
    .text{
        color: #1269cc;
        font-size: large;
        text-align: center;
        transition: color 0.3s;
    }
    .kotak:hover .text{
        font-family: bold;
        color: 	#51eefc;
        transition: all 0.3s;
        transform: scale(1, 0.90909);
    }   
   .username{
       animation: rainbow 10s infinite;
    }
    .resetlist{
        list-style-type: none; 
        padding: 0;            
        margin: 0;             
        display: flex;
        margin-left: 1400px;
        margin-top: -50px;
    }
    .resetlist li{
        padding-left: 50px;
    }
    .reset{
        text-decoration: none;
        animation: rainbow 14s infinite;
    }
    @keyframes rainbow{
        0%{
            color: #8D3DB6;
        }
        25%{
            color: #F23700;
        }
        50%{
            color: #00C2F3;
        }
        75%{
            color: #F1E900;
        }
        100%{
            color: #D4000C;
        }
    }
    .gif{
    transition: transform 0.2s;
    }
    .gif:hover{
    transform: scale(clamp(1, 1.3, 2));
    }
</style>
<body>
    <header>
        <h1 align="center" class="judul" style="font-family: Arial, sans-serif;">
            <img src="https://media.tenor.com/sz7KS3CUyfsAAAAi/chie-satonaka.gif" height="50" width="50"> 
            Hi <span class="username"><?php echo ucfirst($_SESSION['profile_name']); ?></span> 
            <img src="https://media.tenor.com/ax1MmuY9BYMAAAAi/vibing-aigis.gif" height="50" width="50">
        </h1>
        <ul class="resetlist">
            <li><a href="changeprofilename.php" class="reset">change profile name</a></li>
            <li><a href="reset.php" class="reset">reset password</a></li>
            <li><a href="delete.php" class="reset">delete account</a></li>

        </ul>
    </header>
    <img class="gif" src="https://media.tenor.com/rNhsfkZgcK0AAAAj/chelsea-fc-sports.gif" alt="" style="width: 250px;">
    <img class="gif" src="https://media.tenor.com/0MpGA0coe_AAAAAM/kotone-shiomi-kotone.gif" alt="">
    <img class="gif" src="https://media.tenor.com/bvqgIKH-u_sAAAAM/cole-palmer-cole-jermaine-palmer.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ByfcdaCgJq4AAAAM/chie-satonaka.gif" alt="">
    <img class="gif" src="https://media.tenor.com/OGfubOfqAfUAAAAM/mitsuru-kirijo-persona.gif" alt="">
    <img class="gif" src="https://media.tenor.com/LqwGVt4iWQAAAAAM/cole-palmer-cole-palmer-akgae.gif" alt="">
    <img class="gif" src="https://media.tenor.com/BImgTICf9XwAAAAM/nicolas-jackson.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/8TmA66FvtNsAAAAM/ngolo-kante-haftal%C4%B1k-kesif.gif" alt="" style="width: 280px;">
    <img class="gif" src="https://media.tenor.com/OUKo4jVsshgAAAAM/persona-4-persona.gif" alt="">
    <img class="gif" src="https://media.tenor.com/tOv2k6Pc2i0AAAAM/takina-chelsea.gif" alt="" >
    <img class="gif" src="https://media.tenor.com/LHxlr924whQAAAAM/adachi-true.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ebZHNOszc00AAAAM/heiitse-cfc.gif" alt="" style="width: 400px;">
    <img class="gif" src="https://media.tenor.com/DtIErAZgFacAAAAM/this-person-is-km-near-your-house-persona-3.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/ebf75sYVgFIAAAAM/cole-palmer.gif" alt="">
    <img class="gif" src="https://media.tenor.com/tGLbL_wSmcwAAAAM/messi-lionel-messi.gif" alt="" style="width: 290px">
    <img class="gif" src="https://media.tenor.com/adh0KHMHiMwAAAAM/heiitse-cfc.gif" alt="">
    <img class="gif" src="https://media.tenor.com/4ACavD3iMIsAAAAM/rmcf-real-madrid.gif" alt="">
    <img class="gif" src="https://media.tenor.com/JfmcqUCNJmAAAAAM/persona-persona3.gif" alt="">
    <img class="gif" src="https://media.tenor.com/rhPKPFFA_6AAAAAM/messi-hi.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ivtGDu_w8y4AAAAM/makoto-my-beloved-makoto-niijima.gif" alt="">
    <img class="gif" src="https://media.tenor.com/uu8KR-vdhiYAAAAM/mudryk.gif" alt="">
    <img class="gif" src="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/yToZSCyViUQAAAAM/kasumi-persona5.gif" alt="">
    <img class="gif" src="https://media.tenor.com/va0pIiO-yk4AAAAM/cole-cole-palmer.gif" alt="" style="width: 300px; display: block; margin: 0 auto;">
    <br>
    <br>
    <br>
    <a href="logout.php" class="link"><div class="kotak"><p class="text">LOGOUT</p></div></a>
    <audio autoplay loop id="music">
        <source src="Heaven - Persona 4.mp3" type="audio/mpeg">
    </audio>
    <script>
        audioElement.play();
    </script>
</body>
</html>
