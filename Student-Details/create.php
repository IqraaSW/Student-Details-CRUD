<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_details";


$conn = mysqli_connect($servername, $username, $password, $dbname);

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $first_name=$_POST['first_name'];
                $last_name=$_POST['last_name'];
                $email_id=$_POST['email_id'];
             
                mysqli_query($conn, "INSERT INTO student_details (first_name, last_name, email_id) VALUES ('$first_name', '$last_name', '$email_id')");
                header('location:index.php');
             
            
                
                }         


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control " value="">
                            
                        </div>
                        <div class="form-group">
                        <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email_id" class="form-control ">
                           
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>