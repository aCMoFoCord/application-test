<?php

class Person {
	public $id = 0;
	public $first_name = '';
	public $last_name = '';
	public $email = '';

	public function __construct($person){
		$this->id = (Int)$person['id'];
		$this->first_name = (String)$person['first_name'];
		$this->last_name = (String)$person['last_name'];
		$this->email = (String)$person['email'];
	}
}

class People {

	public $persons = [];

	public function __construct($people){
		foreach($people as $person){
			$this->persons[] = New Person($person);
		}
	}
}

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$People = new People($people);
?>

<html ng-app='eBaseApp'>
<head>
	<!doctype html>
	<title>eBASE Developer Application Test - Alternate</title>
	<style>
	body {
		display:flex;
		flex-direction:column;
		font-family: Helvetica, Arial, 'sans-serif';
	}
	.container {
		width:100%;
		max-width:600px;
		margin:20px auto;
	}
	table,
	th,
	td {
		border:1px solid black;
		border-collapse:collapse;
		padding:5px;
	}
	</style>
</head>
<body ng-controller='mainCtrl as mCtrl'>
	
	<div class='container'>
		<table>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Alert</th>
			</tr>
			<?php
			foreach($People->persons as $person){
				$alertText = $person->first_name.' '.$person->last_name.' - '.$person->email;
			?>
			<tr>
				<td><?php echo $person->first_name; ?></td>
				<td><?php echo $person->last_name; ?></td>
				<td><?php echo $person->email; ?></td>
				<td><button type='button' onclick="alert('<?php echo $alertText; ?>');"">Alert!</button></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>

</body>
</html>

