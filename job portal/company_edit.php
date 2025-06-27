<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
$id=$_GET['edit'];

$query = mysqli_query($conn,"select * from company where company_id = '$id'");
while($row=mysqli_fetch_array($query)){
	$company_name= $row["company"];
	$des= $row["des"];
  $admin= $row["admin"];
	


}

  ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/job_portal/admin/create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="#">Update Company</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>
          <div style="width:60%;margin-left:20%; background-color:#F2F4F4  ;">
            
            <form action="" method ="post" style="margin: 5%; padding: 5%;" name="customer_form" id="customer_form">
              <div class="form-group">
                <div id="msg"></div>
                <label for="Company Name">Enter Company Name</label>
                <input type="Company" name="Company" id="Company" value="<?php  echo $company_name;   ?>" class="form-control" placeholder="Company Name" >
                
              </div>
              <div class="form-group">
                <label for="Company Description">Enter Description</label>
                <input type="text" name="des" id="des" value="<?php  echo $des;   ?>"class="form-control" placeholder="Enter Description" >
                
              </div>
              <div class="form-group">

                 <label for="ADMIN">Company Admin Email</label>
                 <select name="admin" class="form-control" id = "admin">
                  <?php
                  include('connection/db.php');
                  $sql=mysqli_query($conn,"select * from admin_login where admin_type ='2'");

                  while ($row=mysqli_fetch_array($sql)) {?>
                    <option value="<?php echo $row['admin_email'];  ?>"><?php echo $row['admin_email'];  ?> </option>
                    
                  <?php } ?>
                  


                  </select>

               </div>

                <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']?>">
              <div class="form-group">
                
                <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit" >
                
              </div>
              </div>


                
              
              
            </form>

          </div>


          
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

<?php
	include('connection/db.php');
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$company=$_POST['Company'];
		$des=$_POST['des'];
    $admin=$_POST['admin'];
		
		$query1=mysqli_query($conn,"update company set company='$company',des='$des',admin='$admin' where company_id='$id'");
		if ($query1) {
		echo "<script> alert('Record has been updated successfully')</script>";
	
	}else
{
	echo "<script> alert('ERror')</script>";
		}
	}
	


  ?>