<?php
  $lines=@file("data/data.txt");
  if($lines != null){
      $result ='<table border="0">';
      $result.="<tr><th>TIME</th><th>NAME</th><th>EMAIL</th><th>AGE</th><th>HOUSEHOLD</th></tr>";
      for($i = 0;$i<count($lines);$i++){
          $result.="<tr>";
          $arr=explode(",",$lines[$i]);
          for($j=0;$j<5;$j++){
               $result.="<td>{$arr[$j]}</td>";
          }
          $result.="</tr>";
      }
      $result.="</table>";

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readTable</title>
    <style>
        h1{font-size:18pt;font-weight:bold;color:black;}
        body{fontsize:13pt;color:black;margin5px 25px;}
        tr{margin:5px;}
        th{padding:5px;color:white;background:darkgray;}
        td{padding:5px;color:black;background: #B1F9D0;}
    </style>
</head>
<body>
     <h1>TABLE</h1>
    <p><?php echo $result; ?></p>
    <ul>
    <li><a href="post.php">post.php</a></li>
    </ul>
</body>      
</html>