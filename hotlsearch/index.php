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

                var dateFormat = "mm/dd/yy",
                        from = $("#from")
                        .datepicker({
                            defaultDate: "+1w",
                            changeMonth: true,
                            numberOfMonths: 1
                        })
                        .on("change", function () {
                            to.datepicker("option", "minDate", getDate(this));
                        }),
                        to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                        .on("change", function () {
                            from.datepicker("option", "maxDate", getDate(this));
                        });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }

                    return date;
                }



                $.ajax({url: "jsonfile.json",
                    dataType: 'json',
                    success: function (data) {
                        alert(data);
                        console.log(data);
                        var html = "";
                        $.each(data, function (key, val) {

                            html += "<p class='auto_dest'>" + val.name + "</p>"
                        });

                        $(".country_autosuggesion").html(html);
                    }
                });

                var lastSelectedNoRooms = 1; // init value

                $("#roomsCount").change(function () {

                    var numRoom = parseInt($(this).val());

                    for (var i = 1; i < numRoom; i++) {
                        var room = "<p>room" + (i + 1) + "<p>";
                        $(".no_of_rooms").html(room);

                    }



                    if (lastSelectedNoRooms > numRoom)
                    {
                        //remove last childs
                        var noOfChildToRemove = lastSelectedNoRooms - numRoom;
                        for (var i = 0; i < noOfChildToRemove; i++) {
                            $("#roomSelectionHtml ul:last-child").remove();

                        }

                    } else {
                        //append children
                        var noOfTimeToAdd = numRoom - lastSelectedNoRooms;

                        var html = $(".selectOnRoomChange").html();
                        var newHtml = '';
                        for (var i = 0; i < noOfTimeToAdd; i++) {
                            newHtml = newHtml + html;


                        }


                        $(".no_of_rooms").html(room);
                        $("#roomSelectionHtml").append(newHtml);

                    }

                    //assign lastSelectedNoRooms with current room number
                    lastSelectedNoRooms = numRoom;

                    /*
                     
                     var lowestValue = 1;
                     var largestValue = numRoom;
                     
                     if (numRoom >= 2) {
                     var html = $(".selectOnRoomChange").html();
                     
                     if (numRoom === 3) {
                     html += html;
                     
                     
                     
                     }
                     
                     $("#roomSelectionHtml").html(html);
                     alert("a" );
                     
                     }
                     
                     if ((largestValue - lowestValue)>1) {
                     $("#roomSelectionHtml ul:last-child").remove();
                     } */
                });


                $("#search_input").on("keyup", function () {
                    var searchedKey = $(this).val();

                    if (searchedKey.length >= 3) {
                        $(".country_autosuggesion").show();
                        $(".country_autosuggesion p").filter(function () {
                            $(this).toggle($(this).text().toLowerCase().indexOf(searchedKey.toLowerCase()) > -1);
                        });
                    } else {
                        $(".country_autosuggesion").hide();
                    }

                });


                $(".auto_dest").on("click", function () {

                    console.log("select dest");
                });

                //To trigger dynamically created html content
                $(document).on('click', '.auto_dest', function () {
                    var country = $(this).text();
                    $("#search_input").val(country);
                    $(".country_autosuggesion").hide();

                });



            });
        </script>
    </head>
    <body>
        <!--<div>Due to COVID pandemic, pleas ware face mask..!</div>-->
        <div class="search_container">

            <h1 class="main_heading">Search Hotels</h1>

            <div class="line"></div>
            <form action="details_view.php" method="post" id="rommsform" name="rooms_data">

                <!-- ================= Search location component =================== -->
                <div>
                    <label class="search_labels">Where are you going?</label>
                    <div class="position_rel">
                        <input type="text" placeholder="ex:goa,india" class="search_input w100p" name="seachCountry" autocomplete="off" id="search_input"/>
                        <i class="fa fa-map-marker location_img" aria-hidden="true"></i>
                        <div class="country_autosuggesion"></div>
                    </div>
                </div>


                <!-- ================= Dates picking component =================== -->
                <div class="mt-25">
                    <div class="float_left w45p">
                        <label class="search_labels ">Select Start date</label>
                        <div class="position_rel">
                            <input type="text" name="from" placeholder="StartDate" class="search_input w100p" id="from" name="startDatee"/>
                            <i class="fa fa-calendar-plus-o calender_icon" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="float_right w45p">
                        <label class="search_labels ">Select End date</label>
                        <div class="position_rel">
                            <input type="text" name="to" placeholder="EndDate" class="search_input w100p" id="to" name="endDate"/>
                            <i class="fa fa-calendar-plus-o calender_icon " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-- ================= Rooms component =================== -->
                <div class="mt-25">
                    <!--               <form action="details_view.php" method="post" id="rommsform" name="rooms_data">-->

                    <div class="rooms">
                        <div class="roomcount float_left">
                            <label class="search_labels">Rooms</label>
                            <div> <select id="roomsCount" class="width-50" name="rooms">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="tenents float_right">
                            <div class="selectOnRoomChange">
                                <ul class="tenent_selection">
                                    <li class="no_of_rooms">Room 1</li>
                                    <li class="adult">
                                        <label class="search_labels">Adult</label>
                                        <div>
                                            <select name="adult_count[]">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div><span class="age_info color_white f-14">Age18+</span></div>
                                    </li>
                                    <li class="child">
                                        <label>Child</label>
                                        <div><select  name="child_count[]">
                                                <option value="1"> 1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div><span class="age_info color_white f-14">Age 0 to 17</span></div>
                                    </li>
                                </ul>
                            </div>

                            <div id="roomSelectionHtml"></div>


                        </div>
                    </div>
                    <input type="text" name="myName">
                    <div>
                        <button form="rommsform"  class="seach_button mt-25">Search Hotels</button>
                        <!--<button type="submit" form="rommsform" value="submit" class="seach_button mt-25">Search Hotels</button>-->
                    </div>


                </div>

                <!--            <div>
                                <a class="seach_button mt-25" href="details_view.php">
                                    Search Hotels
                                </a>
                            </div>-->
            </form>
            <a href="details_view.php"></a>
        </div>

    </body>
</html>
