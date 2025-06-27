<?php
$conn=mysqli_connect("localhost","root","","job_portal");

$query=mysqli_query($conn,"select * from admin_login where admin_email= '{$_SESSION['email']}' and admin_type='1' ");
if(mysqli_num_rows($query)>0){




?>


    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" style="font-size: 20px; aria-current="page">Home</li>
  </ol>
</nav>
             
              <li class="nav-item">
                <a class="nav-link" href="Customers.php" style="font-size: 16px;">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php" style="font-size: 16px;">
                  <span data-feather="bar-chart-2"></span>
                  Create Job
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create_company.php" style="font-size: 16px;">
                  <span data-feather="layers"></span>
                  Company
                </a>
              </li>
            </ul>

           
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php" style="font-size: 16px;">
                  <span data-feather="file-text"></span>
                  Category
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
        <?php
        }else{

          ?>

 <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" style="font-size: 17px; aria-current="page">Home</li>
  </ol>
</nav>
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php" style="font-size: 16px;">
                  <span data-feather="bar-chart-2"></span>
                  Create Job
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/job_portal/admin/apply_jobs.php" style="font-size: 16px;">
                   <span data-feather="bar-chart-2"></span>
                  Apply Jobs
                </a>
              </li>
            </ul>
              
            

           
            
          </div>
        </nav>

<?php
}
?>