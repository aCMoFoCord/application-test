<html ng-app='eBaseApp'>
<head>
	<!doctype html>
	<title>eBASE Developer Application Test</title>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script src="app.js"></script>
	<link rel='stylesheet' href='style.css' />
</head>
<body ng-controller='mainCtrl as mCtrl'>
	
	<div class='container'>
		<h1>People</h1>
		<div ng-show='mCtrl.loading' class='loader'>Loading ...</div>
		<table ng-hide='mCtrl.loading'>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Alert</th>
			</tr>
			<tr ng-repeat='p in mCtrl.people'>
				<td>{{::p.first_name}}</td>
				<td>{{::p.last_name}}</td>
				<td>{{::p.email}}</td>
				<td><button type='button' ng-click='mCtrl.alertPerson(p);'>Alert!</button></td>
			</tr>
		</table>
	</div>

</body>
</html>

