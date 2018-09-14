<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
		'encodeLabels' => false,
        'items' => [
            ['label' => 'Home','label' => '<span class="glyphicon glyphicon-home">  Home</span>', 'url' => ['/site/index']],
			['label' => 'Cir','label' => '<span class="glyphicon glyphicon-file"> Cir</span>','url' => ['/cir/index'],
			'template' => '<a href="{/site/import}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
					 'items' => [
						['label' => 'Bul Hanine Project', 'url' => 'http://localhost/basic/web/index.php?r=cir%2Findex'],
						['label' => 'Reliance Project', 'url' => '#'],
						['label' => 'Gorgon Project', 'url' => '#'],
						['label' => 'Total Tyra Project', 'url' => '#'],
					 ], 
			],
			['label' => 'Roster','label' => '<span class="glyphicon glyphicon-calendar"> Roster</span>','url' => ['/event/index'],
			'template' => '<a href="{/site/import}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
					'items' => [
						['label' => 'Bul Hanine Project', 'url' => 'http://localhost/basic/web/index.php?r=event%2Findex'],
						['label' => 'Reliance Project', 'url' => '#'],
						['label' => 'Gorgon Project', 'url' => '#'],
						['label' => 'Total Tyra Project', 'url' => '#'],
						['label' => 'Summary', 'url' => '#'],
					],
			],
			['label' => 'Import','label' => '<span class="glyphicon glyphicon-upload"> Import</span>', 'url' => ['/site/import'], 
				'template' => '<a href="{/site/import}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
					 'items' => [
						 ['label' => 'CIR', 'url' => 'http://localhost/basic/web/index.php?r=site%2Fimport'],
						 ['label' => 'Personnel List', 'url' => '#'],
						 ['label' => 'Equipment List', 'url' => '#'],
					 ],
			],
			['label' => 'List','label' => '<span class="glyphicon glyphicon-list"> List</span>','url' => ['/equip-bulhanine/index'], 
				'template' => '<a href="{/site/import}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
					 'items' => [
						 ['label' => 'Equipment List', 'url' => 'http://localhost/basic/web/index.php?r=equip-bulhanine%2Findex'],
						 ['label' => 'Personnel List', 'url' => 'http://localhost/basic/web/index.php?r=personnel-bulhanine%2Findex'],
					 ],
			],
            ['label' => 'About','label' => '<span class="glyphicon glyphicon-info-sign"> Contact</span>' ,'url' => ['/site/about']],
            ['label' => 'Contact','label' => '<span class="glyphicon glyphicon-phone-alt"> Contact</span>' ,'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; UT Quality <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
