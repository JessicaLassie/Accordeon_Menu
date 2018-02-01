<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Menu accordéon : Les lecteurs par ville</title>

        <link href="../lib/jquery/ui/jquery-ui.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="../css/accordeon.css" rel="stylesheet" type="text/css" />
        
        <script src="../lib/jquery/jquery.js"></script> 
        <script src="../lib/jquery/ui/jquery-ui.js"></script>
        <script>
            // ------------
            function init() {
                // --- La balise qui sert d'en-tete de soufflet
                $("#accordeon").accordion({header: "h5"});
            }

            $(document).ready(init);
        </script>
    </head>

    <body>
        <div id="centre">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <h3 class="titre">Les lecteurs par ville</h3>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <div id="accordeon">
                        <?php
                        require_once '../controls/AccordeonCTRL.php';
                        ?>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
    </body>
</html>
