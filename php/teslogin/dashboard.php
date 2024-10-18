<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ::-webkit-scrollbar {
        display: none;
    }
    body{
        background-color: #303030;
    }
    .link{
        display: inline-block;
        pointer-events: none;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center; 
    }    
    .kotak{
        background-color: #51eefc;
        height: 75px;
        width: 550px;
        margin: 20px auto;
        align-content: center;
        pointer-events: auto;
    }
    .kotak:hover{
        background: #1269cc;
        transition: all 0.3s;
        transform: scale(1, 1.1);
    }
    .kotak:hover .text{
        color: 	#51eefc;
        transition: all 0.3s;
        font-weight: bold;
        transform: scale(1, 0.90909);
    }   
   .text{
       color: #1269cc;
       text-align: center;
   }
   .username {
    animation: color-change 10s infinite;
}

@keyframes color-change {
    0% {
        color: #8D3DB6;
    }
    25% {
        color: #F23700;
    }
    50% {
        color: #00C2F3;
    }
    75% {
        color: #F1E900;
    }
    100% {
        color: #D4000C;
    }
}
.gif {
  transition: transform 0.2s;
}

.gif:hover {
  transform: scale(clamp(1, 1.3, 2));
}
</style>
<body>
    <h1 align="center"><img src="https://media.tenor.com/sz7KS3CUyfsAAAAi/chie-satonaka.gif" height="50" width="50"> Hi <span  class="username"><?php echo ucfirst($_SESSION['username']); ?></span> <img src="https://media.tenor.com/ax1MmuY9BYMAAAAi/vibing-aigis.gif" height="50" width="50"></h1>
    <img class="gif" src="https://media.tenor.com/rNhsfkZgcK0AAAAj/chelsea-fc-sports.gif" alt="" style="width: 250px;">
    <img class="gif" src="https://media.tenor.com/0MpGA0coe_AAAAAM/kotone-shiomi-kotone.gif" alt="">
    <img class="gif" src="https://media.tenor.com/bvqgIKH-u_sAAAAM/cole-palmer-cole-jermaine-palmer.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ByfcdaCgJq4AAAAM/chie-satonaka.gif" alt="">
    <img class="gif" src="https://media.tenor.com/OGfubOfqAfUAAAAM/mitsuru-kirijo-persona.gif" alt="">
    <img class="gif" src="https://media.tenor.com/LqwGVt4iWQAAAAAM/cole-palmer-cole-palmer-akgae.gif" alt="">
    <img class="gif" src="https://media.tenor.com/BImgTICf9XwAAAAM/nicolas-jackson.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/8TmA66FvtNsAAAAM/ngolo-kante-haftal%C4%B1k-kesif.gif" alt="">
    <img class="gif" src="https://media.tenor.com/OUKo4jVsshgAAAAM/persona-4-persona.gif" alt="">
    <img class="gif" src="https://media.tenor.com/tOv2k6Pc2i0AAAAM/takina-chelsea.gif" alt="" >
    <img class="gif" src="https://media.tenor.com/LHxlr924whQAAAAM/adachi-true.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ebZHNOszc00AAAAM/heiitse-cfc.gif" alt="" style="width: 400px;">
    <img class="gif" src="https://media.tenor.com/DtIErAZgFacAAAAM/this-person-is-km-near-your-house-persona-3.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/ebf75sYVgFIAAAAM/cole-palmer.gif" alt="">
    <img class="gif" src="https://media.tenor.com/tGLbL_wSmcwAAAAM/messi-lionel-messi.gif" alt="" style="width: 295px">
    <img class="gif" src="https://media.tenor.com/adh0KHMHiMwAAAAM/heiitse-cfc.gif" alt="">
    <img class="gif" src="https://media.tenor.com/4ACavD3iMIsAAAAM/rmcf-real-madrid.gif" alt="">
    <img class="gif" src="https://media.tenor.com/JfmcqUCNJmAAAAAM/persona-persona3.gif" alt="">
    <img class="gif" src="https://media.tenor.com/rhPKPFFA_6AAAAAM/messi-hi.gif" alt="">
    <img class="gif" src="https://media.tenor.com/ivtGDu_w8y4AAAAM/makoto-my-beloved-makoto-niijima.gif" alt="">
    <img class="gif" src="https://media.tenor.com/uu8KR-vdhiYAAAAM/mudryk.gif" alt="">
    <img class="gif" src="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" alt="" style="width: 300px;">
    <img class="gif" src="https://media.tenor.com/yToZSCyViUQAAAAM/kasumi-persona5.gif" alt="">
    <img class="gif" src="https://media.tenor.com/va0pIiO-yk4AAAAM/cole-cole-palmer.gif" alt="" style="width: 300px; display: block; margin: 0 auto;">
    <a href="logout.php" class="link"><div class="kotak"><p class="text">LOGOUT</p></div></a>
</body>
</html>
