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
            <center><h2>Insert Books</h2></center>
        </div>
        <div class="row">
        <form class="col s12" method="post" action="i_data.php">
            <div>
                <div class="input-field col s6">
                <i class="material-icons prefix">add</i>
                <input id="numob" type="number" class="validate" name="numob">
                <label for="numob">No. of Books to Add</label>
                </div>
            </div>
            <div class="row">
                <div class="col s3"></div>
                <div class="input-field col s6">
                <button class="btn waves-effect waves-light" type="submit" name="num_btn">Submit
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
        </form>
        </div>
        <div class="row">
            <form class="cols s12" method="post" action="i_data.php">
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
                    <?php
                        $n = 0;
                        if(isset($_POST['num_btn'])){
                            $n = $_POST['numob'];
                        }
                        //echo "$n";
                        for($i=1; $i<=$n; $i++){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><input type="text" name="name<?php echo $i; ?>" /></td>
                        <td><input type="number" name="price<?php echo $i; ?>" /></td>
                        <td><input type="text" name="author<?php echo $i; ?>" /></td>
                        <td><input type="text" name="field<?php echo $i; ?>" /></td>
                        <td><input type="text" name="subject<?php echo $i; ?>" /></td>
                        <td><input type="text" name="speciality<?php echo $i; ?>" /></td>
                        <td><input type="number" name="discount<?php echo $i; ?>" /></td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
                <span><input type="hidden" value="<?php echo $_POST['numob']; ?>"; name="num"></span>
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
 include('db_connect.php');

$num=$_POST['num'];

$cnt=0;
for($i=1; $i<=$num; $i++){
    $iname="name".$i;
    $iprice="price".$i;
    $iauthor="author".$i;
    $ifield="field".$i;
    $isubject="subject".$i;
    $ispeciality="speciality".$i;
    $idiscount="discount".$i;

    $name=$_POST[$iname];
    $price=$_POST[$iprice];
    $author=$_POST[$iauthor];
    $field=$_POST[$ifield];
    $subject=$_POST[$isubject];
    $speciality=$_POST[$ispeciality];
    $discount=$_POST[$idiscount];

    $q="insert into book(name,price,author,field,subject,speciality,discount) values('$name',$price,'$author','$field','$subject','$speciality',$discount)";
    $status=mysqli_query($con,$q);
    if($status) $cnt++;
}
/*if($cnt!=0){
    echo "<div class="row"><i class="material-icons">check</i> $cnt books inserted!</div><br>";
}*/
//echo $num;
mysqli_close($con);
?>