

<?php
include('include/header.php');
include('include/sidebar.php');
?>


   

  
  
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Applied jobs</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Applied jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
             
            </div>
          </div>


                      
        <form action="" style="border: 5px solid gray; width: 70%; margin-left: 10%; padding: 20px; font-size: 16px;">
    <?php
include('connection/db.php');

$id = $_GET['id'];
$query = mysqli_query($conn, "select * from job_apply left join all_jobs on job_apply.id_job = all_jobs.job_id  where id='$id'");
while ($row = mysqli_fetch_array($query)) { 
?>
<div class="form-group">
    <label for="">JOB Title :</label>
    <td><?php echo $row['job_title'];?></td>
</div>
<br>
<div class="form-group">
    <label for="">JOB Description :</label>
    <td><?php echo $row['des'];?></td>
</div>
<br>
<div class="form-group">
    <label for="">Applicant Name :</label>
    <td><?php echo $row['first_name'];?></td>
</div>
<div class="form-group">
    <label for="">Mobile Number :</label>
    <td><?php echo $row['mobile_number'];?></td>
</div>
<br>
<div class="form-group">
    <label for="">Applicant Email :</label>
    <td><?php echo $row['job_seeker'];?></td>
</div>
<div class="form-group">
    <label for="">Applicant Major :</label>
    <td><?php echo $row['major'];?></td>
</div>
<div class="form-group">
    <label for="">Applicant Experience :</label>
    <td><?php echo $row['experience'];?></td>
</div>
<div class="form-group">
    <label for="">Applicant CGPA :</label>
    <td><?php echo $row['cgpa'];?></td>
</div>
<div class="form-group">
    <label for="">Applicant Experties :</label>
    <td><?php echo $row['experties'];?></td>
</div>
<br>
<div class="form-group">
    <label for="">Applicant Resume :</label>
    <td><a href="http://localhost/job_portal/files/<?php echo $row['file']; ?>">SEE RESUME</a></td>
</div>
<br>

<?php
    // Calculate similarity level based on attributes
    $similarity_level = 0;

    if (
        $row['major'] == $row['jmajor'] &&
        $row['experience'] == $row['jexperience'] &&
        $row['cgpa'] == $row['jcgpa'] &&
        $row['experties'] == $row['jexperties']
    ) {
        $similarity_level = 4*25;
    } elseif (
        ($row['major'] == $row['jmajor'] && $row['experience'] == $row['jexperience'] && $row['cgpa'] == $row['jcgpa']) ||
        ($row['major'] == $row['jmajor'] && $row['experience'] == $row['jexperience'] && $row['experties'] == $row['jexperties']) ||
        ($row['major'] == $row['jmajor'] && $row['cgpa'] == $row['jcgpa'] && $row['experties'] == $row['jexperties']) ||
        ($row['experience'] == $row['jexperience'] && $row['cgpa'] == $row['jcgpa'] && $row['experties'] == $row['jexperties'])
    ) {
        $similarity_level = 3*25;
    } elseif (
        ($row['major'] == $row['jmajor'] && $row['experience'] == $row['jexperience']) ||
        ($row['major'] == $row['jmajor'] && $row['cgpa'] == $row['jcgpa']) ||
        ($row['major'] == $row['jmajor'] && $row['experties'] == $row['jexperties']) ||
        ($row['experience'] == $row['jexperience'] && $row['cgpa'] == $row['jcgpa']) ||
        ($row['experience'] == $row['jexperience'] && $row['experties'] == $row['jexperties']) ||
        ($row['cgpa'] == $row['jcgpa'] && $row['experties'] == $row['jexperties'])
    ) {
        $similarity_level = 2*25;
    } elseif (
        $row['major'] == $row['jmajor'] ||
        $row['experience'] == $row['jexperience'] ||
        $row['cgpa'] == $row['jcgpa'] ||
        $row['experties'] == $row['jexperties']
    ) {
        $similarity_level = 1*25;
    }

    // Print similarity level
    $percentage = $similarity_level;
     echo '<div class="form-group">';
    echo 'Compatibility: ' . $similarity_level . '%';
    echo '<div class="progress" style="height: 25px;">';
    echo '<div class="progress-bar bg-success" role="progressbar" style="width: ' . $percentage . '%" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100">' . $percentage . '%</div>';
    echo '</div>';
    echo '</div>';
    ?>
<?php } ?>


       
       <a href="apply_jobs.php" class="btn btn-danger">Back</a>
              

    </form>



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
