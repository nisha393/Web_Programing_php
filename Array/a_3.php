<!-- 3. Count Array Elements: -->
<!-- Write a PHP script to count the number of elements in an indexed array using count(). -->
<?php
 $fruits=array('apple','banana','kiwi','grapes','pineapple');
 echo'<h3> Array</h3>';
 for($i=0;$i<count($fruits);$i++)
 {
    echo $fruits[$i]."<br>";
 }

 $count =count($fruits);
 echo'<h3>Array Element Count : '.$count.'</h3>';


?>