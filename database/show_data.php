<?php
include('db_connect.php');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!Doctype html>
<html>

 <head>
 <?php include('header_files.php');?>
  <title></title>
 </head>

 <body>
  <header>
	<h1>ASW</h1>
   </header>
  
  <table class="stripped centered highlight responsive-table bordered">
        <thead>
          <tr>
              <th>Book Id</th>
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
          <?php
			for($i=1; $i<=$num; $i++)
			{
				$row=mysqli_fetch_array($result);
			?>	
				<tr>
					<td><?php echo $row['bookid']; ?></td>
                    <td><?php echo $row['name'];?> </td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['field']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['speciality']; ?></td>
                    <td><?php echo $row['discount']; ?></td>
				</tr>
				
			<?php
			}
			?>
        </tbody>
   </table>
 </body>
</html>