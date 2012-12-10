<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Havamza
 * Date: 12/6/12
 * Time: 8:38 AM
 * To change this template use File | Settings | File Templates.
 */
?>

<h3>Виртуальный хостинг</h3>
<p>
    Виртуальный хостинг, также известный как shared hosting – наиболее востребованный, удобный и доступный по цене web
    хостинг для размещения в Сети сайта какой-либо компании, интернет-форума, личной странички или блога.
</p>
<div id='main' class='row'>
    <?php
    $this->widget('application.widgets.WHosting', array(
        'items' => array(
            array(
                'header' => 'MeLite',
                'price' => '$5',
                'hdd' => '500 Mb',
                'ram' => '32 Mb',
                'traffic' => '*Безлимитный трафик',
                'config' => 'PHP / MySQL'
            ),
        )));

    $this->widget('application.widgets.WHosting', array(
        'items' => array(
            array(
                'header' => 'MePro',
                'price' => '$8',
                'hdd' => '1 Gb',
                'ram' => '48 Mb',
                'traffic' => '*Безлимитный трафик',
                'config' => 'PHP / MySQL'
            ),
        )));

    $this->widget('application.widgets.WHosting', array(
        'items' => array(
            array(
                'header' => 'MeMax',
                'price' => '$11',
                'hdd' => '3 Gb',
                'ram' => '64 Mb',
                'traffic' => '*Безлимитный трафик',
                'config' => 'PHP / MySQL'
            ),
        )));
    ?>
    <div class='span7'>
        <h4 class='alert alert-info'>Все тарифы хостинга включают в себя</h4>
        <ul class='pull-left'>
            <li>Панель Управления (ISPManager Lite);
            <li>MySQL 5.0, PHP 5.2, Zend, phpMyAdmin;
            <li>Perl 5.8, Python 2.4;
            <li>SSH, sFTP/FTP доступ;
            <li>Поддержку неограниченного числа доменов;
            <li>Access и Error журналы (логи сервера), статистика сервера;
            <li>Управление .htaccess, собственные страницы ошибок;
            <li>Неограниченный и бесплатный трафик;
            <li>Файловый Web-менеджер;
            <li>Управление задачами по расписанию - Cron;
            <li>Защищенные POP3, IMAP сервисы для удаленной работы с почтой;
            <li>Защищенный SMTP сервер для отправки корреспонденции;
            <li>Резервное копирование (осуществляется по внутреннему регламенту);
            <li>Службу поддержки 24 x 7.
        </ul>
    </div>