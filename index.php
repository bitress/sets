<?php
include('vendor/autoload.php');

use PhpSets\Set;



$U = new Set(1,2,3,4,5,6,7,8,9,10);
$A = new Set(1,2,3,4,5);
$B = new Set(2,4,6,8,10);
$C = new Set(1,6,7,8);
$D = new Set(1,4,7,8,10);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SETS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

        <div class="container">

            <div class="jumbotron mb-4">
                <h3>Name: Vega, Cyanne Justin L. - BSIT 1B</h3>
                <p>Submitted to: Ma;am Mary Jane Marinas</p>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Symbol</th>
                    <th scope="col">Answer</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Union</td>
                    <td>A U B</td>
                    <td>(<?php echo join(", ", ($A->unison($B)->values())); ?>)</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Union</td>
                    <td>C U D</td>
                    <td>(<?php echo join(", ", ($C->unison($D)->values())); ?>)</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Union</td>
                    <td>A U D</td>
                    <td>(<?php echo join(", ", ($A->unison($D)->values())); ?>)</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Union</td>
                    <td>B U C</td>
                    <td>(<?php echo join(", ", ($B->unison($C)->values())); ?>)</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Union</td>
                    <td>A U C</td>
                    <td>(<?php echo join(", ", ($A->unison($C)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">6</th>
                    <td>Intersect</td>
                    <td>A ∩ B</td>
                    <td>(<?php echo join(", ", ($A->intersect($B)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">7</th>
                    <td>Intersect</td>
                    <td>C ∩ D</td>
                    <td>(<?php echo join(", ", ($C->intersect($D)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">8</th>
                    <td>Intersect</td>
                    <td>A ∩ C</td>
                    <td>(<?php echo join(", ", ($A->intersect($C)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">9</th>
                    <td>Intersect</td>
                    <td>B ∩ C</td>
                    <td>(<?php echo join(", ", ($B->intersect($C)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">10</th>
                    <td>Intersect</td>
                    <td>D ∩ C</td>
                    <td>(<?php echo join(", ", ($D->intersect($C)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">11</th>
                    <td>Symmetric Difference</td>
                    <td>A Δ B</td>
                    <td>(<?php echo join(", ", ($A->symmetricDifference($C)->values())); ?>)</td>
                </tr>

                <tr>
                    <th scope="row">12</th>
                    <td>Symmetric Difference</td>
                    <td>C Δ B</td>
                    <td>(<?php echo join(", ", ($C->symmetricDifference($B)->values())); ?>)</td>
                </tr>


                </tbody>
            </table>

        </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</body>
</html>
