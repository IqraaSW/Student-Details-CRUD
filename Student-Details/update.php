<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "student_details";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $id=$_GET['id'];
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email_id=$_POST['email_id'];
   
      mysqli_query($conn, "UPDATE student_details set first_name='$first_name', last_name='$last_name', email_id='$email_id' where id='$id'");
      header('location:index.php');
   
  
      
      }     

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first name" class="form-control" value="">
                         
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <textarea name="last name" class="form-control"> </textarea>
                          
                        </div>
                        <div class="form-group">
                            <label>Email id</label>
                            <input type="text" name="email id" class="form-control"value="">
                           
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>