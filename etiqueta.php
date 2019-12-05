<table>
<?php
print_r($array = $_POST['array']);
foreach($array as $value){
    if(array_search($value,$array)%2==0){
        echo '<tr><td>'.$array[$value].'</td>';
    }
    else{
        echo '<td>'.$value.'</td>';
    }
}
?>
</table>