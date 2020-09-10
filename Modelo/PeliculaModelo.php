<?php
    include (dirname(__DIR__).'\Modelo\conexion.php');

    function getPelicula(){
        $conn=openConexion();
           
        $sql = 'SELECT * FROM peliculas';
        $result = $conn->query($sql);
        while($row = $result->fetch_row()) {
            $rows[]=$row;
        }
        closeConexion($conn);
        return json_encode($rows);
    }

    function deletePelicula($id){

        $conn=openConexion();
        $sql = 'DELETE FROM peliculas WHERE id='.$id.';';

        if (mysqli_query($conn, $sql)) {
            echo "Delete";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function addPelicula($Pelicula){

        $conn=openConexion();
           
        $sql = 'INSERT INTO `peliculas` (`id`, `Nombre`, `Fecha`) VALUES (NULL,\''.$Pelicula['Nombre'].'\',\''.$Pelicula['Fecha'].'\');';
    
        $object=mysqli_query($conn, $sql);
    
        echo $conn->insert_id;
    
        closeConexion($conn);
    }
?>