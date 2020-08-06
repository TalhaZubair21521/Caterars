<?php
include 'Classes/Order.php';
$u=new Order(0,"asd","asds","asdasd","asdas","324234",0);
$result=$u->ViewOrders();
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Caterars</title>
      <link rel="stylesheet" href="cssfiles/bootstrap.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="cssfiles/fontastic.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="cssfiles/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="cssfiles/custom.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
      <link rel="stylesheet" href="custom.css">
</head>

<body>
<div>
            <nav class="navbar navbar-expand-md navbar-custom">
                  <ul style="padding-left:50px;" class="navbar-nav">
                        <li class="nav-item">
                              <h3 style="color:white;">Admin</h3>
                        </li>
                  </ul>
                  <ul style="padding-left:30px;" class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" href="user.php">User</a>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" href="order.php">Order</a>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" href="food.php">Food</a>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                  </ul>
            </nav>
      </div>




      <div class="col-lg">
    <div class="card">
      <div class="card-header">
        <h4>Order Details</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover" >
            <thead>
              <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>User name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Booking Time</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Delivered</th>
              </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch()){ ?>
                  <tr>
                        <td> <?php echo $row['or_id'] ?> </td>
                        <td><?php echo $row['u_id'] ?></td>
                        <td><?php echo $row['f_name']." ".$row['l_name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['contact_no'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td><?php echo $row['total_price'] ?></td>
                        <?php if($row['delivery']==0){
                                    echo "<td class='text-warning'>Pending</td>";
                                  }else{
                                        echo "<td class='text-success'>Delivered</td>";
                                  } ?></td>
                        <td><a href="phpfunctions/delivered.php?id=<?php echo $row['or_id']; ?>">Delivered</a></td>
                  </tr>
                  <?php } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>
</html>