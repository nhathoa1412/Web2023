<form action="helloworld2.php" method="post">
    <input type="text" name="name">
    <input type="text" name="hobby">
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])&&$_POST['submit']){
    $name=$_POST['name'];
    $hobby=$_POST['hobby'];
    echo '<table>
            <tr><td>My Name Is</td><td>:</td><td>' .$name. '</td><tr>
            <tr><td>Hobby</td><td>:</td><td>' .$sothich. '</td><tr>
          </table>';
}
?>