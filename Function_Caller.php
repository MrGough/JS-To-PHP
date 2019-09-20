<?php

	# STORE POSTED DATA
	$Function = $_POST['Function'];
	$Args = $_POST['Args'];
	
	# HANDLE NO FUNCTION PASSED
	if ( !isset($Function) ){ exit(); }
	
	# SET UP CLASS INSTANCE
	require_once 'class.php';
	$Class = new ClassFile();
	
	# CALL FUNCTION WITHIN CLASS
	$Execute_Function_Call = $Class -> Run ($Function, $Args);
	
	# RETURN FUNCTION CALL RESPONSE
	echo json_encode( $Execute_Function_Call );
	
?>
