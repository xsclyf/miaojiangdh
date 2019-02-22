<?php
    $con = @mysqli_connect("localhost", "zqzb", "123456678", "zqzb");//连接数据库   数据库地址，用户名，用户密码，数据
    $name=$_POST['name'];
    $neirong=$_POST['biji'];
    $times=$_POST['name'];
    $sql_up=mysqli_query($con,"insert into dh_biji (times,neirong,name) values ('$times','$neirong','$name')");
    // header("location:index.html");
    $sql_jishu=mysqli_num_rows($sql_up);
    echo $sql_jishu;

    
