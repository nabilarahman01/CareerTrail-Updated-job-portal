

<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
?>


   

  
  
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Send Email</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Send Email</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
             
            </div>
          </div>


                      
        <form action="phpmailer.php" method="post" style="border: 5px solid gray; width: 70%;margin-left: 10%; padding: 20px; ">
        <?php

            
            include('connection/db.php');
            

           
           $id=$_GET['id'];
            
            $query=mysqli_query($conn,"select * from job_apply left join all_jobs on job_apply.id_job = all_jobs.job_id  where id='$id'");
            while ($row = mysqli_fetch_array($query)){ 
            

        ?>
        <h1><?php echo strtoupper($row['first_name']); ?> <?php echo strtoupper($row['last_name']); ?></h1>
        <hr>
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label for="">To :</label>
          <td><input type="email" name="to" id="to" class="form-control" value="<?php echo $row['job_seeker'];?>"></td>

        </div >
        <br>
        <div class="form-group">
          <label for="">From :</label>
          <td><input type="email" name="from" id="from" class="form-control" placeholder="from...."></td>

        </div >
        <br>
        <div class="form-group">
          <label for="">Body</label>
          <td><textarea name="body" id="body" class="form-control" cols="30" rows="30"> Dear <?php echo strtoupper($row['first_name']); ?> <?php echo strtoupper($row['last_name']); ?></textarea> </td>

        </div >
        
        <br>
        <?php } ?>
        <input type="submit" name="submit" id="submit" class="btn btn-success btn-block" value="send">
      

    </form>


          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
              
            
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
