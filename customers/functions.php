<?php		
require_once('../config.php');	
require_once(DBAPI);		
$customers = null;	
$customer = null;	
$territorios = null;
$territorio = null;
$regiaos = null;
$regiao = null;


/**	 *  Listagem de Clientes	 */	
function index() {		
	global $customers;		
	$customers = find_all('funcionarios');	
}

function territorio() {
	global $territorios;
	$territorios = find_all('territorios');
}

function regiao() {
	global $regiaos;
	$regiaos = find_all('regiao');
}

function view($id = null) {	  
	global $customer;	  
	$customer = find('customers', $id);	
}

/**	 *  Cadastro de Clientes	 */	
function add() {		  
	if (!empty($_POST['customer'])) {	    	   
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));		   
		$customer = $_POST['customer'];	    
		$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");	    	   
		save('customers', $customer);	    
		header('location: index.php');	  
	}
}

/* Cadastro de Território */
function addterritorio() {		  
	if (!empty($_POST['customer'])) {	    	   
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));		   
		$customer = $_POST['customer'];	    
		$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");	    	   
		save('customers', $customer);	    
		header('location: territorio.php');	  
	}
}

/* Cadastro de Região */
function addRegiao() {		  
	if (!empty($_POST['regiao'])) {	    	   
		//$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));		   
		$regiao = $_POST['regiao'];	    
		//$regiao['modified'] = $regiao['created'] = $today->format("Y-m-d H:i:s");	    	   		
		save('regiao', $regiao);	    
		header('location: regiao.php');	  
	}
}

/**	 *	Atualizacao/Edicao de Cliente	 */	
function edit() {		  
	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));		
	if (isset($_GET['id'])) {		    
		$id = $_GET['id'];		    
		if (isset($_POST['customer'])) {
			$customer = $_POST['customer'];	      
			$customer['modified'] = $now->format("Y-m-d H:i:s");		 
			update('customers', $id, $customer);	      
			header('location: index.php');	 
		} else {		   
			global $customer;	  
			$customer = find('customers', $id);
		} 	 
	} else {	   
		header('location: index.php');	
	}	
}

/**	 *  Exclusão de um Cliente	 */	
function delete($id = null) {		 
	global $customer;	  
	$customer = remove('customers', $id);		 
	header('location: index.php');	
}