
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">src="./imaG/CocheLogo.png"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compras -  Sistema de Inventario</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("navbar.php");?>

        <div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class="glyphicon glyphicon-edit"></i> Nueva Compra</h4>
		</div>
		<div class="panel-body">
				
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Buscar productos</h4>
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)">
						</div>
						<button type="button" class="btn btn-default" onclick="load(1)"><span class="glyphicon glyphicon-search"></span> Buscar</button>
					  </div>
					</form>
					<div id="loader" style="position: absolute; text-align: center; top: 55px; width: 100%;"></div><!-- Carga gif animado -->
					<div class="outer_div">			<div class="table-responsive">
			  <table class="table">
				<tbody><tr class="warning">
					<th>Código</th>
					<th>Producto</th>
					<th><span class="pull-right">Cant.</span></th>
					<th><span class="pull-right">Precio</span></th>
					<th class="text-center" style="width: 36px;">Agregar</th>
				</tr>
									<tr>
						<td>1</td>
						<td>aleron</td>
						<td class="col-xs-1">
						<div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="cantidad_1" value="1">
						</div></td>
						<td class="col-xs-2"><div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="precio_venta_1" value="5000.00">
						</div></td>
						<td class="text-center"><a class="btn btn-info" href="#" onclick="agregar('1')"><i class="glyphicon glyphicon-plus"></i></a></td>
					</tr>
										<tr>
						<td>2</td>
						<td>rotor</td>
						<td class="col-xs-1">
						<div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="cantidad_2" value="1">
						</div></td>
						<td class="col-xs-2"><div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="precio_venta_2" value="7000.00">
						</div></td>
						<td class="text-center"><a class="btn btn-info" href="#" onclick="agregar('2')"><i class="glyphicon glyphicon-plus"></i></a></td>
					</tr>
									<tr>
					<td colspan="5"><span class="pull-right">
					<ul class="pagination pagination-large"><li class="disabled"><span><a>‹ Prev</a></span></li><li class="active"><a>1</a></li><li class="disabled"><span><a>Next ›</a></span></li></ul></span></td>
				</tr>
			  </tbody></table>
			</div>
			</div><!-- Datos ajax Final -->
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div>
			<!-- Modal -->

			<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required="">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required="" maxlength="255"></textarea>
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required="">
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected="">Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required="" pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			 
			 
			
		  </form></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  
		</div>
	  </div>
	</div>
				<form class="form-horizontal" role="form" id="datos_factura">
				<div class="form-group row">
				  <label for="nombre_cliente" class="col-md-1 control-label">Nro.</label>
				  <div class="col-md-3">
					  <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" rea>
					
				  </div>
                  <label for="tel2" class="col-md-4 control-label">Fecha</label>
                  <div class="col-md-2">
								<input type="text" class="form-control input-sm" id="fecha" value="19/02/2020" readonly="">
							</div>
				
						
				 </div>
						<div class="form-group row">
							<label for="empresa" class="col-md-1 control-label">Usuario</label>
							<div class="col-md-3">
								<select class="form-control input-sm" id="id_vendedor">
																				<option value="1" selected="">Obed Alvarado</option>
																						<option value="2">Miguel Villalba</option>
																			</select>
							</div>
							
							<label for="email" class="col-md-4 control-label">Lote</label>
							<div class="col-md-2">
								<select class="form-control input-sm" id="condiciones">
									<option value="1">Efectivo</option>
									<option value="2">Cheque</option>
									<option value="3">Transferencia bancaria</option>
									<option value="4">Crédito</option>
								</select>
							</div>
						</div>
				
				
				<div class="col-md-9">
					<div class="pull-right">
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
						 <span class="glyphicon glyphicon-plus"></span> Nuevo producto
						</button>
						
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
						 <span class="glyphicon glyphicon-search"></span> Agregar productos
						</button>
						
					</div>	
				</div>
			</form>	
			
		<div id="resultados" class="col-md-12" style="margin-top:10px"></div><!-- Carga los datos ajax -->			
		</div>
	</div>
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>


</body>

</html>