<?php
$service = $_POST['service_name'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$total = $_POST['total'];

if ($_POST['service_name'] == 'Прокат') {
    $service_desc = 'на несколько дней';

    $fp = fopen('../txt/data.txt', 'w');
    fwrite($fp, "Тип услуги:" . " " . $_POST['service_name'] . " " . $service_desc . "\n");
    if ($_POST['carname'] == 'Lada') {
        fwrite($fp, "Марка автомобиля: " . " " . $_POST['carname'] . " " . "Priora" . "\n");
    } else {
        fwrite($fp, "Марка автомобиля: " . " " . $_POST['carname'] . "\n");
    }
    fwrite($fp, "Дополнительные опции: ");
    if (($_POST['option1'] == '') && ($_POST['option2'] == '') && ($_POST['option3'] == '')) {
        fwrite($fp, "ничего");
    }
    if ($_POST['option1'] != '') {
        $opt1name = 'кожаный салон';
        fwrite($fp, " " . $opt1name . " ");
    }
    if ($_POST['option2'] != '') {
        $opt2name = 'подогрев сидений';
        fwrite($fp, " " . $opt2name . " ");
    }
    if ($_POST['option3'] != '') {
        $opt3name = 'люк';
        fwrite($fp, " " . $opt3name);
    }
    fwrite($fp, "\n" . "Дополнительные услуги: ");
    if ($_POST['option4'] != '') {
        $opt4name = 'бензин';
        fwrite($fp, " " . $opt4name . " ");
    }
    if ($_POST['option5'] != '') {
        $opt5name = 'шины';
        fwrite($fp, " " . $opt5name . " ");
    }
    if ($_POST['option6'] != '') {
        $opt6name = 'омыватель';
        fwrite($fp, " " . $opt6name . " ");
    }
    fwrite($fp, "\n" . "Количество дней: " . $_POST['count']);
    fwrite($fp, "\n" . "Итоговая сумма: " . $_POST['total']);
    fclose($fp);
    header("Location: basket.php?service=$service&name=$name&phone=$phone&mail=$mail&total=$total");
}

if ($_POST['service_name'] == 'Лизинг') {
    $service_desc = 'от 30 дней';

    $fp = fopen('../txt/data.txt', 'w');
    fwrite($fp, "Тип услуги:" . " " . $_POST['service_name'] . " " . $service_desc . "\n");
    if ($_POST['carname'] != '') {
        fwrite($fp, "Марка автомобиля: " . " " . $_POST['carname'] . "\n");
    }
    fwrite($fp, "Дополнительные опции: ");
    if (($_POST['option1'] == '') && ($_POST['option2'] == '') && ($_POST['option3'] == '')) {
        fwrite($fp, "ничего");
    }
    if ($_POST['option1'] != '') {
        $opt1name = 'кожаный салон';
        fwrite($fp, " " . $opt1name . " ");
    }
    if ($_POST['option2'] != '') {
        $opt2name = 'подогрев сидений';
        fwrite($fp, " " . $opt2name . " ");
    }
    if ($_POST['option3'] != '') {
        $opt3name = 'люк';
        fwrite($fp, " " . $opt3name);
    }
    fwrite($fp, "\n" . "Дополнительные услуги: ");
    if ($_POST['option4'] != '') {
        $opt4name = 'полировка';
        fwrite($fp, " " . $opt4name . " ");
    }
    if ($_POST['option5'] != '') {
        $opt5name = 'чистка салона';
        fwrite($fp, " " . $opt5name . " ");
    }
    if ($_POST['option6'] != '') {
        $opt6name = 'ТО';
        fwrite($fp, " " . $opt6name . " ");
    }
    fwrite($fp, "\n" . "Количество дней: " . $_POST['count']);
    fwrite($fp, "\n" . "Итоговая сумма: " . $_POST['total']);
    fclose($fp);
    header("Location: basket.php?service=$service&name=$name&phone=$phone&mail=$mail&total=$total");
}

if ($_POST['service_name'] == 'Продажа') {
    $service_desc = 'комиссионные услуги';

    $fp = fopen('../txt/data.txt', 'w');
    fwrite($fp, "Тип услуги:" . " " . $_POST['service_name'] . " " . $service_desc . "\n");
    if ($_POST['carname'] != '') {
        fwrite($fp, "Марка автомобиля: " . " " . $_POST['carname'] . "\n");
    }
    fwrite($fp, "Дополнительные опции: ");
    if (($_POST['option1'] == '') && ($_POST['option2'] == '') && ($_POST['option3'] == '')) {
        fwrite($fp, "ничего");
    }
    if ($_POST['option1'] != '') {
        $opt1name = 'кожаный салон';
        fwrite($fp, " " . $opt1name . " ");
    }
    if ($_POST['option2'] != '') {
        $opt2name = 'подогрев сидений';
        fwrite($fp, " " . $opt2name . " ");
    }
    if ($_POST['option3'] != '') {
        $opt3name = 'люк';
        fwrite($fp, " " . $opt3name);
    }
    fwrite($fp, "\n" . "Дополнительные услуги: ");
    if ($_POST['option4'] != '') {
        $opt4name = 'бензин';
        fwrite($fp, " " . $opt4name . " ");
    }
    if ($_POST['option5'] != '') {
        $opt5name = 'чистка салона';
        fwrite($fp, " " . $opt5name . " ");
    }
    if ($_POST['option6'] != '') {
        $opt6name = 'чистка двигателя';
        fwrite($fp, " " . $opt6name . " ");
    }
    if ($_POST['fastreg'] != '') {
        fwrite($fp, "\n" . "Требуется ускоренное оформление");
    } else {
        fwrite($fp, "\n" . "Не требуется ускоренное оформление");
    }
    fwrite($fp, "\n" . "Итоговая сумма: " . $_POST['total']);
    fclose($fp);
    header("Location: basket.php?service=$service&name=$name&phone=$phone&mail=$mail&total=$total");
}
