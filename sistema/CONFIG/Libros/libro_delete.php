<?php
    include("./header.php");
    include("../../conexion/bd.php");

    $sql="SELECT * FROM `libros` WHERE ESTADO='0'";
    $Resultado= mysqli_query($conn, $sql);
?>

<main>
<section>
    <table id="tabla_id">
        <thead>
            <tr>
                <th>ID</th>
                <th>MATERIA</th>
                <th>AÑO</th>
                <th>PDF</th>
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
                <th> <?php ECHO $row['MATERIA']?> </th>
                <th> <?php ECHO $row['ANO']?> </th>
                <th>
                <a class="icons" href="./PDF/<?php ECHO $row['LIBRO']?>" target="_blank">
                        <i class='bx bxs-file-pdf'></i>
                    </a>
                    
                </th>
                <th> <?php ECHO $row['ESTADO']?> </th>
                <th>
                    <a class="icons" href="./activar.php?ID=<?php ECHO $row['ID']?>" onclick='return confirmar()'>
                        <i class='bx bx-book-add'></i>
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
        "pageLength":10,
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