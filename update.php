<?php
include('connection.php');
$id=$_GET['userid'];
$sql="select *from students where id=$id";
$data=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($data);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql2="UPDATE students SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    if(mysqli_query($con,$sql2))
    {
        header('location:display.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <button class="btn btn-primary m-2"><a href="display.php" class="text-light">go back</a></button>
    <form class="m-5" method="post">
        <div class="form-group">
            <label for="name">your Name</label>
            <input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control" id="name" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">your Email</label>
            <input type="email" name="email" value="<?php echo $result['email']; ?>" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="mobile">your Mobile No</label>
            <input type="number" name="mobile" value="<?php echo $result['mobile']; ?>" class="form-control" id="mobile" placeholder="mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">your Password</label>
            <input type="text" name="password" value="<?php echo $result['password']; ?>" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>
        <br />
        <button type="submit" class="btn btn-primary" name="submit" name="submit">update</button>
    </form>
</body>
</html>