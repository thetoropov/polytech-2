﻿<html>
<head>
    <title>Работа</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" background="../images/back_main.gif">


<table cellpadding="0" cellspacing="0" border="0" align="center" width="583" height="614">
    <tr>
        <td valign="top" width="583" height="208" background="../images/row1.gif">
            <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>
            <div style="margin-left:50px; margin-top:69px ">
                <a href="../index.php">Главная<img src="../images/m1.gif" border="0"></a>
                <img src="../images/spacer.gif" width="20" height="10">
                <a href="order.php">Заказ<img src="../images/m2.gif" border="0"></a>
                <img src="../images/spacer.gif" width="5" height="10">
                <a href="basket.php">Корзина<img src="../images/m3.gif" border="0"></a>
                <img src="../images/spacer.gif" width="5" height="10">
                <a href="index-3.php">О компании<img src="../images/m4.gif" border="0"></a>
                <img src="../images/spacer.gif" width="5" height="10">
                <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0"></a>
                </form>
            </div>
        </td>
    </tr>
    <tr>
        <td valign="top" width="583" height="338" bgcolor="#FFFFFF">
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td valign="top" height="338" width="42"></td>
                    <td valign="top" height="338" width="492">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="492" valign="top" height="106">

                                    <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                        <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                        <div style="margin-left:95px "><font class="title">
                                                <?php
                                                include 'user.php';

                                                if ($_COOKIE['user'] == $login_admin):
                                                    echo "Приветсвую, $login_admin, готовы сделать заказ?"
                                                    ?>
                                                <?php endif; ?></font><br>
                                            <?php
                                            if ($_COOKIE['user'] == $login_admin):
                                                ?>
                                                <form action="info.php" method="POST" id="order">
                                                    <select name="service">
                                                        <option selected disabled>Тип услуги</option>
                                                        <option value="rent">Прокат</option>
                                                        <option value="sale">Продажа</option>
                                                        <option value="leasing">Лизинг</option>
                                                    </select>
                                                </form>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="492" valign="top" height="232">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td valign="top" height="232" width="248">
                                                <div style="margin-left:6px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:6px; margin-top:7px; "><img
                                                            src="../images/1_w2.gif"></div>


                                                <div style="margin-top:10px; margin-left:6px "><img
                                                            src="../images/pointer.gif"><img src="../images/spacer.gif"
                                                                                             width="3">


                                                </div>
                                                <div style="margin-top:6px; margin-left:6px "><img
                                                            src="../images/pointer.gif"><img src="../images/spacer.gif"
                                                                                             width="3">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px "><img
                                                            src="../images/pointer.gif"><img src="../images/spacer.gif"
                                                                                             width="3">

                                                </div>
                                                <?php
                                                if ($_COOKIE['user'] == $login_admin):
                                                    ?>
                                                    <div>
                                                        <p>Дополнительные опции</p>
                                                        <label for="check1"><input type="checkbox" id="check1"
                                                                                   name="option1" value="leather"
                                                                                   form="order">Кожаный салон</label><br>
                                                        <label for="check2"><input type="checkbox" id="check2"
                                                                                   name="option2" value="warm"
                                                                                   form="order">Подогрев сидений</label><br>
                                                        <label for="check3"><input type="checkbox" id="check3"
                                                                                   name="option3" value="window"
                                                                                   form="order">Люк</label>
                                                    </div>
                                                <?php endif; ?>


                                            <td valign="top" height="215" width="1" background="../images/tal.gif"
                                                style="background-repeat:repeat-y"></td>
                                            <td valign="top" height="215" width="243">
                                                <div style="margin-left:22px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w2.gif"></div>
                                                <div style="margin-left:22px; margin-top:13px; ">
                                                    <?php
                                                    if ($_COOKIE['user'] == $login_admin):
                                                        ?>
                                                        <div style="margin-left: 10px; clear:both; text-align:right;">
                                                            <p style="text-align: left;">Контактные данные</p>
                                                            <div class="one"><label for="t1">Имя</label> <input id="t1"
                                                                                                                type="text"
                                                                                                                name="name"
                                                                                                                form="order">
                                                            </div>
                                                            <br>
                                                            <div class="one"><label for="t1">Телефон</label> <input
                                                                        id="t1"
                                                                        type="text"
                                                                        name="phone"
                                                                        form="order">
                                                            </div>
                                                            <br>
                                                            <div class="one"><label for="t1">Почта</label> <input
                                                                        id="t1"
                                                                        type="text"
                                                                        name="email"
                                                                        form="order">
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>


                                                    <br><br><br><br>
                                                    <div style="margin-left:67px; margin-top:7px; margin-right:10px ">
                                                        <img src="../images/pointer.gif"><a href="#"><img
                                                                    src="../images/read_more.gif" border="0"></a></div>
                                                </div>
                                                <div style="margin-left:22px; margin-top:16px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w4.gif"></div>
                                                <div style="margin-left:22px; margin-top:9px; ">
                                                    <?php
                                                    if ($_COOKIE['user'] == $login_admin):
                                                        ?>
                                                        <input type="submit" form="order" value="Далее">
                                                    <?php endif; ?>

                                                </div>
                                                </div>

                                                <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img
                                                            src="../images/pointer.gif"><a href="#"><img
                                                                src="../images/read_more.gif" border="0"></a></div>


                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td valign="top" height="338" width="49"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" width="583" height="68" background="../images/row3.gif">
            <div style="margin-left:51px; margin-top:31px ">
                <a href="#"><img src="../images/p1.gif" border="0"></a>
                <img src="../images/spacer.gif" width="26" height="9">
                <a href="#"><img src="../images/p2.gif" border="0"></a>
                <img src="../images/spacer.gif" width="30" height="9">
                <a href="#"><img src="../images/p3.gif" border="0"></a>
                <img src="../images/spacer.gif" width="149" height="9">
                <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
            </div>
        </td>
    </tr>

</table>
</body>
</html>
