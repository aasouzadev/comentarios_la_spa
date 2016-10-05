<!doctype html> <html lang="pt-br"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Sistema de Comentarios</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>
    
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/comentarioService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->
    

</head> 
<!-- declare our angular app and controller --> 
<body class="container" ng-app="comentarioApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel 5.3 and AngularJS Single Page Application</h2>
        <h4>Sistema de comentários</h4>
    </div>
    
    <!-- NEW COMMENT FORM =============================================== -->
    <form ng-submit="submitComentario()"> <!-- ng-submit will disable the default form action and use our function -->
    
        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="autor" ng-model="comentarioData.autor" placeholder="Name">
        </div>
    
        <!-- COMMENT TEXT -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="texto" ng-model="comentarioData.texto" placeholder="Say what you have to say">
        </div>
    
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
    
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="comentario in comentarios">
        <h3>Comentario #{{ comentario.id }} <small>by {{ comentario.autor }}</h3>
        <p>{{ comentario.texto }}</p>
    
        <p><a href="#" ng-click="deleteComentario(comentario.id)" class="text-muted">Delete</a></p>
    </div>
    
</div> 
</body> 
</html>