<?php
include("../config.php");


if (!isset($_SESSION['username']))
{   
    header("Location: login.php"); 
} else {
     // The user is already loggedin, so we show the userbox.
    $authenticate = mysqli_query($conn, "SELECT * FROM `users` where `id` == " . $_SESSION['loginid']);
}

?>

<html>
<head>
<link rel="stylesheet"  href="../css/bootstrap.min.css" /> 
<link rel="stylesheet"  href="../css/bootstrap-theme.min.css" /> 
<link rel="stylesheet"  href="../css/style.css" /> 
</head>
<body>
<div class="container" id="home">
    <div class="row header">
        <div class="col-lg-6 header-left">
            <a href="index.php" class="header-logo"></a>
            <div class="header-title">
                <h4>Federal Deposit<br>Insurance Corporation</h4><h5>Each depositor insured to at least $250,000 per insured bank</h5>
            </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 header-right">
            <!-- <input type="text" placeholder="Search FDIC..." class="form-control search"> -->
        </div>
    </div>
    <div class="row menu">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="index.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Webcast <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="live.php">Live Webcasts</a></li>
                    <li><a href="archived.php">Archived Webcasts</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="addwebcast.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Add New Webcast</a>
                </li>
                <li class="dropdown">
                  <a href="logout.php" role="button" aria-haspopup="true" aria-expanded="false">Logout</a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="row body">
      <div class="bs-example" data-example-id="striped-table">
          <h3>Live Webcast List</h3>
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Flag</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
            <?php 
              $query = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` = 'Live' ORDER BY `datetime` DESC");
              $count = mysqli_num_rows($query);
              if($count != 0){
              while($row = mysqli_fetch_array($query)){
            ?>
               <tr>
                  <td><?php echo $row["title"]; ?></td>
                  <td><?php echo $row["type"]; ?></td>
                  <td><?php echo $row["flag"]; ?></td>
                  <td><?php echo $row["category"]; ?></td>
                  <td><?php echo $row["datetime"]; ?></td>
                  <td><a href="editwebcast.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a></td>
                  <td>
	                  <a data-toggle="modal" data-target="#deletemodal<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
	                  <!-- Modal -->
	                  <div class="modal fade" id="deletemodal<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                    <div class="modal-dialog" role="document">
	                      <div class="modal-content">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                          <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
	                        </div>
	                        <div class="modal-body">
	                          Are you sure you want to delete this webcast?
	                        </div>
	                        <div class="modal-footer">
	                          <a href="deletewebcast.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
                  </td>
               </tr>
            <?php }
                  }else{
            ?>
               <tr><td align="center" colspan="6">There are no Live Webcasts available.</td></tr>
            <?php
                  }
             ?>
            </tbody>
         </table>
      </div>
    </div>
</div>
<script src="../js/jquery-1.11.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>