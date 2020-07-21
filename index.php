<!DOCTYPE html>
<html>
<head>
     <title>Credit Management System</title>
    
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
         
      <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
         
      <!-- Font awesome styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <?php
        include("config.php");
          $sql1 = "select * from users";
          $result1 = mysqli_query($con,$sql1);
     ?>

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
                <button class="btn btn-dark text-white btn-lg">Go ahead ...</button>
             </div>
     </div>
        <!-- ------Users--------- -->
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
             while($row = mysqli_fetch_row($result1))
             {
               ?>
               <tr>
               <td><?php echo $row[0];?></td>
               <td><?php echo $row[1];?></td>
               <td><?php echo $row[2];?></td>
               <td><?php echo $row[5];?></td>
               <td><button class="btn btn-warning" data-target="#mymodal" data-toggle="modal">View</button></td>

                <div class="modal fade" id="mymodal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4>Transfer Credit</h4>
                        <button type="button" class="close" data-dismiss="modal"> &times; </button>
                      </div>

                      <div class="modal-body">
                        
                      </div>
                    </div>          
                  </div>
                </div>

               </tr>
               <?php
             }
             ?>
          </tbody>
        </table>
      </div>
                    
     </section>
      
      <!-- ------Record--------- -->

     <section class="record bg-light" id="record">
          <div class="container text-center">
               <h1> Record </h1>
                              
          </div>
          
     </section>

       <!-- ------Footer-------- -->
     <footer class="footer">
          <h6 class="text-center">Copyright © 2020 : Developed by Vikas Yadav</h6>
     </footer> 

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Optional JavaScript --> 

</body>
</html>
