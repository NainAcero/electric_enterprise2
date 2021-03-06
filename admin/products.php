<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Lista de productos</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Agregar producto</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Categoria</th>
              <th>Marca</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody id="product_list">
            <!-- <tr>
              <td>1</td>
              <td>ABC</td>
              <td>FDGR.JPG</td>
              <td>122</td>
              <td>eLECTRONCS</td>
              <td>aPPLE</td>
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Delete</a></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nombre del producto</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Ingrese el nombre del producto">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nombre de la marca</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Seleccionar marca</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nombre de la categoría</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Selecciona una categoría</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Descripción del producto</label>
		        		<textarea class="form-control" name="product_desc" placeholder="Ingrese la descripción del producto"></textarea>
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>Cant. De producto</label>
                <input type="number" name="product_qty" class="form-control" placeholder="Ingrese la cantidad del producto">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Precio del producto</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Ingrese el precio del producto">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Palabras clave de producto<small>(por ejemplo: apple, iphone, móvil)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Ingrese las palabras clave del producto">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Imagen del producto<small>(formato: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Agregar producto</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Nombre del producto</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Ingrese el nombre del producto">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Nombre de la marca</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Seleccionar marca</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Nombre de la categoría</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Selecciona una categoría</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Descripción del producto</label>
                <textarea class="form-control" name="e_product_desc" placeholder="Ingrese la descripción del producto"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Cant. De producto</label>
                <input type="number" name="e_product_qty" class="form-control" placeholder="Ingrese la cantidad del producto">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Precio del producto</label>
                <input type="number" name="e_product_price" class="form-control" placeholder="Ingrese el precio del producto">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Palabras clave de producto<small>(por ejemplo: apple, iphone, móvil)</small></label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder="Ingrese las palabras clave del producto">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Imagen del producto<small>(formato: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Actualizar producto</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>