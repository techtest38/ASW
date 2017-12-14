
<!Doctype html>
<html>

 <head>
  <?php include('header_files.php');?>
  <title></title>
 </head>

 <body>
  <header>
	<center><h1>ASW</h1></center>
  </header>
  
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">book</i>
          <input id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">monetization_on</i>
          <input id="price" type="number" class="validate">
          <label for="price">Price</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="author" type="text" class="validate">
          <label for="author">Author</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">school</i>
          <input id="field" type="text" class="validate">
          <label for="field">Field</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">layers</i>
          <input id="subject" type="text" class="validate">
          <label for="subject">Subject</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">insert_comment</i>
          <input id="speciality" type="text" class="validate">
          <label for="speciality">Speciality</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <i class="material-icons prefix">local_offer</i>
          <input id="discount" type="number" class="validate">
          <label for="discount">Discount</label>
        </div>
      </div>
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s6">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
    </form>
  </div>
 </body>
</html>


<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];



$q="insert into book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>