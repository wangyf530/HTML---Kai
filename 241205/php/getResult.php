<?php
    //echo "getSum ok";

    $input = $_GET;
    $num1 = $input['num1'];
    $opt = $input['opt'];
    $num2 = $input['num2'];

    $result = 0;
    switch ($opt) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            # code...
            break;
    }


    $data = [
        'num1' => $num1,
        'opt' => $opt,
        'num2' => $num2,
        'result' => $result,
    ];

    function dd($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    // dd($data);

    $myJSON = json_encode($data);

    echo $myJSON;

?>