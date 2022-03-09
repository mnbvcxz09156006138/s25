<?php
$db = new mysqli("localhost","root","","quizer2");
if($db->connect_error)
{
    echo"ای وای ای وای";

}
else
{
    $db->query("SET CHARACTER SET utf8");
}
?>