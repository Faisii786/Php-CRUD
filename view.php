<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            background: #d1d1d1;
        }

        table {
            border: 1px solid black;
            margin: auto;
            border-radius: 3px;
        }

        tr,
        th,
        td {
            font-size: 22px;
            border: 1px solid black;
            text-align: justify;
        }

        td,
        th {
            padding: 10px;
            border-radius: 2px;
        }

        a {
            text-decoration: none;
            font-size: 25px;
            color: black;
        }

        .addrecord {
            text-align: center;
            background: rgb(196, 69, 69);
            width: 188px;
            margin: auto;
            margin-bottom: 10px;
            padding: 8px;
            border: 2px solid black;
            border-radius: 10px;
            transition-property: all;
            transition-duration: 0.5s;
            transition-timing-function: 0.5s;
        }

        .addrecord a {
            color: white;
        }
        .addrecord:hover {
            background-color: red;
            cursor: pointer;
        }
    </style>
</head>


<body>
    <div class="addrecord">
        <a href="insert.php">Add Record</a>
    </div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php
    include "connection.php"; 
    $query = "SELECT * FROM php";
    $execute = mysqli_query($conn,$query);
    $result = mysqli_num_rows($execute);
    if($result)
    {
        while($row = mysqli_fetch_array($execute))
        {
            ?>
            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['name'];?>
                </td>
                <td>
                    <?php echo $row['city'];?>
                </td>
                <td>
                    <?php echo $row['email'];?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?> ">Delete</a>

                </td>
            </tr>

            <?php
        }
    }
    else
    {
        ?>
            <th>
            <td>No record Found</td>
            </th>
            <?php
    }
    ?>
        </table>
    </div>
</body>

</html>