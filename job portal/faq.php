<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <style>
    /* Customize styles here */
    body {
      background-image: url('heh2.png');
      background-size: cover;
      background-repeat: no-repeat;
      color: #333;
    }
    .container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 100vh;
    }
    #accordion {
      width: 80%; /* Adjust the width as needed */
      max-width: 800px; /* Limit maximum width */
      margin-top: 40px;
      margin-left: 600px;
    }
    .accordion-item {
      margin-bottom: 15px;
    }
    .accordion-header {
      background-color: rgba(255, 255, 255, 0.8); /* Adjust the opacity as needed */
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      background-color: #d8b7ff; 
    }
    .accordion-header:hover {
      background-color: rgba(233, 236, 239, 0.8);
       background-color: #c6a1ff; /* Adjust the opacity as needed */
    }
    .accordion-header:focus {
      outline: none;
    }
    .accordion-body {
      padding: 15px 20px;
      border-radius: 0 0 5px 5px;
    }
    .accordion-body p {
      color: #333;
    }
    /* Sky blue background for answers */
    .answer-skyblue {
      background-color: #87ceeb;
    }
  </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="background-color: #ffcc99; padding: 5px 10px; border-radius: 5px;">ANjobs</a>
  <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item">
    <a href="forum.php" class="nav-link" style="font-weight: bold; background-color: #ffd700; padding: 5px 10px; border-radius: 5px;">Join Discussion</a>
  </li>

          </ul>
        </div>
      </div>
  <!-- Rest of your navigation content -->
</nav>


<div class="container">

   
  <div id="accordion">
    <h1 style="text-align: center; font-weight: bold; margin-top: 90px;margin-right: 70px;">Frequently Asked Questions</h1>
    <!-- FAQ Items -->
    <!-- Question 1 -->
    <div class="accordion-item">
      <div class="accordion-header" data-toggle="collapse" data-target="#collapseOne">
        <h5 class="mb-0">Question 1: What is CareerTrail?</h5>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="accordion-body answer-skyblue">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim ullamcorper cursus.</p>
        </div>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="accordion-item">
      <div class="accordion-header" data-toggle="collapse" data-target="#collapseTwo">
        <h5 class="mb-0">Question 2: How can I contact support?</h5>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="accordion-body answer-skyblue">
          <p>You can contact our support team by email at support@example.com or by phone at 1-800-123-4567.</p>
        </div>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="accordion-item">
      <div class="accordion-header" data-toggle="collapse" data-target="#collapseThree">
        <h5 class="mb-0">Question 3: What payment methods do you accept?</h5>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="accordion-body answer-skyblue">
          <p>We accept Visa, Mastercard, American Express, and PayPal for payments.</p>
        </div>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="accordion-item">
      <div class="accordion-header" data-toggle="collapse" data-target="#collapseFour">
        <h5 class="mb-0">Question 4: Is there a refund policy?</h5>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="accordion-body answer-skyblue">
          <p>Yes, we have a 30-day refund policy for most products. Please check our terms for more details.</p>
        </div>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="accordion-item">
      <div class="accordion-header" data-toggle="collapse" data-target="#collapseFive">
        <h5 class="mb-0">Question 5: How do I reset my password?</h5>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="accordion-body answer-skyblue">
          <p>You can reset your password by visiting the "Forgot Password" page and following the instructions provided.</p>
        </div>
      </div>
    </div>


    <!-- Add more FAQ items with similar structure -->
  </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
