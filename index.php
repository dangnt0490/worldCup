<!--<!DOCTYPE html>-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Cache-Control" content="public"/>
        <meta http-equiv="content-type" content="application/vnd.hbbtv.xhtml+xml; charset=UTF-8"/>
        <title>Book Hotel Ninh Binh</title>
        <link type="text/css" href="maincss.css" rel="stylesheet">

        <script type="text/javascript" src="keycodes.js"></script>
        <script type="text/javascript" src="event.js"></script>
        <script src="js/eventCalendar.js" type="text/javascript"></script>
        <script src="js/eventKeyboard.js" type="text/javascript"></script>
        <link href="css/keyboard.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <link href="css/calendar.css" rel="stylesheet" type="text/css"/>

        <script type="text/javascript">
				Nguyen trong dang
        </script>
    </head>
    <body>
        <object id="oipfAppMan" type="application/oipfApplicationManager" style="visibility: hidden; display: none;"></object>
        <div id="MENU">
     
        </div>
        <div id="RIGHT">
            <div id="info" class="content">Thông tin ninh bình</div>
            <div id="bookHotel" class="content">
                <div id="listHotel">
                    <?php echo file_get_contents("page/hotel.html"); ?>
                </div>
                <div id="bookroom" style="display: none"><?php echo file_get_contents("page/bookhotel.html"); ?></div>
            </div>
            <div id="dish" class="content"></div>
            <div id="htory" class="content"></div>
            <div id="keyboardInner" ></div>
            <div id="keyboardInnerInfo" style="display: none"></div>

        </div>
        <div id="green" style="display: none">
            <div>
                <div class="greenButton"></div>
                <div class="greentxt">ĐẶT PHÒNG NGAY</div>
            </div>

        </div>
        <div id="blue">
            <div>
                <div class="blueButton"></div>
                <div class="bluetxt">Quay Lui</div>
            </div>

        </div>



    </body>
</html>
