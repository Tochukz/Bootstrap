<?php
$userinfo = [
				'personal_info'=>[ 'username'=>'truetochuks', 'age'=>33],
				'professional_info'=>['position'=>'Senior Dev', 'tech'=>'PHP'],
				'hubbies'=>['sports'=>'Tenise', 'music'=>'Paino']
			];
$userinfo_json = json_encode($userinfo);
// $userinfo_json = json_encode($userinfo, JSON_PRETTY_PRINT);
// $userinfo_json = json_encode($userinfo, JSON_FORCE_OBJECT); //This Seem to be the default flag
echo $userinfo_json
?>