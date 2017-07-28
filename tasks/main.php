<?php

include "task.php";
include "task1.php";
include "task2.php";
include "task3.php";
include "task4.php";
include "task5.php";

/////// 1.Chess board////////////////////////////
$board_width = 6;
$board_heigth = 4;
$board_sign = "*";

try {
    $newchessboard = new ChessBoard($board_width, $board_heigth, $board_sign);
    $res = $newchessboard->resolveString();
    ViewChessBoard($board_width, $board_heigth, $board_sign, $res);
} catch (Exception $e) {
    echo '<h1>{status: "failed", reason:"' . $e->getMessage() . '"}</h1>';
}
////////////////2.Enelyse envelopes/////////////////
$envelope_a = 5.7;
$envelope_b = 4.7;
$envelope_c = 5.6;
$envelope_d = 4.6;

try {
    $envelope1 = new Envelope($envelope_a, $envelope_b);
    $envelope2 = new Envelope($envelope_c, $envelope_d);
    $result = $envelope1->compareTo($envelope2);
    $result = $envelope1->resolveString();
    ViewEnelyseEnvelopes($envelope_a, $envelope_b, $envelope_c, $envelope_d, $result);
} catch (Exception $e) {
    echo '<h1>{status: "failed", reason:"' . $e->getMessage() . '"}</h1>';
}

//////////////// 3.Sort triangles //////////////////////////////////////////
$triangle1 = "ABC";
$triangle1_a = 4;
$triangle1_b = 5;
$triangle1_c = 6;

$triangle2 = "BCD";
$triangle2_a = 5;
$triangle2_b = 5;
$triangle2_c = 5;

$triangle3 = "CBD";
$triangle3_a = 4;
$triangle3_b = 4;
$triangle3_c = 4;

$triangle4 = "EBD";
$triangle4_a = 5;
$triangle4_b = 7;
$triangle4_c = 10;
try {
    $triangles = new TrianglesSortedArray(array(new Triangle($triangle1, 
            $triangle1_a, $triangle1_b, $triangle1_c), new Triangle($triangle2, 
            $triangle2_a, $triangle2_b, $triangle2_c), new Triangle($triangle3, 
            $triangle3_a, $triangle3_b, $triangle3_c), new Triangle($triangle4,
            $triangle4_a, $triangle4_b, $triangle4_c)));
    $results_array = $triangles->resolveString();
    ViewSortTriangles($triangle1, $triangle1_a, $triangle1_b, $triangle1_c,
            $triangle2, $triangle2_a, $triangle2_b, $triangle2_c, $triangle3, 
            $triangle3_a, $triangle3_b, $triangle3_c, $triangle4, $triangle4_a,
            $triangle4_b, $triangle4_c, $results_array);
} catch (Exception $e) {
    echo '<h1>{status: "failed", reason:"' . $e->getMessage() . '"}</h1>';
}

//////////////////// 4. Happy tickets///////////////////////////////////////
$context_min = 112000;
$context_max = 222000;

try {
    $context_tick = new ContextTicket($context_min, $context_max);
    $happy_tick = new HappyTicket($context_tick);
    $result = $happy_tick->resolveString();
    ViewHappyTickets($context_min, $context_max, $result);
} catch (Exception $e) {
    echo '<h1>{status: "failed", reason:"' . $e->getMessage() . '"}</h1>';
}
////////////////////// 5. Fibonache numbers///////////////////////////////
$cont_min = 0;
$cont_max = 10;
$myrow = 10;

try {
    $context = new Context($cont_min, $cont_max, $myrow);
    $fibrow = new RowFibonache($context);
    $result = $fibrow->resolveString();
    $row_len = count(explode(',', $result));
    ViewFibonacheNumbers($cont_min, $cont_max, $row_len, $result);
} catch (Exception $e) {
    echo '<h1>{status: "failed", reason:"' . $e->getMessage() . '"}</h1>';
}

////////////////////////////////////////////////////////////////////////
//////////////////////////Views////////////////////////////////////////

