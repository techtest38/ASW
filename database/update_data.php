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
        <div class="row">
            <center><h2>Update Books</h2></center>
        </div>
        <div class="row">
        <form class="col s12" method="post" action="update_data.php">
            <div>
                <div class="input-field col s6">
                <i class="material-icons prefix">add</i>
                <input id="b_to_del" type="number" class="validate" name="b_to_del">
                <label for="b_to_del">Book ID to delete</label>
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
                        <td><input  type="number" value="<?php echo $row['bookid'];?>" name="bookid" disabled="disabled" /></td>
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

<?php

$name="name";
$price="price";
$author="author";
$field="field";
$subject="subject";
$speciality="speciality";
$discount="discount";

$p = "update book
    SET
    
    name='$_POST[$name]',
    
    price=$_POST[$price],
    author='$_POST[$author]',
    field='$_POST[$field]',
    subject='$_POST[$subject]',
    speciality='$_POST[$speciality]',
    discount=$_POST[$discount],

    where bookid=".$_POST['bookid'];


mysqli_query($con,$p);

mysqli_close($con);

?>