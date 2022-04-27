<html>
    
    <head>
        <title> SITE EM PHP 2</title>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
            <!-- para executar o JS, importar desde site -->

        <style type="text/css"> /* trecho de CSS */

            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }

        </style>
    </head>
        <body>
            <?php
                for ($i = 0; $i < 10; $i++){
                    print ("<span class=\"linha\">Linha número {$i}<br></span>");
                }
            ?>
        </body>
            <script type="text/javascript"> // trecho JavaScript
                $(document).ready(function(){
                    alert("Wohooo!");
                });
            </script>
</html>