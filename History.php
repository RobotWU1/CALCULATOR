<?php

    $expression=$_GET['h'];
    $res=$_GET['res'];

    echo "$expression";
    $con = mysqli_connect('localhost','root','','history_list');

    if($con)
    {
        //Set encoding format
        mysqli_query($con,'set names utf8');

        $sql = "insert into history_table(expression,result) values('$expression','$res')";

        $result=mysqli_query($con,$sql);

   

    }
    else
    {
        echo '连接数据库失败';
    }

?>
