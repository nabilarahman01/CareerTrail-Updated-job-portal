<?php
include('connection/db.php');
  include('include/my_profile.php');
  $query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
  while($row=mysqli_fetch_array($query)){
    $img=$row['img'];
    $name=$row['name'];
    $number=$row['number'];
    $email=$row['email'];



  }
?>
<br>
    <div style="margin-left:22% ; width: 60% ;border: 1px solid gray; padding: 10px;">
      <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data"> 

        <div class="row">
          <div class="col-md-6">
            <img src="profile_img/<?php if(!empty($img)) {echo $img;}else{echo 'logo.png';}   ?>" class="img-thumbnail" alt="Cinque Terre">
            
          </div>
          <div style="margin-left:2% ; width: 90% ;border: 2px solid gray; padding: 10px;">
           <p><?php if(isset($email)) echo $email; ?></p>
         </div>
          <div class="col-md-6">
            
            <input type="file" class ="form-control" name="img" id="img">
          </div>
        </div>
         <br>
          
      
        
     
      <div style="margin-left:1% ;">
        
        <div class="row">
          <div class="col-md-6">
             <td>Your Name :</td>
          </div>
          <div class="col-md-6">
             <td><input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" placeholder="Enter Your Name" class="form-group"></td>
          </div>
        </div>
         
         

    <div class="row">
          <div class="col-md-6">
             <td>Your Date of Birth :</td>
          </div>
          <div class="col-md-6">
             <td><input type="date" name="dob" id="dob" value="<?php if(!empty($dob)) echo $dob; ?>"  placeholder="Enter Your DOB" class="form-group"></td>
          </div>
         
            
          </div>
         
         
         


          


 <div class="row">
          <div class="col-md-6">
             <td>Your Mobile Number :</td>
          </div>
          <div class="col-md-6">
             <td><input type="Number" name="number" value="<?php if(!empty($number)) echo $number; ?>" id="number" placeholder="Enter Your Number" class="form-group"></td>
          </div>
         
             
          </div>
         
         
          <div class="row">
          <div class="col-md-6">
             <td>email :</td>
          </div>
          
         <div class="col-md-6">
             <td><input type="text" name="email" id="email" value="<?php if(!empty($email))  ?>" placeholder="submit email" class="form-group"></td>
          </div>
         </div>
         <div class="form-group">
           <input type="submit" name="submit" id="submit"  placeholder="UPDATE" value="Update" class="btn btn-success">
         </div>


        </div>

      </form>


    </div>
    <br>
   

       <?php
        include('include/footer.php');
    ?>
