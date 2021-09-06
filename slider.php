<!DOCTYPE html>
    <HTML>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" 
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" 
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
        crossorigin="anonymous"></script>

    </head>
    <body style="align-content: center; background-color: purple">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="imgs/1.jpg" alt="goal1">
        <div class="carousel-caption">
            <a href="upload.php"><button style='color: white; margin-bottom: 20px'>Change Slider Photos</button></a>
            <a href="imgs/1.jpg" download><button style='color: white; margin-left: 20px'>Download This Photos</button></a>
        </div>
        </div>

        <div class="item">
        <img src="imgs/2.jpg" alt="goal2">
        <div class="carousel-caption">
            <a href="upload.php"><button style='color: white; margin-bottom: 20px'>Change Slider Photos</button></a>
            <a href="imgs/2.jpg" download><button style='color: white; margin-left: 20px'>Download Slider Photos</button></a>
        </div>
        </div>

        <div class="item">
        <img src="imgs/3.jpg" alt="goal3">
        <div class="carousel-caption">
            <a href="upload.php"><button style='color: white; margin-bottom: 20px'>Change Slider Photos</button></a>
            <a href="imgs/3.jpg" download><button style='color: white; margin-left: 20px'>Download Slider Photos</button></a>
        </div>
        </div>

        <div class="item">
        <img src="imgs/4.jpg" alt="goal4">
        <div class="carousel-caption">
            <a href="upload.php"><button style='color: white; margin-bottom: 20px'>Change Slider Photos</button></a>
            <a href="imgs/4.jpg" download><button style='color: white; margin-left: 20px'>Download Slider Photos</button></a>
        </div>
        </div>
        
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </body>
</HTML>