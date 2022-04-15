<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/page_3.css">
        <title>Python assistant</title>
        <script type="text/javascript" src="scripts/page_3.js"></script>
    </head>
    <body>
        <div id="windows">
            <div id="head">
                <div id="div_lohotip">
                    <img src="images/lohotip.gif">
                </div>
                <div id="header">
                    <div id="title">
                        <h1>Python assistant</h1>
                    </div>
                    <div id="menu_1">
                        <div id="menu_1_1">
                            <a href="index.html" style="text-decoration: none; color: white;"><div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;"><p>Головна</p></div></a>
                        </div>
                        <div id="menu_1_2">
                            <a href="page_1.html" style="text-decoration: none; color: white;"><div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;"><p>Довідник</p></div></a>
                        </div>
                        <div id="menu_1_3">
                            <a href="page_2.html" style="text-decoration: none; color: white;"><div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;"><p>Архів програм</p></div></a>
                        </div>
                        <div id="menu_1_4" onclick="chat()">
                            <a style="text-decoration: none; color: white;"><div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;"><p>Форум</p></div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="conteiner">
                <div id="menu_2">
                </div>
                <div id="content">
                    <form name="forum">
                        <label for="im">Ім'я: </label>
                        <input type="text" name="im" id="im"><br>
                        <textarea cols="100" rows="10" name="text" id="text"></textarea>
                        <input type="button" value="Відправити" onclick="sent()">
                    </form>
                    <div id="ul">
                    </div>
                    </div>
                </div>
            </div>
            <div id="contacts">
                <p>Номер телефону: +380988888888</p>
                <p>Пошта: pupil7@cherkasy_school13.ukr.education</p>
                <p>Адреса: вул. Гетьмана Сагайдачного, 146</p>
            </div>
        </div>
        <script src="scripts/page_3.js"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>