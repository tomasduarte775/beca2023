<?php include_once 'templates\header.php' ?>

<div class="contenedor">
    <div class="container-row">
        <div class="fila">
            <div class="buscar-container">
                <input type="text" class="buscar" placeholder="BUSCAR" id="buscarEmpresa">
            </div>
            <div class="cantPaginas-container">
                <select id="cantidadPagina" class="cantPaginas">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

        </div>
    </div>
    
    <div class="table-responsive">
        <table id="dt_empresa" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Empresas</td>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>  
                        <td>' . $row["nombreEmpresa"] . '</td>  
                    </tr>';
            }
            ?>
        </table>
    </div>
</div>


<?php include_once 'templates\footer.php' ?>$sql = "SELECT * FROM empresas ORDER BY ID DESC";
