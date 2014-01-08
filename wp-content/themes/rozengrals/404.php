<html>
    <head>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/CyrillicGoth/stylesheet.css" type="text/css"
              media="all"/>

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/old_london/stylesheet.css" type="text/css"
              media="all"/>
        <style type="text/css">
            body {
                background: #630800;
                color: #42110e;
            }

            div {
                margin-top: 100px;
                text-align: center;
            }

            h1{
                font-family: 'cyrillicgothregular';
                font-size:72px;
            }

            span{
                font: 21px/1.4 "Times New Roman", sans-serif;
                /*font: 18px/1.4 Georgia, Serif;*/
            }

            a{
                color: #c0873d;
                font-size: 18px;
                font:18px 'cyrillicgothregular';
            }

            a:hover{
                color: #c0873d;
                text-decoration: dotted;
            }

            #logo {
                background: url(<?php bloginfo('template_url'); ?>/images/logo-2.png) no-repeat;
                background-size: contain;
                width: 410px;
                height: 164px;
                margin-left: auto;
                margin-right: auto;
            }

        </style>
    </head>
    <body>
    <div id="">
        <div id="logo"></div>
        <h1>Ошибка 404</h1>
        <span>Запрашиваемая Вами страница не найдена!</span>
        <br/>
        <a href="javascript:history.back()">Вернуться назад</a>
    </div>
    </body>
</html>