<?php
//echo '<pre>';
//print_r($_POST);

//echo isset($_POST);

//$x=44;
//echo isset($x);


$result=' ';
if (isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName= new FullName();
    $result=$fullName->makeFullName($_POST['first_name'],$_POST['last_name']);
}




//$firstName= $_POST['first_name'];
//$lastName= $_POST['last_name'];
//$fullName= $firstName.' '.$lastName;
//echo $fullName;


?>



<form action="" method="post">
<table>
    <tr>
        <th>First name</th>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <th>Last name</th>
        <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
        <th>Full name</th>
        <td><input type="text" name="full_name" value="<?php echo $result;?>"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="submit"></td>
    </tr>
</table>
</form>