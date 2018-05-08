<?php 	 

require_once('functions.php'); 	  
addterritorio();	
?>

<?php 
include(HEADER_TEMPLATE); 
?>	

<h2>Novo Território</h2>	

<form action="add.php" method="post">	  
	<!-- area de campos do form -->	  
	<hr />	  
	<div class="row">	    
		<div class="form-group col-md-4">	      
			<label for="name">Descrição</label>	      
			<input type="text" class="form-control" name="customer['name']">	    
		</div>		    	 
		<div class="form-group col-md-4">	      
			<label for="name">Região</label>	      
			<select class="form-control" name="customer['name']">	    
			</select>
		</div>	
	</div>	  	  


	<div id="actions" class="row">	  
		<div class="col-md-12">	     
			<button type="submit" class="btn btn-primary">Salvar</button>	
			<a href="index.php" class="btn btn-default">Cancelar</a>	  
		</div>
	</div>
</form>	
<?php include(FOOTER_TEMPLATE); ?>