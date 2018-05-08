<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>	
<?php include(HEADER_TEMPLATE); ?>	
<?php $db = open_database(); ?>	
<h1>Trabalho CRUD</h1>	<hr />	
<?php if ($db) : ?>	
	<div class="row">		
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers/add.php" class="btn btn-primary">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-plus fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p> Novo Funcionário</p>					
					</div>				
				</div>			
			</a>		
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers" class="btn btn-default">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-user fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p>Funcionário</p>					
					</div>				
				</div>			
			</a>		
		</div>	
	</div>	
	<hr />
	<div class="row">		
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers/addRegiao.php" class="btn btn-primary">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-plus fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p> Nova Região    </p>					
					</div>				
				</div>			
			</a>		
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers/regiao.php" class="btn btn-default">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-user fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p>Região</p>					
					</div>				
				</div>			
			</a>		
		</div>	
	</div>
	<hr />
	<div class="row">		
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers/addTerritorio.php" class="btn btn-primary">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-plus fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p> Novo Território</p>					
					</div>				
				</div>			
			</a>		
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="customers/territorio.php" class="btn btn-default">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-user fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p>Território</p>					
					</div>				
				</div>			
			</a>		
		</div>	
	</div>

<?php else : ?>		
	<div class="alert alert-danger" role="alert">			
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>		
	</div>	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>