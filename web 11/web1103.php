


<html>
<body>
    
<head>






</head>




</body>



<form name="f1" action="" method = "post">

 

 Enter : <input type="text" name="pointcount" placeholder="point count">
 <input type="submit" name="submit" value="send">



</form>


<?php

 if (isset($_POST["submit"])){

    $count = $_POST["pointcount"];

    



    if ( $count>=0 && $count<=50) {

      $bill = $count * 3.50;
      echo "Your Bill is : Rs:$bill" ;

    } else if ( $count>=51 && $count<=100) {

        $bill = $count * 4.00;
        echo "Your Bill is : Rs:$bill" ;
  
      } else if ( $count>=101 && $count<=150) {

        $bill = $count * 5.20;
        echo "Your Bill is : Rs:$bill" ;
  
      }
    else if ( $count<=151) {

      $bill = $count * 6.50;
      echo "Your Bill is : Rs:$bill" ;

    }
     

 }



?>






</html>