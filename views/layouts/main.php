<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
//use app\assets\AppAsset;
use app\assets\FrontAsset;
use app\components\mgcms\MgHelpers;

//AppAsset::register($this);
FrontAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
                href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
                rel="stylesheet"
        />
        <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800&display=swap"
                rel="stylesheet"
        />
        <link href="./fonts/stylesheet.css" rel="stylesheet" />
        <link
                rel="stylesheet"
                href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                crossorigin="anonymous"
        />
        <link
                href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                rel="stylesheet"
                integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                crossorigin="anonymous"
        />
        <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
                integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
                crossorigin="anonymous"
        />
        <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body id="page_<?= Yii::$app->controller->id . '_' . Yii::$app->controller->action->id ?>">
        <?php $this->beginBody() ?>
        <?= $this->render('header') ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        <?= $this->render('footer') ?>
        <?php $this->endBody() ?>


    </body>
</html>
<?php $this->endPage() ?>
