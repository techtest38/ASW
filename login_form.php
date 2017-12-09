<head>
<?php include('layout/header_files.php');?>
</head>
<body>
  <div class="row">
	<div class="col s12">
	  <center><h2> Login </h2>
	  </center>
	</div>
  </div>
  <div class="row">
    <form action="database/db_user.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username" name="username">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="login" name="button" type="submit" value="Login">
        </div>
      </div>
    </form>
  </div>
        
  </body>