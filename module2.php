<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="./js/myAppModule.js"></script>

<style>
 
    body{
		font-family: "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, sans-serif;        		
		}
 
    div {
	    margin: 20px;
		padding: 20px;
		font-size: 16px;
		color:#ffffff;
		}
 
     #red {
		background-color: red;
		}
 
     #green {
		 background-color: green;
		}
 
     #blue {
		 background-color: blue;
		 }
 	 #purple {
		 background-color: purple;
		 }
 
        #gray {
			background-color: gray;
			}
 
        #olive {
			background-color: olive;
			}
 
 
    </style> 
 
</head>

<body ng-app="myAppModule" ng-controller="myProductDetailCtrl">
 
<h2>AngularJS Socks</h2>
 
<p>Keep warm this winter with our 100% wool, 100% cool, AngularJS socks!</p>
 
<button ng-click="showHideColors()" type="button"> 
{{isHidden ? 'Show Available Colors' : 'Hide Available Colors'}}
</button>
 
<div id="red" ng-hide="isHidden">Red</div>
<div id="green" ng-hide="isHidden">Green</div>
<div id="blue" ng-hide="isHidden">Blue</div>
<div id="purple" ng-hide="isHidden">Purple</div>
<div id="gray" ng-hide="isHidden">Dark Slate Gray</div>
<div id="olive" ng-hide="isHidden">Olive</div>
 
</body>
</html>