<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    enter name: 
    <input type="text" id="name"/>
    <button id="submit">submit</button>
    <div id="result"></div>
    <!-- <input type="submit" value="send" id="submit"> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $('#submit').click(function(){
                $.ajax({
                    type: "GET",
                    url:"result.php",
                    data: "name= " + $('#name').val(),
                    // dataType: "dataType",
                    success: function(msg){
                        $('#result').html(msg);
                    }
                })
            })
        });
    </script>
</body>
</html>