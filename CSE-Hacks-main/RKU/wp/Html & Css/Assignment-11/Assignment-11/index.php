<html>
<head>
<title>PHP Program for Addition of two matrices</title>
</head>
<body>
    <h1>Mahadi Hasan Mishuk</h1>

 <?php
       
       $a = array
              (
              array(11, 0, 15),
              array(43, 59, 64),
              array(13, 28, 33)
              );
        
       $b = array
             (
             array(15, 14, 16),
             array(24, 39, 12),
             array(18, 53, 15)
             );
        
       $rows = count($a);
       $cols = count($a[0]);
       
       for($i = 0; $i < $rows; $i++)
       {
       for($j = 0; $j < $cols; $j++)
       {
       $sum[$i][$j] =0;  
       $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
       }
       }


       echo ("Addition of two matrices: <br>");
       
       for($i = 0; $i < $rows; $i++)
       {
       for($j = 0; $j < $cols; $j++)
       {
       echo($sum[$i][$j] . " ");
       }
       echo("<br>" );
       }
?>
</body>
</html>