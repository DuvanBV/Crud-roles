<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    /* $row=mysqli_fetch_array($query); */
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Multiusuarios PHP MySQL: Niveles de Usuarios</title>

 <!-- Boostrap -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Data Table -->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/853c6b208c.js" crossorigin="anonymous"></script>

<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>

	<body>
<?php include("../header.php");?>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h1>Pagina Personal</h1>
				<h3>
				<?php
				
				session_start();

				if(!isset($_SESSION['personal_login']))	
				{
					header("location: ../index.php");
				}

				if(isset($_SESSION['admin_login']))	
				{
					header("location: ../admin/admin_portada.php");
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../usuarios/usuarios_portada.php");
				}
				
				if(isset($_SESSION['personal_login']))
				{
				?>
					Bienvenido,
				<?php
					echo $_SESSION['personal_login'];
				}
				?>
				</h3>	
				<div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-primary text-white"><h1>Añadir usuario</h1></div>
                                <div class="card-body bg-light">
                                   <?php include ("../formregistro.php")?>
                                </div>
                            </div>
                            
                              
                        </div>

                        <div class="col-md-8">    
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h1 class="titulo">Usuarios</h1>
                                </div>
                                <div class="card-body bg-light">
                                    <div class="container ">
                                        
                                        <table id="table_id" class="display ">
                                            <thead class="table-primary table-striped bg-primary  text-white" >
                                                <tr>
												<th width="4%">ID</th>
												<th width="18%">Usuario</th>
												<th width="24%">Email</th>
												<th width="19%">Rol</th>
												<th width="24%">Password</th>
												<th colspan="2">Opciones</th>
                                                </tr>
                                            </thead>

                                            <tbody class="">
											<?php
												require_once '../DBconect.php';
												$select_stmt=$db->prepare("SELECT id,username,email,role FROM mainlogin");
												$select_stmt->execute();
												
												while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
												{
												?>
                                                        <tr>
														<td><?php echo $row["id"]; ?></td>
														<td><?php echo $row["username"]; ?></td>
														<td><?php echo $row["email"]; ?></td>
														<td><?php echo $row["role"]; ?></td> 
														<td>*******</td> 
                                                            <td>
                                                                 <!-- Boton para abrir modal de editar-->
                                                                <button type="button" class="btn  btn-outline-secondary" data-toggle="modal" data-target="#modaleditar<?php echo $row['id']; ?>">
                                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                                </button>
                                                                 <!-- Boton para abrir modal de eliminar-->
                                                                 <button type="button" class="btn  btn-outline-danger" data-toggle="modal" data-target="#modaleliminar<?php echo $row['id']; ?>">
                                                                    <i class="fa-regular fa-trash-can"></i></a>
                                                                </button>
                                                            </td>                                       
                                                        </tr>
                                                        <?php include('modaleliminar.php')?>
                                                        
                                                        <?php include('modaleditar.php')?>

                                                        
                                                    <?php }?>
                                            </tbody>
                                        </table>
                                        
                                            <script>
                                                $(document).ready(function() {
                                                $('#table_id').DataTable({
                                                "language": {
                                                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                                                }
                                                });
                                                });
                                            </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
            </div>

			
			</center>
			<br> <br> <br> 
			<a href="../cerrar_sesion.php"><button class="btn btn-danger float-right"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
		
            <hr>
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>