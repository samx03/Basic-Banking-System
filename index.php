<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro py-4">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome to</h3>
          <h1>THE BANK</h1>

        </div>
      </div>

    </div>
  </div>



  <!-- Activity section -->
  <section>
    <div class="row activity text-center">
      <div class="col-md act">


        
        <a href="userdetail.php"> <span class="user-icon" style="margin-left: 12%;"><i class="fas fa-user-plus fa-10x"></i></i></span><button style="background-color :#2db7fc;" class="mt-2">User Details</button></a>
      </div>
      <div class="col-md act">

        
        <a href="transfermoney.php"><span class="user-icon"><i class="fas fa-university fa-10x"></i></span><button style="background-color :#2db7fc;" class="mt-2">Make a Transaction</button></a>
      </div>
      <div class="col-md act">

        
        <a href="transactionhistory.php"> <span class="user-icon"><i class="fas fa-credit-card fa-10x"></i></span><button style="background-color :#2db7fc;">Transaction History</button></a>
      </div>
    </div>
    </div>
  </section>
  
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
<style>
  body {
    background-image: url('https://images.unsplash.com/photo-1613243555978-636c48dc653c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    overflow: hidden;
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  .container-f {
    background: rgba(0, 0, 0, 0.5);
  }

  .intro {
    background: rgba(0, 0, 0, 0);
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  }

  .user-icon {
    color: #343a40;
  }

  .logo {
    width: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    padding: 10px;
  }

  .logo img {
    width: 33%;
    border: 3px solid white;
    margin-left: 300px;
    margin-top: -150px;

  }

  .row .activity text-center {
    margin: 150px;

  }

  .col-md .act {
    margin: 100px;
  }

  .act a span{
    display: block;
  }

  h1 {
    font-size: 7vh;
    color: #343a40;
    font-weight: bold;

  }

  h3 {
    color: #343a40;
    text-shadow: 0 0 0 0;
  }

  button {
    border: none;
    border-radius: 8px;
    padding: 10px;
    background: #343a40 !important;
    color: white;
    letter-spacing: 1.5px;
    font-size: 15px;
    transition: 0.5s;
  }

  button:hover {
    border: 2px solid #343a40;
    background-color: #fff !important;
    color: #343a40 !important;
  }

  button:hover {
    background-color: #0e0eed;
  }

</style>

</html>