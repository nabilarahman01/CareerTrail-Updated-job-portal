
<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
include('connection/db.php');
$query=mysqli_query($conn,"select * from job_category ");


?>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb"style="font-size: 20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="Job_create.php">All Job List</a></li>
    <li class="breadcrumb-item"><a href="#">ADD Job</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">ADD Job</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>
          <div style="width:60%;margin-left:20%; background-color:#F2F4F4  ;">
            
            <form action="" method ="post" style="margin: 5%; padding: 5%;" name="job_form" id="job_form">
              <div class="form-group">
                <div id="msg"></div>
                <label for="Company Name">Job Title</label>
                <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter Job title" >
                
              </div>
               <div class="form-group">

                 <label for="Job Description">Job Description</label>
                <input type="text" name="Description" id="Description" class="form-control" placeholder="Enter Company Description" >

                </div>

                <div class="form-group">

                 <label for="Enter Keyword">Enter Keyword</label>
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Enter Keyword" >

                </div>



                <div class="form-group">

                 <label for="Country">Country</label>
                <input type="text" name="country" id="countryId" class="form-control" placeholder="Enter Country">

                </div>
                <div class="form-group">

                 <label for="State">State</label>
                <input type="text" name="state" id="stateId" class="form-control" placeholder="Enter State">

                </div>
                <div class="form-group">

                 <label for="City">City</label>
                <input type="text" name="city" id="cityId" class="form-control" placeholder="Enter City">

                </div>

                <div class="form-group">

                 <label for="jmajor">Major</label>
                <input type="text" name="jmajor" id="jmajor" class="form-control" placeholder="Required Major">

                </div>
                <div class="form-group">

                 <label for="jexperience">Experience</label>
                <input type="text" name="jexperience" id="jexperience" class="form-control" placeholder="Required Experience">

                </div>

                <div class="form-group">

                 <label for="jcgpa">CGPA</label>
                <input type="text" name="jcgpa" id="jcgpa" class="form-control" placeholder="Required CGPA">

                </div>
                <div class="form-group">

                 <label for="jexperties">Experties</label>
                <input type="text" name="jexperties" id="jexperties" class="form-control" placeholder="Experties">

                </div>
               
                

              
                


              

                



                

              

              
              <div class="form-group">
                
                <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit" >
                
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
    <script>
      $(document).ready(function () {
        $("#submit").click(function(){
          var Description=$("#Description").val();
          var job_title=$("#job_title").val();
          var keyword=$("#keyword").val();
          var countryId=$("#countryId").val();
          var stateId=$("#stateId").val();
          var cityId=$("#cityId").val();
          var jmajor=$("#jmajor").val();
          var jexperience=$("#jexperience").val();
          var jcgpa=$("#jcgpa").val();
          var jexperties=$("#jexperties").val();

         
          


          if (job_title == '') {
            alert("Please Enter Job Title");
            return false;
          }

          if (Description == '') {
            alert("Please Enter Description");
            return false;
          }
          if (countryId == '') {
            alert("Please Enter Country");
            return false;
          }
          if (stateId == '') {
            alert("Please Enter State");
            return false;
          }

          if (cityId == '') {
            alert("Please Enter City");
            return false;
          }
          if (jmajor == '') {
            alert("Please Enter major");
            return false;
          }
          if (jexperience == '') {
            alert("Please Enter experience");
            return false;
          }
          if (jcgpa == '') {
            alert("Please Enter CGPA");
            return false;
          }
          if (jexperties == '') {
            alert("Please Enter your experties");
            return false;
          }
          
          var data = $("#job_form").serialize();

          $.ajax({
            type:"POST",
            url:"add_new_job.php",
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
