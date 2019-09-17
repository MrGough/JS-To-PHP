<?php
	
	# INDEX.PHP

?>

<button class="Clicker"> Run JS To PHP </button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


	// INITIATE FUNCTION CALL ON CLICK
	$('.Clicker').on('click', function()
	{
	
		// AJAX POST REQUEST
		$.ajax({
			async: false,
			method: 'POST',
			url: 'Function_Caller.php',
			data:{
				Function:	'ReturnBlue',
				Args:	null
			},
		})
		.done(function( Response )
		{
				alert( Response );
		});
		
		
	});

</script>