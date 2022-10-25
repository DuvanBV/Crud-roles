 <!-- Modal -->
 <div class="modal fade" id="modalaggrol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <div class="card">
            <div class="card-header bg-primary text-white"><h1>Agregar nuevo rol</h1></div>
                <div class="card-body bg-light">
                    <div class="container mt-5">
                        <form action="insertarrol.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    <input type="text" class="form-control mb-3" name="nombre_rol" placeholder="Ingrese nombre del rol" value="">
                                    <br>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-outline-primary" value="Agregar" id="">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>