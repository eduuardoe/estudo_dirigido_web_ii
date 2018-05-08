<?php	    
	require_once('functions.php');	    
	regiao();
?>	

<?php 
include(HEADER_TEMPLATE); 
?>	
<header>		
	<div class="row">		
		<div class="col-sm-6">		
			<h2>Região</h2>	
		</div>		
		<div class="col-sm-6 text-right h2">	
			<a class="btn btn-primary" href="addregiao.php"><i class="fa fa-plus"></i> Nova Região</a>		    	
			<a class="btn btn-default" href="regiao.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
		</div>		
	</div>	
</header>	

	<?php if (!empty($_SESSION['message'])) : ?>	

	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">		
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>			
		<?php echo $_SESSION['message']; ?>		
	</div>		
	<?php clear_messages(); ?>	
	<?php endif; ?>	
	<hr>	
	<table class="table table-hover">
		<thead>	
			<tr>		
				<th>Código Região</th>		
				<th width="30%">Descrição</th>								
				<th>Opções</th>		
			</tr>	
		</thead>	
		<tbody>	
			<?php if ($regiaos) : ?>
				<?php foreach ($regiaos as $regiao) : ?>	
					<tr>			
						<td><?php echo $regiao['IDRegiao']; ?></td>	
						<td><?php echo $regiao['DescricaoRegiao']; ?></td>
						
						
						<!-- <td><?php //echo $customer['modified']; ?></td>			-->
						<td class="actions text-right">				
							<a href="view.php?id=<?php echo $regiao['IDRegiao']; ?>" class="btn btn-sm btn-success">
								<i class="fa fa-eye"></i> Visualizar</a>				
							<a href="edit.php?id=<?php echo $regiao['IDRegiao']; ?>" class="btn btn-sm btn-warning">
								<i class="fa fa-pencil"></i> Editar</a>				
<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" id-regiao="<?php echo $regiao['IDRegiao']; ?>">					
								<i class="fa fa-trash"></i> Excluir							</a>			
							</td>		
						</tr>	
					<?php endforeach; ?>	
				<?php else : ?>		
					<tr>			
						<td colspan="6">Nenhum registro encontrado.</td>		
					</tr>	
				<?php endif; ?>	
			</tbody>	
		</table>	
		<?php include(FOOTER_TEMPLATE); ?>