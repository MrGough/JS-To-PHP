<?php

	class ClassFile
	{
		
		# RUN FUNCTION CALL
		public function Run ($Function, $Args)
		{
			return $this-> {$Function} ($Args);
		}
		
		# TESTING CLASS FUNCTION
		private function ReturnBlue ($Args)
		{
			return 'Blue';
		}
		
	}

?>