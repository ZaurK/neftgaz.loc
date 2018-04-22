<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\FBFWidget;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head() ?>



	<style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300i');
    </style>
  </head>
  
  <body>
    <?php $this->beginBody() ?>
   <div class="container">
	      <div class="row headerline">
			  <div class="col-md-6 col-sm-12"><a href="<?= Url::home(); ?>"><img src="/images/logo.png" alt="НЕФТЕ-ГАЗ КОНСАЛТИНГ"></a></div>
		      <div class="col-md-3 col-sm-12"><img src="/images/9.png" class="pic"><div class="text">Адрес<br>Москва, ул. Коминтерна, д.20/2, пом.3, ком.20</div></div>
		      <div class="col-md-3 col-sm-12"><img src="/images/8.png" class="pic"><div class="text">Телефон<br>8 (499) 558-35-50</div></div>
              <div class="clearfix"></div>			  
		  </div>
       	  
	  </div>
	  <div class="container">
	      <div class="menu">
		      <div class="mynav">
                  <ul class="cf">                     
                      <li><a class="dropdown" href="#">Услуги</a>
                          <ul>
                              <li><a href="<?= Url::toRoute(['site/index', '#' => 'metal']); ?>" id="lmetal">Металлопрокат</a></li>
                              <li><a href="<?= Url::toRoute(['site/index', '#' => 'energ']); ?>" id="lenerg">Поставка оборудования</a></li>
                              <li><a href="<?= Url::toRoute(['site/index', '#' => 'stroy']); ?>" id="lstroy">Строительные материалы</a></li>
                              <li><a href="<?= Url::toRoute(['site/index', '#' => 'ugol']); ?>" id="lugol">Поставка угля</a></li>
                              <li><a href="<?= Url::toRoute(['site/index', '#' => 'neft']); ?>" id="lneft">Оптовая торговля нефтью</a></li>							  
                          </ul>
                      </li>
                      <li><a href="<?= Url::toRoute(['site/index']); ?>" id="lcont">Контакты</a></li>
                      <li><a href="<?= Url::toRoute(['site/index']); ?>" id="lmap">Карта</a></li>
                  </ul>
              </div>
		  
		  </div>
	  </div>
	  <div class="headerimg">
	      <h1 class="oo text-center">OOO «Нефте-Газ Консалтинг»</h1>
	      <h1 class="bb text-center">БЫСТРО, УДОБНО И НАДЕЖНО</h1>
		  
	  </div>
<?= $content?>
	  
	  <div class="container footer">
		      <div class="col-sm-12 col-md-6 margin36">
			      <img src="/images/logo.png">
			  </div>
			  <div class="col-sm-12 col-md-6 margin36">
			                  <div class="lnks"><a href="<?= Url::toRoute(['site/index', '#' => 'metal']); ?>">Металлопрокат</a></div>				   
				              <div class="lnks"><a href="<?= Url::toRoute(['site/index', '#' => 'energ']); ?>">Поставка энергетического оборудования</a></div>
                              <div class="lnks"><a href="<?= Url::toRoute(['site/index', '#' => 'stroy']); ?>">Строительные материалы</a></div>
                              <div class="lnks"><a href="<?= Url::toRoute(['site/index', '#' => 'ugol']); ?>">Поставка угля</a></div>
                              <div class="lnks"><a href="<?= Url::toRoute(['site/index', '#' => 'neft']); ?>">Оптовая торговля нефтью</a></div>
			  </div>
	  </div>
	
	
	

    <?= FBFWidget::widget([]) ?>
	<?php $this->endBody() ?>
	
  </body>
</html>
<?php $this->endPage() ?>