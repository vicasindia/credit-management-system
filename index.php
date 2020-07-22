<!DOCTYPE html>
<html>

<head>
  <title>Credit Management System</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Credit Management System is a simple web app for transferring the Credits each other without login.">
  <meta name="author" content="Vikas Yadav">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Font awesome styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta Stencil" type="text/css">

</head>

<body>
  <div class="bgimg">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="" class="navbar-brand text-warning font-weight-bold brand">&emsp;CMS: Credit Management System &emsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="nav-item"><a href="#users" class="nav-link text-white"><i class="fa fa-address-card-o" aria-hidden="true"></i> Users</a></li>
            <li class="nav-item"><a href="#record" class="nav-link text-white"><i class="fa fa-list-ol" aria-hidden="true"></i> Record</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container text-center text-white headerset">
      
      <h2>Welcome to Credit Management System</h2>
      <h1>Nice to see you again :)</h1>
      <br>
      <a href="#users"><button class="btn btn-dark btn-lg">Go ahead ...</button></a>
    </div>
  </div>
  
  <!---------- Users----------->
  
  <section class="container users text-center" id="users">
    <h1> Users </h1> <br>

    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered table-dark text-center">
        <thead>
          <tr>
            <th>S. No.</th>
            <th>Name</th>
            <th>e-Mail ID</th>
            <th>Credits</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          
          <?php
            include("config.php");  //Database Connection
            $sql1 = "select * from users";
            $result1 = mysqli_query($con, $sql1);
            
            while($row = mysqli_fetch_row($result1))
            {
          ?>
            
          <tr>
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[5];?></td>
            <td> <a href="view_user.php?id= <?php echo $row[0];?> "><button class='btn btn-outline-warning'>View</button></a></td>

          </tr>
          <?php
             }
             ?>
        </tbody>
      </table>
    </div>

  </section>
  
  <!--------Record----------->

  <section class="record bg-light" id="record">
    <div class="container text-center">
      <h1> Record </h1> <br>

      <?php
        $query2 = "select * from record";
        $result2 = mysqli_query($con, $query2);
      ?>

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered table-dark text-center">

          <thead>
            <tr>
              <th>S. No.</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Credits Transfered</th>
            </tr>
          </thead>

          <tbody>

            <?php
              while($row2 = mysqli_fetch_array($result2))
              {
            ?>
                <tr>
                  <td><?php echo $row2[0];?></td>
                  <td><?php echo $row2[1];?></td>
                  <td><?php echo $row2[2];?></td>
                  <td><?php echo $row2[3];?></td>
                </tr>
                
            <?php
              }
            ?>
            
          </tbody>

        </table>
      </div>

    </div>

  </section>

  <!-- ------Footer-------- -->
  
  <footer class="footer">
    <h6 class="text-center">Copyright © Developed by Vikas Yadav</h6>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Optional JavaScript -->

</body>

</html>

