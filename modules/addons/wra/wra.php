<?php
use WHMCS\Database\Capsule;

function wra_config() {
	$users = array ();
	{
		$pdo = Capsule::connection ()->getPdo ();
		$statement = $pdo->prepare ( "SELECT `username` FROM `tbladmins`" );
		$statement->execute ();
		
		foreach ( $statement->fetchAll ( PDO::FETCH_ASSOC ) as $userAdmin ) {
			$users [$userAdmin ['username']] = $userAdmin ['username'];
		}
	}
	
	$configarray = array (
			"name" => "Whmcs RESTful Api",
			"description" => "Addons for expose a RESTful API",
			"version" => "0.1.0",
			"author" => "EneaSys",
			"fields" => array (
					"Licenze" => array (
							"FriendlyName" => "Licenze",
							"Type" => "text",
							"Size" => "25",
							"Description" => "Licenze of WRA" 
					),
					"LicenzeToken" => array (
							"FriendlyName" => "Licenze Token",
							"Type" => "text",
							"Size" => "25",
							"Description" => "Token of licenze" 
					),
					"AccountForApi" => array (
							"FriendlyName" => "Account for Api",
							"Type" => "dropdown",
							"Options" => $users,
							"Description" => "Account user for Api functions" 
					) 
			
			) 
	);
	return $configarray;
}
function wra_activate() {
	try {
		return array (
				'status' => 'success',
				'description' => $risultato 
		);
	} catch ( Exception $e ) {
		echo "Uh oh! {$e->getMessage()}";
		return array (
				'status' => 'error',
				'description' => 'You can use the error status return to indicate there was a problem activating the module' 
		);
	}
}
function wra_deactivate() {
	try {
		return array (
				'status' => 'success',
				'description' => $risultato 
		);
	} catch ( Exception $e ) {
		echo "Uh oh! {$e->getMessage()}";
		return array (
				'status' => 'error',
				'description' => 'You can use the error status return to indicate there was a problem activating the module' 
		);
	}
}
function wra_output($variables) {
	print "LICENZE: " . $variables['Licenze'];
	print "<br />";
	print "LICENZE_TOKEN: " . $variables['LicenzeToken'];
	print "<br />";
	print "ACCOUNT_FOR_API: " . $variables['AccountForApi'];
}

?>