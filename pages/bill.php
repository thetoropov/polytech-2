<html>
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

            </div>
            <div style="margin-left:400px; margin-top:10px "></div>
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
                                                if ((($_GET['service'] == 'rent') || ($_GET['service'] == 'sale') || ($_GET['service'] == 'leasing')) && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')) {
                                                    echo 'Выберите марку автомобиля: ';
                                                } else {
                                                    echo 'Вы не указали достаточно данных заказа';
                                                } ?>  </font><br>
                                            <form action="basket.php" method="POST" id="resultorder"></form>
                                            <?php
                                            if (($_GET['service'] == 'rent') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                ?>
                                                <input type="radio" id="check4" name="car" value="Peugeot"
                                                       form="resultorder"><label for="check4">Peugeot</label><Br>
                                                <input type="radio" id="check5" name="car" value="Lada"
                                                       form="resultorder"><label for="check5">Lada Priora</label><Br>
                                                <input type="radio" id="check6" name="car" value="Nissan"
                                                       form="resultorder"><label for="check6">Nissan</label>
                                            <?php endif; ?>

                                            <?php
                                            if (($_GET['service'] == 'sale') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                ?>
                                                <input type="radio" id="check4" name="car" value="Citroen"
                                                       form="resultorder"><label for="check4">Citroen</label><Br>
                                                <input type="radio" id="check5" name="car" value="Skoda"
                                                       form="resultorder"><label for="check5">Skoda</label><Br>
                                                <input type="radio" id="check6" name="car" value="Lexus"
                                                       form="resultorder"><label for="check6">Lexus</label>
                                            <?php endif; ?>

                                            <?php
                                            if (($_GET['service'] == 'leasing') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                ?>
                                                <input type="radio" id="check4" name="car" value="Kia"
                                                       form="resultorder"><label for="check4">Kia</label><Br>
                                                <input type="radio" id="check5" name="car" value="Honda"
                                                       form="resultorder"><label for="check5">Honda</label><Br>
                                                <input type="radio" id="check6" name="car" value="Mazda"
                                                       form="resultorder"><label for="check6">Mazda</label>
                                            <?php endif; ?>

                                            <?php
                                            if ($_GET['service'] == ''):
                                                ?>
                                                Вы не выбрали услугу!
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
                                                <div style="margin-left:6px; margin-top:11px; margin-right:0px "><font
                                                            class="title"> </font></div>
                                                <div style="margin-top:10px; margin-left:6px ">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px ">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px ">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px ">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px ">

                                                </div>
                                                <div style="margin-top:6px; margin-left:6px ">
                                                    <?php
                                                    if (($_GET['service'] == 'rent') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                        ?>
                                                        <label for="check1"><input type="checkbox" id="check1"
                                                                                   name="option4" value="fuel"
                                                                                   form="resultorder">Бензин</label><br>
                                                        <label for="check2"><input type="checkbox" id="check2"
                                                                                   name="option5" value="tires"
                                                                                   form="resultorder">Шины</label><br>
                                                        <label for="check3"><input type="checkbox" id="check3"
                                                                                   name="option6" value="washer"
                                                                                   form="resultorder">Омыватель</label>
                                                    <?php endif; ?>

                                                    <?php
                                                    if (($_GET['service'] == 'sale') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                        ?>
                                                        <label for="check1"><input type="checkbox" id="check1"
                                                                                   name="option4" value="polish"
                                                                                   form="resultorder">Полировка</label><br>
                                                        <label for="check2"><input type="checkbox" id="check2"
                                                                                   name="option5" value="clean1"
                                                                                   form="resultorder">Чистка салона</label><br>
                                                        <label for="check3"><input type="checkbox" id="check3"
                                                                                   name="option6" value="to"
                                                                                   form="resultorder">ТО</label>
                                                    <?php endif; ?>

                                                    <?php
                                                    if (($_GET['service'] == 'leasing') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                        ?>
                                                        <label for="check1"><input type="checkbox" id="check1"
                                                                                   name="option4" value="fuel"
                                                                                   form="resultorder">Бензин</label><br>
                                                        <label for="check2"><input type="checkbox" id="check2"
                                                                                   name="option5" value="clean2"
                                                                                   form="resultorder">Чистка салона</label><br>
                                                        <label for="check3"><input type="checkbox" id="check3"
                                                                                   name="option6" value="engine"
                                                                                   form="resultorder">Чистка двигателя</label>
                                                    <?php endif; ?>
                                                </div>

                                            <td valign="top" height="215" width="1" background="../images/tal.gif"
                                                style="background-repeat:repeat-y"></td>
                                            <td valign="top" height="215" width="243">
                                                <div style="margin-left:22px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w2.gif"></div>
                                                <div style="margin-left:22px; margin-top:13px; ">

                                                    <div style="margin-left:0px; margin-top:0px; margin-right:0px ">
                                                        <font class="title"> </font></div>
                                                    <div style="margin-top:6px; margin-left:6px ">

                                                    </div>
                                                    <div style="margin-top:6px; margin-left:6px ">

                                                    </div>
                                                    <div style="margin-top:6px; margin-left:6px ">

                                                    </div>

                                                    <div style="margin-left:67px; margin-top:7px; margin-right:10px ">
                                                        <?php
                                                        if ((($_GET['service'] == 'rent') || ($_GET['service'] == 'leasing')) && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                            ?>
                                                            <label for=""> Кол-во дней <input style="width: 100px;"
                                                                                              type="text"
                                                                                              name="countdays"
                                                                                              form="resultorder"></label>

                                                        <?php endif; ?>

                                                        <?php
                                                        if (($_GET['service'] == 'sale') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                            ?>
                                                            <label for="check9"> Ускоренное оформление <input
                                                                        id="check9" type="checkbox" name="fastreg"
                                                                        value="reg" form="resultorder"></label>
                                                        <?php endif; ?>
                                                    </div>
                                                    <img src="../images/pointer.gif"><a href="#"><img
                                                                src="../images/read_more.gif" border="0"></a></div>
                                                </div>
                                                <div style="margin-left:22px; margin-top:16px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w4.gif"></div>
                                                <div style="margin-left:22px; margin-top:9px; ">
                                                    <input type="hidden" value= <?= $_GET['service'] ?> name = "service"
                                                    form = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['option1'] ?> name = "option1"
                                                    form = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['option2'] ?> name = "option2"
                                                    form = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['option3'] ?> name = "option3"
                                                    form = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['name'] ?> name = "name" form
                                                    = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['phone'] ?> name = "phone"
                                                    form = "resultorder">
                                                    <input type="hidden" value= <?= $_GET['email'] ?> name = "email"
                                                    form = "resultorder">

                                                    <a href="order.php"><input type="submit" value="Вернуться назад"></a>
                                                    <?php
                                                    if (($_GET['service'] != '') && ($_GET['name'] != '') && ($_GET['phone'] != '') && ($_GET['email'] != '')):
                                                        ?>
                                                        <input type="submit" value="Далее" form="resultorder">
                                                    <?php endif; ?>

                                                    <div style="margin-left:67px; margin-top:0px; margin-right:0px ">
                                                        <font class="title">

                                                        </font><br>

                                                        <div>

                                                        </div>

                                                        <div style="margin-left:0px; margin-top:7px; margin-right:10px ">
                                                            <img src="../images/pointer.gif"><a href="#"><img
                                                                        src="../images/read_more.gif" border="0"></a>
                                                        </div>
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
