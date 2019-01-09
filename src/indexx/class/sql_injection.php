<?php  

class sqlInjection {
	public function check_injection_validate($username)
	{  
		$chk = preg_match('/ /',$username);
		if($chk == 0)
		{
			$chk1 = preg_match('/union/',$username);
			if($chk1 == 0)
			{
				$chk2 = preg_match('/update/',$username);
				if($chk2 == 0)
				{
					$chk3 = preg_match('/delete/',$username);
					if($chk3 == 0)
					{
						$chk4 = preg_match('/=/',$username);    
						if($chk4 == 0)
						{
							return 1; 
						}
						else
						{
							return 0; 
						}
					}
					else
					{
						return 0; 
					}
				}
				else
				{
					return 0; 
				}		
			}
			else
			{
				return 0; 
			}    
		}
		else
		{
			return 0; 
		}		
	}
}

?>  
	