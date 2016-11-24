<?php
function get_connection()
{
   return new PDO('mysql:host=localhost;dbname=sfuuvgea_chilesandbeer_test;charset=utf8mb4', 'root', '');
}?>