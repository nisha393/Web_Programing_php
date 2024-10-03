<?php
 $fruits=array('apple','banana','kiwi','grapes','pineapple');
 echo' <h3> Original array</h3>';
for($i=0;$i<count($fruits);$i++)
{
    
    echo $fruits[$i]."<br>";
}
array_push($fruits,'chiku','green apple');
array_shift($fruits);
echo' <h3> edited array</h3>';
for($i=0;$i<count($fruits);$i++)
{
     echo $fruits[$i]."<br>";
}

?>