function ViewChessBoard($board_width, $board_heigth, $board_sign, $res) {
    echo '<h1 style="color:blue;">PHP tasks</h1>';
    echo '<h1 style="color:blue;margin-left:5px;">1.Chess board</h1>';
    echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:450px;">' . $res . '</h1>';
    echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:120px;">Width:' . $board_width . ';</h2>';
    echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:180px;">Heigth:' . $board_heigth . ';</h2>';
    echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:240px;">Sign:' . $board_sign . ';</h2>';
    echo '<h1 style="color:blue;position:absolute;margin-left:10px; top:390px;">Result:</h1>';
}

function ViewEnelyseEnvelopes($envelope_a, $envelope_b, $envelope_c, $envelope_d, $result) {
    echo '<h1 style="color:blue;margin-left:230px;">2.Analyse envelopes</h1>';
    echo '<h3 style="color:blue;position:absolute; margin-left:300px;top:170px;">Envelope1 side a:' . $envelope_a . ';</h3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:300px;top:230px;">Envelope1 side b:' . $envelope_b . ';</h3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:300px;top:300px;">Envelope2 side c:' . $envelope_c . ';</h3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:300px;top:350px;">Envelope2 side d:' . $envelope_d . ';</h3>';
    echo '<h1 style="color:blue;position:absolute;margin-left:300px; top:390px;">Result:</h1>';
    echo '<h1 style="color:blue;position:absolute;margin-left:410px; top:390px;">' . $result . '</h1>';
}

function ViewSortTriangles($triangle1, $triangle1_a, $triangle1_b, $triangle1_c, $triangle2, $triangle2_a, $triangle2_b, $triangle2_c, $triangle3, $triangle3_a, $triangle3_b, $triangle3_c, $triangle4, $triangle4_a, $triangle4_b, $triangle4_c, $results_array) {
    echo '<h1 style="color:blue;margin-left:570px;">3.Sort triangles</h1>';
    echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:230px;">Triangle 1=' . $triangle1 . ";side a=" . $triangle1_a . ";side b=" . $triangle1_b . ";side c=" . $triangle1_c . ';</3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:250px;">Triangle 2=' . $triangle2 . ";side a=" . $triangle2_a . ";side b=" . $triangle2_b . ";side c=" . $triangle2_c . ';</h3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:270px;">Triangle 3=' . $triangle3 . ";side a=" . $triangle3_a . ";side b=" . $triangle3_b . ";side c=" . $triangle3_c . ';</h3>';
    echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:290px;">Triangle 4=' . $triangle4 . ";side a=" . $triangle4_a . ";side b=" . $triangle4_b . ";side c=" . $triangle4_c . ';</h3>';
    echo '<h2 style="color:blue;position:absolute;margin-left:550px;margin-top:160px;">Result:</h2>';
    echo $results_array;
}

function ViewHappyTickets($context_min, $context_max, $result) {
    echo '<h1 style="color:blue;margin-left:1000px;">4.Happy tickets</h1>';
    echo '<h1 style="color:blue;position:absolute;margin-left:1000px;top:500px;">Result:</h1>';
    echo '<h2 style="color:blue;position:absolute; margin-left:1000px;top:420px;">Context min: ' . $context_min . '</h2>';
    echo '<h2 style="color:blue;position:absolute;margin-left:1000px;top:450px;">Context max: ' . $context_max . '</h2>';
    echo $result;
}

function ViewFibonacheNumbers($cont_min, $cont_max, $row_len, $result) {
    echo '<h1 style="color:blue;position:absolute;margin-left:1350px; top:610px;">Result:</h1>';
    echo '<h1 style="color:blue;margin-left:1350px;top:500px;">5.Fibonache numbers</h1>';
    echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:485px;">Row min:' . $cont_min . ';</h3>';
    echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:525px;">Row max:' . $cont_max . ';</h3>';
    echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:565px;">Row length:' . $row_len . ';</h3>';
    echo '<h2 style="color:blue;position:absolute;margin-left:1350px; top:650px;">' . $result . "</h2>";
}
