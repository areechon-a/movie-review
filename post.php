<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>

	<title>Movie Review</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="post.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
  <script src="script.js"></script>
</head>

<body style="background-color: #dbddf1 ;">

  <header class="navbar"> 
    <div class="max-width">
      <ul class="menu">
        <li class="home"><a href="index.php">Home</a></li>
        <li class="sign-in"><a href="signin.php">Sign In</a></li>
        <li class="post"><a href="post.php">Post</a></li>
      </ul>
    </div>
  </header>
  
<h1 style="text-align: center;">Review</h1>
<p></p>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="Your Username..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="movie">Movie</label>
    </div>
    <div class="col-75">
      <select id="movie" name="movie">
        <?php foreach ($feedback as $item): ?>
          <option><?php echo $item['title']; ?></option>
        <?php endforeach; ?>
      </select>      
        <!-- <option value="Shang Chi">Shang Chi</option>
        <option value="Spiderman Far From Home">Spiderman Far From Home</option>
        <option value="Avengers Endgame">Avengers Endgame</option>
        <option value="Black Widow">Black Widow</option>
        <option value="Captain Marvel">Captain Marvel</option>
        <option value="Thor">Thor Ragnarok</option> -->
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <label for="subject">Rating</label>
    </div>
    <div class="col-75">  
      <input type="radio" id="javascript" name="fav_language" value="1">
      <label for="javascript">1</label>
      <input type="radio" id="javascript" name="fav_language" value="2">
      <label for="javascript">2</label>
      <input type="radio" id="javascript" name="fav_language" value="3">
      <label for="javascript">3</label>
      <input type="radio" id="javascript" name="fav_language" value="4">
      <label for="javascript">4</label>
      <input type="radio" id="javascript" name="fav_language" value="5">
      <label for="javascript">5</label>
      <input type="radio" id="javascript" name="fav_language" value="6">
      <label for="javascript">6</label>
      <input type="radio" id="javascript" name="fav_language" value="7">
      <label for="javascript">7</label>
      <input type="radio" id="javascript" name="fav_language" value="8">
      <label for="javascript">8</label>
      <input type="radio" id="javascript" name="fav_language" value="9">
      <label for="javascript">9</label>
      <input type="radio" id="javascript" name="fav_language" value="10">
      <label for="javascript">10</label>
     </div>
  </div>
    
  <div class="row">
    <div class="col-25">
      <label for="subject">Review</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>

