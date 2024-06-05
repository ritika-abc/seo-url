<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table text-capitalize w-50 m-auto mt-5 table-bordered table-hover ">
        <tr>
            <td>s no</td>
            <td>name</td>
            <td>product name</td>
        </tr>
        <?php
        $con = mysqli_connect("localhost","root","","seo-url");
        echo "<pre>";
       print_r($_GET);
        $alice = mysqli_real_escape_string($con,$_GET['alice']);
        $sel = "SELECT * FROM `pro` where `alice`='$alice'";
        $q = mysqli_query($con,$sel);
        while($row=mysqli_fetch_assoc($q)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td> <?php echo $row['name'] ?> </td>
            <td><?php echo $row['pro-name'] ?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>