<?php
    include("./header.php");
    include("../../conexion/bd.php");
    $sql="SELECT * FROM `profesor` WHERE ESTADO='1'";
    $Resultado= mysqli_query($conn, $sql);
?>

<main>

<section>
    <table id="tabla_id">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>FOTO</th>
                <th>CARGO</th>
                <th>ESTADO</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($Resultado) {
                while ($row = $Resultado ->fetch_array()) {   
            ?>
            
            <tr> 
                <th> <?php ECHO $row['ID']?> </th>
                <th> <?php ECHO $row['NOMBRE']?> </th>
                <th> <?php ECHO $row['APELLIDO']?> </th>
                <th> 
                    <?php if ($row['FOTO'] != '') { ?>
                        <img  src="./foto_perfil/<?php echo $row['FOTO']; ?>" class="perfil"> 
                    <?php } ?> 
                </th>
                <th> <?php ECHO $row['CARGO']?> </th>   
                <th> <?php ECHO $row['ESTADO']?> </th>
                <th class="Acciones">
                    <a class="icons" href="./delete.php?ID=<?php ECHO $row['ID']?>" onclick='return confirmar()'>
                        <i class='bx bx-trash'></i>
                    </a>

                    <a class="icons" href="./edit.php?ID=<?php ECHO $row['ID']?>">
                        <i class='bx bx-edit'></i>
                    </a>
                </th>
            </tr>
            
            <?php
             } }    
            ?>

        </tbody>
    </table>
</section>
</main>
<footer>
    <script>
        $(document).ready( function(){
        $("#tabla_id").DataTable({
        "pageLength":8,
        lengthMenu:[
            [10,25,50],
            [10,25,50]
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
        }
        });
        });
    </script>
</footer>
</body>
</html>