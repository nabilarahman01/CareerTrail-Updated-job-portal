

<?php
include('include/header.php');
include('include/sidebar.php');
?>


   

  
  
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol style="font-size: 20px;" class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Customers</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Customers</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <a class="btn btn-primary" href="add_customer.php">ADD Customer </a>
            </div>
          </div>


          <table id="example" class="display" style="width:100%">
        <thead>
            <tr style="font-size: 15px;">
                <th>Serial Number</th>
                
                <th>Email</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Admin Type</th>
                <th>Action</th>

                
            </tr>
        </thead>
        <tbody>
            
        
        <?php

            include('connection/db.php');
            $query=mysqli_query($conn,"select * from admin_login");
            while ($row = mysqli_fetch_array($query)){ 
            

        ?>
      <tr style="font-size: 15px;">
        <td><?php echo $row['id'];?></td>
        <td> <?php echo $row['admin_email'];?></td>
        <td><?php echo $row['admin_username'];?></td>
        <td><?php echo $row['first_name'];?></td>
        <td><?php echo $row['last_name'];?></td>
        <td><?php echo $row['admin_type'];?></td>
        <td>
          <div class="row">
            <div "btn -group">
              <a href="customer_edit.php?edit=<?php echo $row['id'];?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" ></span></a>
              <a href="customer_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span></a>

              
            </div>
            
          </div>
        </td>
        

      </tr>
    <?php } ?>
    </tbody>


        
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
              
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!--datatables plugin -->
    <script src = "https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src = "https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
      new DataTable('#example');
    </script>
   
  </body>
</html>
