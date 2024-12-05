<?php
    $data = [
        's1' => 'amy',
        's2' => 'bob',
        's3' => 'cat'
    ];

    $me = [
        'name' => '05',
        'mobile' => '09xx-xxx-xxx',
        'word' => 'Kind but not Soft.'
    ];

    /**
     * function dd($data){
     * echo "<pre>";
     * print_r($data);
     * echo "</pre>";
     * }
     * dd($data);
     * 
     * $myJSON = json_encode($data);
     * echo $myJSON;
     */

     function dd($me){
        echo "<pre>";
        print_r($me);
        echo "</pre>";
    }
    
    echo json_encode($me);


    

?>