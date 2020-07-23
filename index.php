<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="X-UA-Compatible" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="css/style.css" rel="stylesheet">
     <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

    <title>Grooming Centre</title>
</head>
<body>
      <nav class="navbar navbar-default">
            <ul class="nav navbar-right">
                 <h3 class="topbar"> GROOMING CENTRE <br> MESSAGE BOARD</h3>
            </ul>
</nav>
  <div class="container">
     <div class="col-lg-6"> 

                  <?php 
                    $conn = mysqli_connect("localhost", "root", "", "message");

                    $query = "SELECT * FROM post_message";
                        
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) 
                        {
                          // output data of each row
                              while($row = mysqli_fetch_assoc($query_run)) 
                              {
                                ?>
                                                
           <!-- Circle Buttons -->
                 
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $row["roles"]; ?></h6>
                </div>
                <div class="card-body">
                  <p><?php echo $row["comment"]; ?></p>
                 
                </div>
              </div>

                <?php
                   }

                 }
   
              ?>

            </div>
        </div>
    </div>
</body>
</html>