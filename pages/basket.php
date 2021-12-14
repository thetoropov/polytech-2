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
                                        <div style="margin-left:95px "><font class="title">Ваш заказ</font><br>
                                            <?php
                                            $countdays = $_POST['countdays'];

                                            if ($_POST['service'] == 'rent') {
                                                $service_name = 'Прокат';
                                                $service_desc = 'на несколько дней';
                                                $service_price = 100;
                                                if ($_POST['option4'] == 'fuel') {
                                                    $a1 = 'Бензин';
                                                    $a1price = 50;
                                                }
                                                if ($_POST['option5'] == 'tires') {
                                                    $a2 = 'Шины';
                                                    $a2price = 100;
                                                }
                                                if ($_POST['option6'] == 'washer') {
                                                    $a3 = 'Омыватель';
                                                    $a3price = 200;
                                                }
                                                $cdf = $service_price * $countdays;
                                            }

                                            if ($_POST['service'] == 'sale') {
                                                $service_name = 'Продажа';
                                                $service_desc = 'комиссионные услуги';
                                                $service_price = 500;
                                                if ($_POST['option4'] == 'polish') {
                                                    $a1 = 'Полировка';
                                                    $a1price = 100;
                                                }
                                                if ($_POST['option5'] == 'clean1') {
                                                    $a2 = 'Чистка салона';
                                                    $a2price = 50;
                                                }
                                                if ($_POST['option6'] == 'to') {
                                                    $a3 = 'ТО';
                                                    $a3price = 200;
                                                }

                                            }

                                            if ($_POST['service'] == 'leasing') {
                                                $service_name = 'Лизинг';
                                                $service_desc = 'от 30 дней';
                                                $service_price = 2100;
                                                if ($_POST['option4'] == 'fuel') {
                                                    $a1 = 'Бензин';
                                                    $a1price = 50;
                                                }
                                                if ($_POST['option5'] == 'clean2') {
                                                    $a2 = 'Чистка салона';
                                                    $a2price = 200;
                                                }
                                                if ($_POST['option6'] == 'engine') {
                                                    $a3 = 'Чистка двигателя';
                                                    $a3price = 100;
                                                }
                                                $cdf = $service_price * $countdays;
                                            }

                                            if ($_POST['car'] == 'Peugeot') {
                                                $car_price = 200;
                                            }
                                            if ($_POST['car'] == 'Lada') {
                                                $car_price = 100;
                                            }
                                            if ($_POST['car'] == 'Nissan') {
                                                $car_price = 300;
                                            }

                                            if ($_POST['car'] == 'Citroen') {
                                                $car_price = 500;
                                            }
                                            if ($_POST['car'] == 'Skoda') {
                                                $car_price = 300;
                                            }
                                            if ($_POST['car'] == 'Lexus') {
                                                $car_price = 800;
                                            }

                                            if ($_POST['car'] == 'Kia') {
                                                $car_price = 50;
                                            }
                                            if ($_POST['car'] == 'Honda') {
                                                $car_price = 100;
                                            }
                                            if ($_POST['car'] == 'Mazda') {
                                                $car_price = 80;
                                            }

                                            if ($_POST['option1'] == 'leather') {
                                                $leather = 'Кожаный салон';
                                                $leather_price = 50;
                                            }
                                            if ($_POST['option2'] == 'warm') {
                                                $warm = 'Подогрев сидений';
                                                $warm_price = 30;
                                            }
                                            if ($_POST['option3'] == 'window') {
                                                $window = 'Люк';
                                                $window_price = 100;
                                            }
                                            ?>
                                            <div style="margin-bottom: 10px;">
                                                <?php
                                                if ((($_POST['service'] == 'rent') || ($_POST['service'] == 'leasing') && ($_POST['name'] != '') && ($_POST['phone'] != '') && ($_POST['email'] != '') && ($_POST['car'] != '')) && (($countdays != 0) && ($countdays != '')) || (($_POST['service'] == 'sale') && ($_POST['name'] != '') && ($_POST['phone'] != '') && ($_POST['email'] != '') && ($_POST['car'] != ''))) :
                                                    ?>
                                                    <table class="table">
                                                        <tr>
                                                            <td>Тип услуги</td>
                                                            <td>
                                                                <?php
                                                                echo $service_name . " " . $service_desc;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $service_price;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Марка автомобиля</td>
                                                            <td>
                                                                <?php
                                                                if ($_POST['car'] == 'Lada') {
                                                                    echo $_POST['car'] . ' ' . 'Priora';
                                                                } else {
                                                                    echo $_POST['car'];
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $car_price;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Дополнительные опции</td>
                                                            <td>
                                                                <?php
                                                                if ($_POST['option1'] != '') {

                                                                    echo $leather . "<br>";
                                                                }
                                                                if ($_POST['option2'] != '') {
                                                                    echo $warm . "<br>";
                                                                }
                                                                if ($_POST['option3'] != '') {
                                                                    echo $window;
                                                                }
                                                                if (($_POST['option1'] == '') && ($_POST['option2'] == '') && ($_POST['option3'] == '')) {
                                                                    echo 'Не выбрано';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($_POST['option1'] != '') {
                                                                    echo $leather_price . "<br>";
                                                                }
                                                                if ($_POST['option2'] != '') {
                                                                    echo $warm_price . "<br>";
                                                                }
                                                                if ($_POST['option3'] != '') {
                                                                    echo $window_price;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Дополнительные услуги</td>
                                                            <td>
                                                                <?php
                                                                if ($_POST['option4'] != '') {
                                                                    echo $a1 . "<br>";
                                                                }
                                                                if ($_POST['option5'] != '') {
                                                                    echo $a2 . "<br>";
                                                                }
                                                                if ($_POST['option6'] != '') {
                                                                    echo $a3;
                                                                }
                                                                if (($_POST['option4'] == '') && ($_POST['option5'] == '') && ($_POST['option6'] == '')) {
                                                                    echo 'Не выбрано';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($_POST['option4'] != '') {
                                                                    echo $a1price . "<br>";
                                                                }
                                                                if ($_POST['option5'] != '') {
                                                                    echo $a2price . "<br>";
                                                                }
                                                                if ($_POST['option6'] != '') {
                                                                    echo $a3price;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Дополнительно</td>
                                                            <td>
                                                                <?php
                                                                if (($_POST['service'] == 'rent') || ($_POST['service'] == 'leasing')) {
                                                                    echo "Количество дней: " . $countdays;
                                                                }
                                                                if ($_POST['service'] == 'sale') {
                                                                    if ($_POST['fastreg'] == 'reg') {
                                                                        $fr = $service_price * 2;
                                                                        $regname = 'Ускоренное оформление требуется';
                                                                        echo $regname;
                                                                    } else {
                                                                        $fr = $service_price;
                                                                        echo 'Ускоренное оформление не требуется';
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $cdf;
                                                                echo $fr;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Имя</td>
                                                            <td colspan=2>
                                                                <?php
                                                                echo $_POST['name'];
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Телефон</td>
                                                            <td colspan=2>
                                                                <?php
                                                                echo $_POST['phone'];
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Почта</td>
                                                            <td colspan=2>
                                                                <?php
                                                                echo $_POST['email'];
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                <?php endif; ?>
                                            </div>

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

                                                <div style="margin: 20px 0 0 10px;">

                                                    Итого -

                                                    <?php
                                                    $total = ($cdf + $fr) + $car_price + $leather_price + $warm_price + $window_price + $a1price + $a2price + $a3price;
                                                    echo $total;
                                                    ?>

                                                </div>

                                            <td valign="top" height="215" width="1" background="../images/tal.gif"
                                                style="background-repeat:repeat-y"></td>
                                            <td valign="top" height="215" width="243">
                                                <div style="margin-left:22px; margin-top:2px; "><img
                                                            src="../images/hl.gif"></div>
                                                <div style="margin-left:22px; margin-top:7px; "><img
                                                            src="../images/1_w2.gif"></div>
                                                <div style="margin-left:22px; margin-top:13px; ">

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


                                                </div>
                                                </div>

                                                <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img
                                                            src="../images/pointer.gif"><a href="#"><img
                                                                src="../images/read_more.gif" border="0"></a></div>
                                                <form action="write.php" method="POST">
                                                    <?php
                                                    if ($total != 0):
                                                        ?>
                                                        <input type="submit" value="Записать информацию о заказе">
                                                    <?php endif; ?>


                                                    <?php
                                                    if ($total == 0):
                                                        ?>

                                                        <a class="infolink" style="margin-left: 20px;"
                                                           href="../txt/data.txt" download="Ваш заказ">Скачать информацию о заказе</a>
                                                    <?php endif; ?>
                                                    <input type="hidden" value= <?php echo $service_name; ?> name = "service_name">
                                                    <input type="hidden" value= <?php echo $_POST['car']; ?> name = "carname">
                                                    <input type="hidden" value= <?php echo $_POST['option1']; ?> name ="option1">
                                                    <input type="hidden" value= <?php echo $_POST['option2']; ?> name ="option2">
                                                    <input type="hidden" value= <?php echo $_POST['option3']; ?> name ="option3">
                                                    <input type="hidden" value= <?php echo $_POST['option4']; ?> name ="option4">
                                                    <input type="hidden" value= <?php echo $_POST['option5']; ?> name ="option5">
                                                    <input type="hidden" value= <?php echo $_POST['option6']; ?> name ="option6">
                                                    <input type="hidden" value= <?php echo $countdays; ?> name = "count">
                                                    <input type="hidden" value= <?php echo $_POST['fastreg']; ?> name ="fastreg">
                                                    <input type="hidden" value= <?php echo $total; ?> name = "total">
                                                    <input type="hidden" value= <?php echo $_POST['name']; ?> name = "name">
                                                    <input type="hidden" value= <?php echo $_POST['phone']; ?> name = "phone">
                                                    <input type="hidden" value= <?php echo $_POST['email']; ?> name = "mail">
                                                </form>

                                                <?php
                                                if ($total == 0):
                                                    ?>
                                                    <form action="send_email.php" method="POST">
                                                        <input type="hidden" value= <?php echo $_GET['service']; ?> name = "service_name">
                                                        <input type="hidden" value= <?php echo $_GET['total']; ?> name = "total">
                                                        <input type="hidden" value= <?php echo $_GET['name']; ?> name = "name">
                                                        <input type="hidden" value= <?php echo $_GET['phone']; ?> name = "phone">
                                                        <input type="hidden" value= <?php echo $_GET['mail']; ?> name = "mail">
                                                        <input type="submit" value="Отправить на почту">
                                                    </form>
                                                <?php endif; ?>

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
