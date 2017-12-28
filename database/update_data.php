 <?php
 if(isset($_POST['update_btn']))
 {
 include('db_connect.php');

$name=$_POST['name'];
$price=$_POST['price'];
$author= $_POST['author'];
$field=$_POST['field'];
$subject= $_POST['subject'];
$speciality= $_POST['speciality'];
$discount= $_POST['discount'];
$bid = $_POST['bid'];
//echo  $name  ;echo  $price  ;echo  $author  ;echo  $field  ;echo  $subject  ;echo  $speciality  ;echo  $discount  ;
$p = "update book SET name='$name',price=$price,author='$author',field='$field',
     subject='$subject',speciality='$speciality',
    discount=$discount

    where bookid=$bid";

mysqli_query($con,$p);

mysqli_close($con);
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('header_files.php');?>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center">ASW</a>
          <ul class="left hide-on-med-and-down">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="show_data.php">SHOW</a></li>
            <li><a href="insert_data.php">INSERT</a></li>
            <li><a href="delete_data.php">DELETE</a></li>
            <li><a href="update_data.php">UPDATE</a></li>
          </ul>
        </div>
      </nav>
    </div>
    </header>
        <div class="row">
        <form class="col s12" method="post" action="update_data.php">
            <div>
                <div class="input-field col s6">
                <i class="material-icons prefix">add</i>
                <input id="b_to_del" type="number" class="validate" name="b_to_del">
                <label for="b_to_del">Book ID to Update</label>
                </div>
            </div>
            <div class="row">
                <div class="col s3"></div>
                <div class="input-field col s6">
                <button class="btn waves-effect waves-light" type="submit" name="num_btn">Enter
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
        </form>
        </div>

        <?php
        if(isset($_POST['num_btn']))
        {
        include('db_connect.php');
        $b_id = 0;
        if(isset($_POST['num_btn'])){
            $b_id = $_POST['b_to_del'];
        }
        $q="select * from book where bookid = $b_id";
        $result=mysqli_query($con,$q);
        $row=mysqli_fetch_array($result);
        //$num=mysqli_num_rows($result);
        ?>


        <div class="row">
            <form class="cols s12" method="post" action="update_data.php">
                <table class="stripped centered highlight responsive-table bordered">
                    <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Field</th>
                        <th>Subject</th>
                        <th>Speciality</th>
                        <th>Discount</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><input  type="number" value="<?php echo $row['bookid'];?>" name="bid" /></td>
                        <td><input type="text" value="<?php echo $row['name'];?>" name="name" /></td>
                        <td><input type="number" value="<?php echo $row['price'];?>" name="price" /></td>
                        <td><input type="text" value="<?php echo $row['author'];?>" name="author" /></td>
                        <td><input type="text" value="<?php echo $row['field'];?>" name="field" /></td>
                        <td><input type="text" value="<?php echo $row['subject'];?>" name="subject" /></td>
                        <td><input type="text" value="<?php echo $row['speciality'];?>" name="speciality" /></td>
                        <td><input type="number" value="<?php echo $row['discount'];?>" name="discount" /></td>
                    </tr>
                    </tbody>
                </table>
                
                <div class="row">
                <div class="input-field col s6">
                <button class="btn waves-effect waves-light" type="submit" name="update_btn" >Update
                    <i class="material-icons right">send</i>    
                </button>
                </div>
                </div>
            </form>
        </div>
    </body>
</html>
        <?php } ?>
