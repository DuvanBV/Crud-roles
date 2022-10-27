 <!-- Modal -->
 <div class="modal fade" id="modaleditar<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <div class="card">
            <div class="card-header text-white"  style="background-color: #251B37;"><h1>Actualizar datos de <?php echo $row['username'] ?> </h1></div>
                <div class="card-body bg-light">
                    <div class="container mt-5">
                        <form action="update.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    <label for="">Usuario</label>
                                    <input type="text" class="form-control mb-3" name="username" placeholder="username" value="<?php echo $row['username']  ?>">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                    <label for="">Rol</label>
                                    <input type="text" class="form-control mb-3" name="role" placeholder="role" value="<?php echo $row['role']  ?>">
                                    <br>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-outline-warning" value="Actualizar" id="<?php echo $row['id']  ?>">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
