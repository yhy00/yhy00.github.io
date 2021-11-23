<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no,maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/bd.css">
    <link rel="stylesheet" href="php/bd.php">
    <title>Document</title>
    <style>
        input[type="submit"] {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="head">
        <ul>
            <li><img src="img/logo.png" alt="logo"></li>
        </ul>
    </header>
    <form action="" method="POST">
        
        <li>用户名：<input type="text" name="username" required="required" autofocus="autofocus" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal;width: 100%;  "></li>
        <li>密码：<input type="text" name="password" required="required" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal;width: 100%;  "></li>

        <!-- <li>问题描述：
            <input type="text" name="question" required="required" placeholder="请描述你的问题，并描述希望得到什么样的帮助 " style="overflow: hidden; overflow-wrap: break-word; resize: horizontal;width: 100%; height: 124.2px; "></li>
        <li>辅助描述：<input type="file" name="file" multiple="multiple"></li> -->
        <li>
            <input type="submit" value="提交">
        </li>
    
    </form>
</body>

</html>


<?php


// $qq="qq";
// $question=$_POST['question'];
// $file="file";
$db_host="localhost";
$db_name="root";
$db_pwd="4476580";
$link=mysqli_connect($db_host,$db_name,$db_pwd);
if($link){
    // echo"success";
    mysqli_set_charset($link,"utf-8");
    mysqli_select_db($link,"xlzx");
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="INSERT INTO users (sname,spassword) VALUES ('$username','$password')";
        $result=mysqli_query($link,$sql);
    
    

    // $result_arr = mysqli_fetch_array($result,MYSQLI_BOTH);

    // while($result_arr = mysqli_fetch_assoc($result)){
    //     echo "<pre>";
    //     print_r($result_arr);
    // }
    // print_r($result_arr);
        if($result){
            echo "<script>alert('提交成功')</script>";
        }
    }
    }

    mysqli_close($link);
?>
