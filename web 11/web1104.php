
<html>


<body>

<form name="f1" action="" method = "post">

 

Enter : <input type="text" name="num" placeholder="Number">
<input type="submit" name="submit" value="send">



</form>

<?php


if (isset($_POST["submit"])) {

    $r= $_POST["num"];

switch ($r) {
    case 1:
      echo "Monday";

      break;
    case 2:
        echo"Tuesday";

      break;
    case 3:
        echo"Wednesday";

      break;
    case 4:
        echo"Thursday";

      break;
    case 5:
        echo"Friday";

      break;
    case 6:
        echo"Saturday";

      break;
    case 7:
        echo"Sunday";

      break;

    default:
    echo "please Enter Number";
      break;

     
  }


}

?>

</body>
</html>