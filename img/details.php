<?php

$con=mysqli_connect('localhost','root','','project');
//echo "success";
if(isset($_POST['submit'])) {
    $contactname = ($_POST['contactname']);
    $contactmail = ($_POST['contactmail']);
    $contactmessage = ($_POST['contactmessage']);

   // print_r($ima);
   // $imag2=$imag['size'];
    //print_r($imag2);
  //  echo "sucess";
    $sql="INSERT INTO `contact`(`contactname`, `contactmail`, `contactmessage`) VALUES ('$contactname','$contactmail','$contactmessage')";

    $gok=mysqli_query($con,$sql);
    if($gok)
    {
        echo "sucess";

    }else{
        echo"faild";
    }
   // if($imag[size])

}
?>