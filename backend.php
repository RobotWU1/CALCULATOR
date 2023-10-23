<?php
 
// Create a connection
$con = mysqli_connect('localhost','root','','history_list');
 
if($con)
    {
        //Set encoding format
        mysqli_query($con,'set names utf8');
 
        $sql = "select expression from history_table order by no desc limit 10";
 
        $result = $con->query($sql);
 
        // Converts the query results to an array
        $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row['expression'];
            }
        }
        
        // Close database connection
        $con->close();
        
        // The data is returned to the front-end in JSON format
        echo json_encode($data);
    }
    else
    {
        echo '连接数据库失败';
    }
?>