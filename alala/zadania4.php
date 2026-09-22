<?php
setcookie("username",  "jan",time() +(86400*7),"/");
setcookie("green","blue",time() +(86400*7),"/");
setcookie("session_id",1, time() +(86400*7),"/" );
setcookie("session_id","", time()-3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <style>
        body{
        background-color: <?php echo $_COOKIE['green'];?> 
        }
    </style>
<?php
if (isset($_COOKIE["username"])){
    echo "cześć," . $_COOKIE["username"];
}
if (isset($_COOKIE["session_id"])){
    echo "cześć," . $_COOKIE["session_id"];
}
print_r($_COOKIE);
    ?>
</body>
</html>

