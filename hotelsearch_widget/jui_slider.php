

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">


        <script src="js/code.jquery.com_jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/code.jquery.com_ui_1.12.1_jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                alert("hi");

                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [75, 300],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
            });
        </script>
    </head>
    <body>
        <p>
            <label for="amount">Price range:</label>
            <input type="text" id="amount"  style="border:2; color:#333; font-weight:bold;"/>

        </p>
        <div id="slider-range" style="background-color: #ccc; width:100%;">slider</div>

    </body>
</html>

