<?php 




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to
        fit=no" />
        <title>Promo_Manager</title>
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    </head>
    <body>
    
        <form action="/promo_display.php" method="post">

            <div class="container cadre-contact justify-content-center">
                <div class="row fillform">
                    <div class="container-form col-lg-5 col-sm-10 offset-1 mw-100">
                        <div class="mb-3">
                            <label for="title" class="form-label">TITLE</label>
                            <input type="title" id="title" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">IMAGE</label>
                            <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">TEXT</label>
                            <textarea type="text" id="myText" name="promotionText"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary">SUBMIT</button>
                        </div>

            
                </div>
            </div>
            
            
            

            
        </form>


    </body>
