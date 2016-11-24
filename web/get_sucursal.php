<?php
require ('db_helper.php');
$db=get_connection();
if(isset($_GET['id']))
{
    $stmt=$db->prepare('select * FROM sucursales WHERE id=:id');
    $stmt->execute(array(':id'=>$_GET['id']));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    echo jsonify_direction_record($row);
}
elseif (isset($_GET['all']))
{
    $response='{
    "data":[
    ';
    $i=0;
    $rows=$db->query('select * FROM sucursales');
    $row_count=$rows->rowCount();
    foreach ($rows as $row)
    {
        $i++;
        $response.=jsonify_direction_record($row);
        if($i<$row_count)$response.=",";
    }
    $response.="]}";
    echo $response;
}
function jsonify_direction_record($row)
{
    return  '{"nombre": "'.$row['nombre'].'",'.
    '"direccion": "'.$row['direccion'].'",'.
    '"telefono":"'.$row['telefono'].'"
  }';
}