<!DOCTYPE html>
<html ng-app="ipatApp">
<head>
  <!-- SCROLLS -->
  <!-- load bootstrap and fontawesome via CDN -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />
  <link rel="stylesheet" href="css/style.css">

  <!-- SPELLS -->
  <!-- load angular and angular route via CDN -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.5/angular.min.js"></script>
      <script src="//code.angularjs.org/1.3.0-rc.5/angular-route.min.js"></script>
      <script src="//code.angularjs.org/1.3.0-rc.5/angular-animate.min.js"></script>
  <script src="js/controllers/GeneralController.js"></script>
</head>
<body>

	<!-- HEADER AND NAVBAR -->
	<header>
		<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">Angular Routing Example</a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="#login"><i class="fa fa-key"></i> Login</a></li>
				<li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
			</ul>
		</div>
		</nav>
	</header>

	<!-- MAIN CONTENT AND INJECTED VIEWS -->
	<div id="main">

		<!-- angular templating -->
		<!-- this is where content will be injected -->
		<div ng-view class="view"></div>

	</div>

</body>
</html>