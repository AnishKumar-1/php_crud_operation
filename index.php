<?php
include('connection.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$message="";
$sql="insert into students(name,email,mobile,password) values('$name','$email','$mobile','$password')";
if(!empty($name) && !empty($email) && !empty($mobile) && !empty($password))
{
    $query=mysqli_query($con,$sql);
    if($query)
    {
        $message="registration success";

    }

}
else{
    $message="enter data";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <h5 class="m-5 text-success"><?php if(!empty($message)){echo $message; header('location:display.php');} ?></h5>
    <form class="m-5" method="post">
        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="mobile">Enter Mobile No</label>
            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Enter Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>
        <br />
        <button type="submit" class="btn btn-primary" name="submit">add data</button>
    </form>
</body>

</html>