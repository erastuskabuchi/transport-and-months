
<?php 
$months = array('January' =>31 ,'February' =>28 ,'March' =>31 ,'April' =>30 ,'May' =>31 ,'June' =>30 ,'July' =>31 ,'August' =>31 ,'September' =>30 ,'October' =>31 ,'November' =>30 ,'December' =>31 );
     function option($str){
        echo "<option value='$str'>".ucfirst($str)."</option>";
     }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MONTHS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

    <?php
    if (!isset($_POST['submit'])) {
        echo "<form method='post' action='months.php'>";
        echo "<p>Select a month</p>";
        echo "<select name='month'>";
        foreach ($months as $key => $value) {
            option($key);
        }
        echo "</select>";
        echo "<input type='submit' name='submit' value='go'/>";
        echo "</form>";
    }else {
        $month =$_POST['month'];     
        if ($month=='February') {
            echo "The month of February has".$months['February'];
        }else{ 
            echo "The month of $month has $months[$month]days";
        }
     
     
     }
     ?>
</body>
</html>