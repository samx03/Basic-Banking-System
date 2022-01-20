<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
<br>
  <div class="background">
  <div class="container">
    <div class="screen">
      <h2 class="text-center pt-4">Create Your Account</h2>
        <br>
      <div class="screen-body">
        <div class="screen-body-item left">
        <span class="create-icon"><i class="fas fa-sign-in-alt fx-10 ml-5"></i></span>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control"  placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  body {
  background-image:url('https://images.unsplash.com/photo-1613243555978-636c48dc653c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
  background-size:cover ;
  }
        button,input {
          font-weight: 700;
          letter-spacing: 1.4px;
        }
        .screen{
          background: transparent;
        }
        span i{
          color: #343a40;
          font-size:200px;
        }
        .container {
          flex: 0 1 700px;
          width: 100%;
          margin: auto;
          padding: 10px;
         
        }
        
        .screen {
          position: relative;
          border-radius: 15px;
        }
        .screen-body {
          display: flex;
        }
        
        .screen-body-item {
          flex: 1;
          padding: 50px;
          color:#FF4C4F;
        }
        .app-form-group {
          margin-bottom: 15px;
        }
        
        .app-form-group.button {
          margin-bottom: 0;
          text-align: right;
          position: absolute;
          bottom: 30px;
          right:40px;
        }
        
        .app-form-control{
          width: 100%;
          padding: 10px 0;
          background: none;
          border: none;
          border-bottom: 1px solid #c0bebe;
          color: black;
          font-size: 14px;
          outline: none;
          transition: border-color .2s;
        }
        
        .app-form-control::placeholder {
          color: #000;
        }
        
        .app-form-control:focus {
          border-bottom-color: #4C4B4B;
        }
        
        .app-form-button {
          background: none;
          border: none;
          margin-left: 20px;
          color: #2db7fc;
          font-size: 14px;
          cursor: pointer;
          outline: none;
        }
        
        .app-form-button:hover {
          color: #ffffff;
        }
        
        @media screen and (max-width: 520px) {
          *{
            letter-spacing:1px;
          }
          .container{
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 40px;
          }
          .screen-body {
            flex-direction: column;
          }
        
          .screen-body-item.left {
            margin-bottom: 50px;
          }
          .app-form-button{
            margin-top:5px;
          }
        }
        
        @media screen and (max-width: 600px) {
          .screen-body {
            padding: 40px;
          }
        
          .screen-body-item {
            padding: 0;
          }
        }
</style>
<br><br><br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
