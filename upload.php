<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://fonts.googleapies.com/css?family=Roboto:300,300italic,800,800italic">
        <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        <link rel="stylesheet" href="goals.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>MyGoal.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" style="background-color: purple">
            <div class="row">
                <div class="col-12">
                    <h3 style="color: purple; margin-top: 100px"> Slider images upload </h3>
                    <hr>
                    <form method="post" enctype="multipart/form-data" action="img-upload.php">
                        <div class="form-group">
                            <label>Image One: </label>
                            <input type="file" name="imgs[]" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image Two: </label>
                            <input type="file" name="imgs[]" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image Three: </label>
                            <input type="file" name="imgs[]" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Image Four: </label>
                            <input type="file" name="imgs[]" class="form-control">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary" style="float: right; background-color: purple">Submit</button>
                    </form>
                </div>
            </div> 
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" 
        crossorigin="anonymous"></script>
    </body>
</html>