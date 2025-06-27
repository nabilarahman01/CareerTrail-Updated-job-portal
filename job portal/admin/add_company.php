
<?php
include('include/header.php');
include('include/sidebar.php');
?>

<?php
include('connection/db.php');
$query=mysqli_query($conn,"select * from admin_login where admin_type ='2'");


?>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="#">ADD Company</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">ADD Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>
          <div style="width:60%;margin-left:20%; background-color:#F2F4F4  ;">
            
            <form action="" method ="post" style="margin: 5%; padding: 5%;" name="Company_form" id="Company_form">
              <div class="form-group">
                <div id="msg"></div>
                <label for="Company Name">Company Name</label>
                <input type="text" name="Company" id="Company" class="form-control" placeholder="Enter Company Name" >
                
              </div>
              <div class="form-group">

                 <label for="Company Description">Company Description</label>
                <input type="text" name="Description" id="Description" class="form-control" placeholder="Enter Company Description" >
                 </div>

                 
              <div class="form-group">

                 <label for="ADMIN">Company Admin Email</label>
                 <select name="admin" class="form-control" id = "admin">
                  <?php

                  while ($row=mysqli_fetch_array($query)) {?>
                    <option value="<?php echo $row['admin_email'];  ?>"><?php echo $row['admin_email'];  ?> </option>
                    
                  <?php } ?>
                  


                  </select>

               </div>








              
              <div class="form-group">
                
                <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit" >
                
              </div>
              </div>


                
              
              
            </form>

          </div>
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
    <script>
      $(document).ready(function () {
        $("#submit").click(function(){
          var Description=$("#Description").val();
          var Company=$("#Company").val();
           var admin=$("#admin").val();

          
          var data = $("#Company_form").serialize();

          $.ajax({
            type:"POST",
            url:"Company_add.php",
            data:data,
            success:function(data){
              alert(data);
              //$("#msg").html(data);

            }

          });
         

        });
      });
      

    </script>
   
  </body>
</html>
