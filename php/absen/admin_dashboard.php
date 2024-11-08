<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    body{
        background-color: #303030;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    button{
        background-color: #51eefc;
        height: 40px;
        width: 100px; 
        margin: 20px;
        border: none;
        border-radius: 5px;;
        transition: all 0.3s;
        cursor: pointer;
    }
    button:hover{
        background: #1269cc;
        transform: scale(1.05);
        box-shadow: 0 0 5px #51eefc, 0 0 10px #51eefc; 
        animation: w 1.5s infinite;
    }
    @keyframes w{
        0%{
            box-shadow: 0 0 10px #51eefc, 0 0 20px #51eefc;
        }
        50%{
            box-shadow: 0 0 30px #51eefc, 0 0 40px #51eefc;
        }
        100%{
            box-shadow: 0 0 10px #51eefc, 0 0 20px #51eefc;
        }
    }
    .text{
        color: #1269cc;
        font-weight: bold;
        text-align: center;
    }
    button:hover .text{
        color: #51eefc;
    }
    </style>
<body>
    <button type="button" onclick="absent()"><p class="text">Absent</p></button>
    <button type="button" onclick="absent_records()"><p class="text">Records</p></button>
    <script>
    function absent(){
        window.location.href = 'admin_absent.php';
    }
    function absent_records(){
        window.location.href = 'admin_absentrecords.php';
    }
    </script>
</body>
</html>