<?php include "connection.php";
$id=$_GET['id'];
$delete="DELETE FROM php WHERE id='$id'";
$data=mysqli_query($conn,$delete);

if($data)
                {
                    ?>
                        <script>
                            alert("Data Deleted Succesfully");
                            window.open("http://localhost/php/view.php","_self");
                        </script>
                    <?php
                }
                else
                {
                    ?>
                        <script>
                            alert("Please Try Again");
                        </script>
                    <?php
                }
?>
