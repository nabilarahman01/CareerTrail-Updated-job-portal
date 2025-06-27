<?php
include('connection/db.php');

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

if (isset($_POST['submitTopic'])) {
    // Insert new topic into the database
    $jobseeker_id = 1; // Replace with your actual jobseeker_id

    $topicTitle = $_POST['topicTitle'];
    $query = mysqli_query($conn, "INSERT INTO forum_topic (title, created_at, jobseeker_id) VALUES ('$topicTitle', NOW(), $jobseeker_id)");

    if ($query) {
        echo "<script>alert('Topic created successfully')</script>";
    } else {
        echo "<script>alert('Error creating topic')</script>";
    }
}

// Handle submitting comments/answers
if (isset($_POST['submitComment'])) {
    // Insert comment into the database
    $jobseeker_id = 1; // Replace with your actual jobseeker_id

    $commentContent = $_POST['commentContent'];
    $topic_id = $_POST['topic_id'];
    $query = mysqli_query($conn, "INSERT INTO forum_comment (topic_id, content, created_at, jobseeker_id) VALUES ($topic_id, '$commentContent', NOW(), $jobseeker_id)");

    if ($query) {
        echo "<script>alert('Comment submitted successfully')</script>";
    } else {
        echo "<script>alert('Error submitting comment')</script>";
    }
}

// Fetch topics from the database based on search term
$searchCondition = '';
if (!empty($searchTerm)) {
    $searchCondition = " WHERE title LIKE '%$searchTerm%'";
}
$topicsQuery = mysqli_query($conn, "SELECT * FROM forum_topic" . $searchCondition);
$topics = [];
if ($topicsQuery) {
    while ($row = mysqli_fetch_assoc($topicsQuery)) {
        $topics[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Discussion Forum</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS styles */
    body {
      background-image: url('discussion.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      margin: 0;
      padding: 0;
    }
    /* You can add more styles to customize your page further */
  </style>
</head>
<body>
  <div class="container mt-4">
    <h1 class="text-center mb-4">Discussion Forum</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php" style="background-color: #ffcc99; padding: 5px 10px; border-radius: 5px;">ANjobs</a>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="forum.php" class="nav-link" style="font-weight: bold; padding-right: 15px; background-color: #ffd700; padding: 5px 10px; border-radius: 5px;">Refresh</a>
          </li>
          <li class="nav-item" style="margin-left: 10px;">
            <a href="faq.php" class="nav-link" style="font-weight: bold; background-color: #ffd700; padding: 5px 10px; border-radius: 5px;">FAQ</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Search bar -->
    <div class="row mb-4">
      <div class="col-md-6 offset-md-3">
        <form method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search topics" name="search">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Create a Topic -->
    <div class="row">
      <div class="col-md-6">
        <h2>Create a Topic</h2>
        <form id="topicForm" method="post">
          <div class="form-group">
            <label for="topicTitle">Topic Title</label>
            <input type="text" class="form-control" id="topicTitle" name="topicTitle" required>
          </div>
          <button type="submit" name="submitTopic" class="btn btn-primary mb-4">Create Topic</button>
        </form>
      </div>
    </div>

    <!-- Accordion for Topics and Discussions -->
    <div id="accordionTopics">
      <?php
      $colorArray = ['#ff9999', '#99ff99', '#9999ff', '#ffff99']; // Array of colors for comments

      foreach ($topics as $topic):
          $colorIndex = array_rand($colorArray); // Randomly select a color for comments
      ?>
      <div class="card">
        <div class="card-header" id="heading<?=$topic['topic_id']?>">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?=$topic['topic_id']?>" aria-expanded="true" aria-controls="collapse<?=$topic['topic_id']?>">
              <?=$topic['title']?>
            </button>
          </h5>
        </div>
        <div id="collapse<?=$topic['topic_id']?>" class="collapse" aria-labelledby="heading<?=$topic['topic_id']?>" data-parent="#accordionTopics">
          <div class="card-body" style="background-color: <?=$colorArray[$colorIndex]?>;"> <!-- Set background color for comments -->
            <?php
            $topic_id = $topic['topic_id'];
            $commentsQuery = mysqli_query($conn, "SELECT * FROM forum_comment WHERE topic_id = $topic_id");
            if ($commentsQuery) {
                while ($comment = mysqli_fetch_assoc($commentsQuery)) {
                    echo '<div class="list-group-item">';
                    echo '<p>' . $comment['content'] . '</p>';
                    echo '<small class="text-muted">' . $comment['created_at'] . '</small>';
                    echo '</div>';
                }
            }
            ?>
            <form method="post">
              <div class="form-group mt-3">
                <label for="answerInput<?=$topic['topic_id']?>">Your Answer</label>
                <textarea class="form-control" name="commentContent" id="answerInput<?=$topic['topic_id']?>" rows="3"></textarea>
                <input type="hidden" name="topic_id" value="<?=$topic['topic_id']?>">
                <button type="submit" name="submitComment" class="btn btn-primary mt-3">Submit Answer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
