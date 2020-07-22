/*--------Transfer Credit----------*/

<?php

  //Database Connection
  include("config.php");

  if(isset($_POST['transfercre']))
  {
    $from_id = trim($_POST['fromtc']);
    $to_id = trim($_POST['toid']);
    $credit = trim($_POST['credit']);  
    $error = false;

    //Query for users data
    $from_query = "select * from users where id='$from_id'";
    $from_result = mysqli_query($con,$from_query);
    $row_from = mysqli_fetch_assoc($from_result);
    $from_name = $row_from['name'];

    //From user credits
    $fetchfrom_credit_db = $row_from['credits'];

    //Query for user to which credit is to be transfered
    $to_query = "select * from users where id='$to_id'";
    $to_result = mysqli_query($con,$to_query);
    $row_to = mysqli_fetch_assoc($to_result);
    $to_name = $row_to['name'];
    
    //To user credits
    $fetchto_credit_db = $row_to['credits'];

    if((int)$credit>(int)$fetchfrom_credit_db)
    {
        $errors = "Insufficient Credits :(";
        $error = true;
    }
    if(!$error)
    {
      //From user credits update
      $userfrom_final_credit = "UPDATE users SET ";
      $userfrom_final_credit .= "credits=credits-$credit WHERE id=$from_id";
      $query = mysqli_query($con,$userfrom_final_credit);
      if(!$query)
      {
        die("QUERY FAILED".mysqli_error($con));
      }

      //To user credit update
      $userto_final_credit = "UPDATE users SET ";
      $userto_final_credit .= "credits=credits+$credit WHERE id=$to_id";
      $query = mysqli_query($con,$userto_final_credit);

      //Insert into transfer records
      $query1 = "insert into record(sender,receiver,txn) values('$from_name','$to_name','$credit')";
      $res = mysqli_query($con,$query1);

      $success = "Successfully transferred :)";
      echo "<script>window.location.href='view_user.php?id=$from_id&success=$success'</script>";
      
    }
    else
    {
      echo "<script>window.location.href='view_user.php?id=$from_id&errors=$errors'</script>";
    }
}
?>

