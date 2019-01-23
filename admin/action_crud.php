<?php


$con = mysqli_connect("localhost", "root", "", "hotel");
$rs = mysqli_query($con,);
$data = mysqli_fetch_array($rs);




  $newUser = "insert into `room`(`type`, `badding`, `place`)
										values ('$_POST[type]','$_POST[bedding]','$_POST[place]'";
                    DIE();
    if (mysqli_query($con, $newUser)) {
        echo "<script type='text/javascript'> alert('Sukses tambah kamar'); window.location.href = 'room_manage.php' </script>";

    } else {
        echo "<script type='text/javascript'> alert('Error adding  in database'); history.back()</script>";

    }


$msg = "Your code is correct";


?>
