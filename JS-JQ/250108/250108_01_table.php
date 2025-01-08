<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css 順序 1.bs / 2. self  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => '台北店',
        'mobile' => '0911-111-111',
        'address' => '台北市中正路1號'
    ],
    [
        'id' => 2,
        'name' => '台中店',
        'mobile' => '0922-222-222',
        'address' => '台北市中正路2號'
    ],
    [
        'id' => 3,
        'name' => '高雄店',
        'mobile' => '0933-333-333',
        'address' => '台北市中正路3號'
    ]
];

// dd($data);
?>
    <div class="container mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php
                    foreach ($data as $item => $idx) {
                        echo "<tr>";
                        foreach ($idx as $key => $value) {
                            echo "<td>";
                            echo $value;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                ?> -->

                <?php foreach ($data as $key => $value):?>
                    <tr>
                    <td><?=$value['id'];?>
                    <td><?=$value['name'];?>
                    <td><?=$value['mobile'];?>
                    <td><?=$value['address'];?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


    </div>
    <!-- js include 順序 1. bs / 2. jq / 3. self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
    $(document).ready(function() {
        // 1. bind
        const td = $("td");

        // 2. action
        td.hover(function() {
            console.log("hover in");
            // $(this).text('ok');
            $(this).attr('class', 'text-danger');
        }, function() {
            console.log('hover out');
            $(this).attr('class', '');
        });

    });
    </script>
</body>

</html>