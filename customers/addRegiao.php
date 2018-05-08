<?php 	 

require_once('functions.php'); 	  
addRegiao();	
?>

<?php 
include(HEADER_TEMPLATE); 
?>	

<h2>Nova Região</h2>	

<form action="addRegiao.php" method="post">	  
	<!-- area de campos do form -->	  
	<hr />	  
	<div class="row">	    
		<div class="form-group col-md-4">	      
			<label for="name">Descrição</label>	      
			<input type="text" class="form-control" name="regiao['DescricaoRegiao']">	    
		</div>		    	 
	</div>	  	  
	
	<div id="actions" class="row">	  
		<div class="col-md-12">	     
			<button type="submit" class="btn btn-primary">Salvar</button>	
			<a href="regiao.php" class="btn btn-default">Cancelar</a>	  
		</div>
	</div>
</form>	
<?php include(FOOTER_TEMPLATE); ?>