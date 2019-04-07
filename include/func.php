<?php
    //include("config.php");
    session_start();

   function getdata(){
        include("config.php");
        
        $sql="SELECT * FROM admin";

        $result=mysqli_query($db,$sql);
        
        while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
          echo "ID :{$row['id']} ------ ".
            "NAME : {$row['username']} <br> ";
        }
    }

    // function putdata(){
    //     include("config.php");
    //     $sql="insert ";
    //     $result=mysqli_query($db,$sql);
    //     while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    //       echo "ID :{$row['id']} ------ ".
    //         "NAME : {$row['username']} <br> ";
    //    }
    // }
?>
<html>
<body>
<?php getdata();?>
</body>
</html>