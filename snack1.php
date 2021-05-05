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
                    'homeTeam' => [
                        'name' => 'Squadra viola',
                        'score' => 50
                    ],
                    'outTeam' => [
                        'name' => 'Squadra gialla',
                        'score' => 45
                    ]
                ],
                [
                    'homeTeam' => [
                        'name' => 'Squadra verde',
                        'score' => 33
                    ],
                    'outTeam' => [
                        'name' => 'Squadra rosa',
                        'score' => 38
                    ]
                ],
                [
                    'homeTeam' => [
                        'name' => 'Squadra arancione',
                        'score' => 15
                    ],
                    'outTeam' => [
                        'name' => 'Squadra blu',
                        'score' => 28
                    ]
                ],
                [
                    'homeTeam' => [
                        'name' => 'Squadra rossa',
                        'score' => 99
                    ],
                    'outTeam' => [
                        'name' => 'Squadra nera',
                        'score' => 0
                    ]
                ]
            ];

            for ($x=0; $x < count($matches); $x++) {
                $match = $matches[$x];

                echo '<h1>'
                    . $match['homeTeam']['name']
                    . ' - '
                    . $match['outTeam']['name']
                    . ' | '
                    . $match['homeTeam']['score']
                    . ' - '
                    . $match['outTeam']['score']
                . '</h1>';
            }
         ?>

    </body>
</html>
