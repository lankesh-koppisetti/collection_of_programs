

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
        
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/code.jquery.com_jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/code.jquery.com_ui_1.12.1_jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $.ajax({url: "json/hotels.json",
                    dataType: 'json',
                    success: function (data) {
                        var html = "";
                        $.each(data.hotels, function (key, val) {
                            var price = parseInt(val.price);

                            html += "<div class=\"hotel\">\n\<div><img class=\"hotel_img\" src='images/" + val.image + "'/></div>\n\<div class=\"hotel_name\">" + val.name + "</div>";


                            html += "<div class='hotel_address'>" + val.address.full_address + "</div>";


                            html += "<div class=\"price\" > " + val.price + " </div>\n\</div>";
                        });

                        $("#hotel_list").html(html);
                    }
                })


                $("#slider-range").slider({
                    range: true,
                    min: 500,
                    max: 6000,
                    values: [1000, 5000],

                    slide: function (event, ui) {

                        var maxVal = ui.values[1];

                        var minVal = ui.values[0];


                        $("#amount").val("Rs" + ui.values[ 0 ] + " -Rs" + ui.values[ 1 ]);


                    },
                    stop: function (event, ui) {
                        var maxVal = ui.values[1];

                        var minVal = ui.values[0];
                        
                        //$(document).on("click",)

                        $("#hotel_list .hotel").each(function(key,val){
                            var price=parseInt($(val).find(".price").text());
                            if(price>=minVal && price<=maxVal){
                                $(val).show();
                            }
                            else{
                                $(val).hide();
                            }
                        });

                    }

                });

                $("#amount").val("Rs" + $("#slider-range").slider("values", 0) +
                        " - Rs" + $("#slider-range").slider("values", 1));



            });
        </script>


        <style>
            .hotel{
                width:300px;
                border:1px solid #ccc;
                padding: 20px;
                border-radius: 5px;
                margin: 20px;
            }

            .hotel .hotel_img{
                width:100%;
                margin-bottom: 20px;
            }

            .hotel .hotel_name{
                font-size: 28px;
                font-weight: bold;
                color: #003eff;
            }

            .hotel .hotel_address{
                font-size: 14px;
                color: #777;

            }

            .hotel .price{
                font-size: 32px;
                font-weight: bold;
                color: #c90808;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="float_left">
                <p>
                    <label for="amount">Price range:</label>
                    <input type="text" readonly id="amount"  style="border:2; color:#333; font-weight:bold;"/>

                </p>
                <div id="slider-range" style="background-color:#eef76f; width:100% ;"></div>


            </div>
            
            <div id="hotel_list" class="float_left">

                </div>
       
        </div>

    </body>
</html>

