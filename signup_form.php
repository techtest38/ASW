<head>
<?php include('layout/header_files.php');?>
</head>
<body>
  <div class="row">
	<div class="col s12">
	  <center><h2> Sign Up </h2>
	  </center>
	</div>
  </div>
  <div class="row">
    <form action="database/db_user.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="first_name">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="signup" name="button" type="submit" value="Sign Up!">
        </div>
      </div>
    </form>
  </div>
        
  </body>