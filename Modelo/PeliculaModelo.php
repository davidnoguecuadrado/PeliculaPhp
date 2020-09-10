<?php
    include (dirname(__DIR__).'\Modelo\conexion.php');

    function getPeople(){
        $conn=openConexion();
           
        $sql = 'SELECT * FROM peliculas';
        $result = $conn->query($sql);
        while($row = $result->fetch_row()) {
            $rows[]=$row;
        }
        closeConexion($conn);
        return json_encode($rows);
    }

    function deletePeople($id){

        $conn=openConexion();
        $sql = 'DELETE FROM peliculas WHERE id='.$id.';';

        if (mysqli_query($conn, $sql)) {
            echo "Delete";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>