<?php
include('db_connect.php');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('header_files.php');?>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="row">
            <center><h2>Delete Books</h2></center>
        </div>
        
        <div class="row">
            <form class="cols s12" method="post" action="delete_data.php">
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
                        <th>Select</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                      for($i=1; $i<=$num; $i++)
                      {
                          $row=mysqli_fetch_array($result);
                      ?>	
                          <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $row['name'];?> </td>
                              <td><?php echo $row['price']; ?></td>
                              <td><?php echo $row['author']; ?></td>
                              <td><?php echo $row['field']; ?></td>
                              <td><?php echo $row['subject']; ?></td>
                              <td><?php echo $row['speciality']; ?></td>
                              <td><?php echo $row['discount']; ?></td>
                              <td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i; ?>" /></td>
                          </tr>
                          
                      <?php
                      }
                      ?>
                  </tbody>
                </table>
                <div class="row">
                    <div class="input-field col s6">
                    <button class="btn waves-effect waves-light" type="submit" name="input_btn" >Submit
                        <i class="material-icons right">send</i>    
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


<?php

$size=sizeof($_POST);
for($i=1,$j=1; $i<=$size; $i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index])) //what can be used instead of $index
	{
		$q = "delete from book where bookid=".$_POST[$index];
		mysqli_query($con,$q);
	}
	else
		$i--;
}

mysqli_close($con);

?>