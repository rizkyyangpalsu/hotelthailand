<?php


									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
                  $Ticket_Type = $_POST["children"];
                  $Ticket2_Type = $_POST["adult"];
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "
                                            <script type='text/javascript'>
                                                alert('User Already in Exists');
                                                window.location.href = '../';
                                            </script>
                                            ";
									} else if ($Ticket_Type  >2) {
                    echo "
                                            <script type='text/javascript'>
                                                alert('Tidak lebih dari 2 orang dewasa, Silakan Pesan lebih dari 1 kamar');

                                            </script>
                                            ";
}
else if ($Ticket2_Type  >2) {
  echo "
                          <script type='text/javascript'>
                              alert('Tidak lebih dari 2 Anak kecil');

                          </script>
                          ";
}


									else
									{

										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays` , `adult` , `children`, `btrans`, `bank`)
										VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'),'$_POST[adult]','$_POST[children]','$_POST[btrans]','$_POST[profile_image]')";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";

										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

										}
									}

							$msg="Your code is correct";


							?>
