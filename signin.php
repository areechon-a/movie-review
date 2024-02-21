<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Review</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
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

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-signin">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <lable for="inputEmail" class="sr-only">Email address</lable>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address">
          <lable for="inputPassword" class="sr-only">Password</lable>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" id="login-user" type="submit">Sign in</button>
          <br>
        </form>
      </div>
      <div class="col-md-6">
        <form class="form-signin" role="form">
          <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
          <div class="user-info"></div>          
          <lable for="inputNickname" id="nickname" class="sr-only">Nickname</lable>
          <input type="text" id="inputNickname" class="form-control" placeholder="Username">
          <lable for="email-input" class="sr-only">Email address</lable>
          <input type="email" id="email-input" class="form-control" placeholder="Email">
          <lable for="password-input" class="sr-only">Password</lable>
          <input type="password" id="password-input" class="form-control" placeholder="Password" required>

          <button class="btn btn-lg btn-primary btn-block" id="add-newuser" type="submit">Create account</button>
         <br>
        </form>
      </div>
    </div>
  </div>

  <!--ค่อยกลับมาทำ-->
  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="assets/javascript/app.js"> -->

  <!-- Firebase initialisation-->
  <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyBdedeK3jKtHl_v13QewmwsyBdegM2t17A",
      authDomain: "group-project-1-d3ccb.firebaseapp.com",
      databaseURL: "https://group-project-1-d3ccb.firebaseio.com",
      projectId: "group-project-1-d3ccb",
      storageBucket: "group-project-1-d3ccb.appspot.com",
      messagingSenderId: "302886214487"
    };
    firebase.initializeApp(config);
  </script>

  <script type="text/javascript">
    var dataRef = firebase.database();
    var nickname = "";
    var email = "";
    var password = "";

    $('#add-newuser').on('click', function(event) {
      event.preventDefault();

      nickname = $('#inputNickname').val().trim();
      email = $('#email-input').val().trim();
      password = $('#password-input').val().trim();

      dataRef.ref('users').push({
        name: nickname,
        email: email,
        password: password,
        dateAdded: firebase.database.ServerValue.TIMESTAMP
      });
      //empty Input fields after submission
      $('#inputNickname').val("");
      $('#email-input').val("");
      $('#password-input').val("");

      $(".user-info").html("Thank you for creating an account!");

    });
    //Display the data from Firebase
    dataRef.ref('users').on("child_added", function(childSnapshot) {
      console.log(childSnapshot.val().name);
      //$(".user-info").append("<p><span class="user-name">" + childSnapshot.val().nickname + ", thank you for creating an account!</p>");

    })
  </script>
</body>

</html>
