<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="fasalesforce">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Oauth Application</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min.js"></script>
		<script src="../Oauth/app/forceng.js"></script>
		<script src="../Oauth/app/app.js"></script>
		<script src="../Oauth/app/controller.js"></script>
	</head>

	<body>
    	<div class="collapse navbar-collapse" ng-controller="NavbarCtrl">
            <ul class="nav navbar-nav">
                <li><a href="#" ng-click="login()">Login</a></li>
            </ul>    
        </div>
        <div class="container" style="padding-top: 70px;" ng-controller="ContactCtrl">

        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <p><button type="button" class="btn btn-default" ng-click="query()"><i
                        class="glyphicon glyphicon-refresh"></i> Get Contacts</button></p>
                <ul id="list" class="list-group">
                    <a ng-repeat="item in contacts" href="#" class="list-group-item" ng-click="retrieve(item.Id)">{{item.FirstName}} {{item.LastName}}</a>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8">
                <p><button type="button" class="btn btn-default" ng-click="newContact()"><i class="glyphicon glyphicon-plus"></i> New</button></p>
                <form role="form">
                    <div class="form-group">
                        <label for="contactId">Id</label>
                        <input type="text" class="form-control" id="contactId" ng-model="contact.Id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" ng-model="contact.FirstName">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" ng-model="contact.LastName">
                    </div>
                    <button type="button" class="btn btn-default" ng-if="!contact.Id" ng-click="create()">Create</button>
                    <button type="button" class="btn btn-default" ng-if="contact.Id" ng-click="update()">Update</button>
                    <button type="button" class="btn btn-default" ng-if="contact.Id" ng-click="del()">Delete</button>
                </form>
            </div>
        </div>

</div>    
	</body>
</html>
