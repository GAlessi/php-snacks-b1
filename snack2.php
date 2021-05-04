<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


         <?php

            $name = $_GET['name'];
            $nameLng = strlen ( $name );
            $mail = $_GET['email'];
            $validMail = false;
            $age = $_GET['age'];
            $validAge = is_numeric ($age);

            //verifico che l'email contenga il punto e la chiocciola
            // if (is_numeric(strpos ( $mail , '.')) && is_numeric(strpos ( $mail , '@')) ){ //prima versione che permette il punto a i=0
            if (strpos( $mail , '.')!== false && strpos( $mail , '@')!== false) { //seconda versione che permette il punto a i=0


                $validMail = true;
            }

            //verifico che tutti i parametri siano rispettati
            if ($nameLng > 3 && $validMail && $validAge) {
                echo "Accesso consentito";
            }else {
                echo "Accesso negato";
            }
          ?>
    </body>
</html>
