<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body::before {
            content: "";
            background: url(images/login_bg1.jpg)center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: -1;
            width: 100%;
            height: 100%;
        }

        input {
            margin: 14px 3px;
            padding: 10px 36px;
            text-align: center;
            border: 2px solid black;
            border-radius: 10px;
        }

        input::placeholder {
            color: black;
        }

        .btn {
            background-color: #6ae9e0;
            transition-property: all;
            transition-duration: 0.5s;
            transition-timing-function: 0.5s;
            margin-bottom: 28px;
        }

        .btn:hover {
            background-color: black;
            color: white;
        }

        h2 {
            text-align: center;
            margin-top: 40px;
            color: white;
        }

        form {
            text-align: center;
        }

        a {
            background-color: #6ae9e0;
            color: black;
            text-decoration: none;
            border: 2px solid black;
            padding: 10px 10px;
            border-radius: 10px;
            transition-property: all;
            transition-duration: 0.5s;
            transition-timing-function: 0.5s;
        }
        a:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <h2>Please Enter The Data</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter your Name"> <br>

            <input type="text" name="city" placeholder="Enter your City"> <br>

            <input type="text" name="email" placeholder="Enter your Email"> <br>

            <input type="submit" value="Insert" class="btn">

            <input type="reset" name="Reset" class="btn">

            <br>

            <a href="view.php">View Record</a>
        </form>
    </div>

    <?php
            if(isset($_POST['name']))
            {
                $name = $_POST['name'];
                $city = $_POST['city'];
                $email = $_POST['email'];

                $query = "INSERT INTO php (name,city,email)
                VALUES ('$name','$city','$email');";

                $execute = mysqli_query($conn,$query);

                if($execute)
                {
                    ?>
                        <script>
                            alert("Data Inserted Succesfully");
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

            }
            ?>
</body>

</html>