<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>snack 1</title>
    </head>
    <body>

        <?php
            $matches =[
                [
                    'homeTeam' => 'Squadra viola',
                    'outTeam' => 'Squadra gialla',
                    'homeScore' => 50,
                    'outScore' => 45
                ],
                [
                    'homeTeam' => 'Squadra verde',
                    'outTeam' => 'Squadra rosa',
                    'homeScore' => 33,
                    'outScore' => 38
                ],
                [
                    'homeTeam' => 'Squadra blu',
                    'outTeam' => 'Squadra arancione',
                    'homeScore' => 12,
                    'outScore' => 13
                ],
                [
                    'homeTeam' => 'Squadra rossa',
                    'outTeam' => 'Squadra nera',
                    'homeScore' => 99,
                    'outScore' => 0
                ]
            ];

            for ($x=0; $x < count($matches); $x++) {
                $match = $matches[$x];

                echo '<h1>'
                    . $match['homeTeam']
                    . ' - '
                    . $match['outTeam']
                    . ' | '
                    . $match['homeScore']
                    . ' - '
                    . $match['outScore']
                . '</h1>';
            }
         ?>

    </body>
</html>
