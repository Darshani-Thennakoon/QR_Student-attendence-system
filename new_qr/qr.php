<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b style="font-size:25px;font-family:Humanst521 BT;margin-top:40px;">Enter your email adrress and generate your QR code</b><br><br>
    <center><img src="../../images/qr1.png"></center>
    <form action="http://localhost/project/new_qr/index.php" method="POST" >
        <label style="margin-top:20px;"><b>Email:</b></label>
        <input type="text" name="email" id="email" placeholder="Enter your email"><br><br>
        
        <input type="submit" name="sub" value="Generate" class="btn btn-outline-success">
    </form>
    <a href="../views/admin.php" class="btn btn-outline-danger">Back</a>
</body>
</html>