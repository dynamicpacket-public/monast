<?php


/********************************************
 *
 * UI permission extensions
 *  (C) Dynamic Packet 2011
 *
 */

function hasRole($requiredRole)
{
	// get session var
	$isAuthed 	= getValor('login', 'session');
	$server 	= getValor('Server', 'session');
	$username 	= getValor('username', 'session');
	$roles 		= getValor('roles', 'session');

	if($isAuthed && strlen($server) && sizeof($roles) && isset($roles[$server]))
	{
		$roleArray = $roles[$server];
		foreach ($roleArray as $role)
		{
			if(strcasecmp($requiredRole,$role) == 0)
				return true;
		}		
	}

	return false;
}


?>