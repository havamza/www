<?php /* @var $this Controller */
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="description" content="Качественный платный хостинг сайтов, разработка и поддержка сайтов">
    <meta name="keywords"
          content="хостинг, домен, аудит, безопасность, разработка, CMS, WordPress, Yii, Magento, OpenCart, веб, web, сайт, студия">


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

    <?php Yii::app()->clientScript->registerCoreScript('bootstrap'); ?>

</head>
<body>
<div class='row-fluid'>
    <div id='main' class='span8'>
        <div id='header'><?php echo CHtml::image('/images/logo.png'); ?></div>
        <div class='navbar navbar-inverse'>
            <div class='navbar-inner'>
                <?php $this->widget('zii.widgets.CMenu', array(
                'htmlOptions' => array('class' => 'nav'),
                'items' => array(
                    array('label' => 'Главная', 'url' => array('site/index')),
                    array('label' => 'Web Студия', 'url' => array('site/page', 'view' => 'studio')),
                    array('label' => 'Web Хостинг', 'url' => array('site/page', 'view' => 'hosting')),
                    array('label' => 'Поддержка', 'url' => array('site/page', 'view' => 'support')),
                    array('label' => 'Новости', 'url' => array('site/page', 'view' => 'news')),
                    array('label' => 'О нас', 'url' => array('site/page', 'view' => 'about')),
                    array('label' => 'Контакты', 'url' => array('site/contact')),
                    array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); ?>
            </div>
        </div>
        <div class='well'>
            <?php echo $content; ?>
        </div>
        <div id='footer' class='pagination-centered'>
            Copyright &copy; <?php echo date('Y'); ?> by Olympico systems<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered() . ' ' . Yii::getVersion(); ?>
            <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36929483-1']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();

            </script>
        </div>
    </div>
</div>
</body>
</html>
