<!doctype html>
<html xmlns = "http:://www.w3.org/1999/xhtml">
<head>
    <title>%title%</title>
    <meta http-equiv = "Content-type" content = "text/html; charset = utf-8"/>
    <meta name = "description" content = "%meta_desc%"/>
    <meta name = "keywords" content = "%meta_key%"/>
    <link rel = "stylesheet" href = "%address%css/main.css" type = "text/css"/>
</head>
<body>
    <div id = "content">
        <div id = "header">
            <h1>Справочник PHP</h1>
        </div>
        <hr/>
        <div id = "main_content">
            <div id = "left">
                <img src="images/img_menu.jpg"/>
                <ul>%menu%</ul>
                %auth_user%
               
            </div>
            <div id = "right">
                <form name = "search" action = "%address%" method = "get">
                    <p>
                        Поиск: <input type = "text" name = "words"/>
                    </p>
                    <p>
                        <input type = "hidden" name = "view" value = "search"/>
                        <input type = "submit" name = "search" value = "Искать"/>
                    </p>
                <form>
                <img src="images/img_reclame.jpg"/>
                %banners%
                
            </div>
            <div id = "center">
            %top%
            %middle%
            %bottom%
            </div>
            <div class = "clear"></div>
            <hr/>
            <div id = "footer">
                <p>Все права защищены &copy; 2014</p>
            </div>
        </div>
</body>
</html>