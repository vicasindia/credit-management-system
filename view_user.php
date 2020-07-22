<!DOCTYPE html>
<html>

<head>
  <title>Credit Management System | User</title>

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
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand text-warning font-weight-bold brand">&emsp;CMS: Credit Management System &emsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="collapsenavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link text-white"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="nav-item"><a href="index.php#users" class="nav-link text-white"><i class="fa fa-address-card-o" aria-hidden="true"></i> Users</a></li>
          <li class="nav-item"><a href="index.php#record" class="nav-link text-white"><i class="fa fa-list-ol" aria-hidden="true"></i> Record</a></li>
        </ul>
      </div>
    </div>
  </nav> <br>

  <!-- ------View User--------- -->

  <?php
    //Database Connection
    include("config.php");

    if(isset($_GET['id'])) 
    {   

    //Session Start 
    $_SESSION['id'] = $_GET['id'];
    ?>
    
  <section class="container users text-center" id="">
    <h1> User Details </h1> <br>

    <div class="shadow p-3 mb-5 bg-white rounded ">
      <?php
        if(isset($_GET['errors']))
        {
          $error=$_GET['errors'];
          echo "<div class='alert alert-danger'>$error</div>";
        }
        if(isset($_GET['success']))
        {
          $success= $_GET['success'];
          echo "<div class='alert alert-success'>$success</div>";
        }
      ?>
      
      <?php
        $data = $_GET['id'];
        $result2 = mysqli_query($con,"select * from users where id=" . $data);
        while($row = mysqli_fetch_array($result2)) 
        {
      ?>
      
      <div class="row">
        <div class="col-md-6">
          <p><b>Name : </b>
            <?php echo  $row['name'];?>
          </p>
        </div>

        <div class="col-md-6">
          <p><b>Mobile No. : </b>
            <?php echo  $row['mobile']?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p><b>e-Mail : </b>
            <?php echo  $row['email'];?>
          </p>
        </div>

        <div class="col-md-6">
          <p><b>Current Credits :</b>
            <?php echo  $row['credits'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p><b>Address :</b>
            <?php echo  $row['address'];?>
          </p>
        </div>
        <div class="col-md-6">

          <!-- Button trigger modal -->
          <p><button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">Transfer Credits</button></p>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Transfer Credits</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="transfer_credit.php" method="POST">
                    <div class="form-group">
                      <label for="tranfercredit" class="font-weight-bold">Credits to be transferred:</label>
                      <input type="number" class="form-control" name="credit" id="tcid" required>
                      <input name="fromtc" type="hidden" value="<?php echo $data;?>">
                      <br>
                      <label for="selectname" class="font-weight-bold">Receiver:</label>
                      <select class="form-control" name="toid" id="tcname1">
                        
                        <?php
                          $query = "select * from users where id!='".$data."'";
                          $result = mysqli_query($con, $query);
                          
                          while($row = mysqli_fetch_array($result))
                          {
                        ?>
                        
                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                        <?php
                          }
                        ?>
                      </select>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning" name="transfercre">Transfer</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>

          <?php
            }   
            }
          ?>
          
          </div>
        </div>
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

