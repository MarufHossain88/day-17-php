<?php


$result=' ';
if (isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName=new FullName();
    $result=$fullName->myCalculator($_POST);

}

?>





<form action="" method="post">
    <table>
        <tr>
            <th>First number</th>
            <td><input type="text" value="<?php echo $_POST['first_number'];?>" name="first_number"></td>
        </tr>
        <tr>
            <th>Second number</th>
            <td><input type="text" value="<?php echo $_POST['second_number'];?>" name="second_number"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>
