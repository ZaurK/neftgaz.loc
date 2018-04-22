<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

 <div class="container">
	     
	      <div class="formorder">
		      <div class="content">


                <?php $form = ActiveForm::begin(['id' => 'contact-form-top', 'class' => 'formord']); ?>
				<div class="row">

                    <div class="col-md-3"><?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Имя']) ?></div>

                    <div class="col-md-3"><?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Email']) ?></div>
					
                    <div class="col-md-3"><?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => 'Телефон']) ?></div>

                    <div class="col-md-3"><?= Html::submitButton('Оставить заявку', ['class' => 'mbutton sbtn', 'name' => 'contact-button']) ?></div>
                   
				</div>	
                <?php ActiveForm::end(); ?>
                <div class="clearfix"></div>	

        </div>	  
	  </div>
</div>

	  <div class="container margin36">
	      <div class="row">
		      <div class=" col-md-8 text-center col-md-offset-2">
			      <div class="promo">
				   <img src="/images/5.png" class="top">
			      OOO «Нефте-Газ Консалтинг» оказывает профессиональные услуги
                  в области финансово-экономической и технической экспертизы
                  предприятий топливно-энергетического комплекса России (ТЭК),
                  проведения научно-исследовательских и аналитических работ,
                  связанных с функционированием и развитием электроэнергетики,
                  нефтяной и газовой промышленности, сферы ЖКХ.
				   <img src="/images/4.png" class="bottom">
                  </div>
			  </div>
		  </div>
	  </div>
	  
	  <div class="container text-center margin64">
	  <h1>Основные принципы работы</h1>
	  <div class="margin48"></div>
	      <div class="row">
		      <div class="col-sm-4">
			      <div class="wrapper">
                      <div class="example">
					      <div class="pic"><img src="/images/1.png"></div>
						  <hr>
					      <h3>Независимость</h3>
					  </div>
                  </div>
			  </div>
		      <div class="col-sm-4">
			      <div class="wrapper">
                      <div class="example">
					      <div class="pic"><img src="/images/2.png"></div>
						  <hr>
					      <h3>Профессионализм</h3>
					  </div>
                  </div>
			  </div>
		      <div class="col-sm-4">
			      <div class="wrapper">
                      <div class="example">
					      <div class="pic"><img src="/images/3.png"></div>
						  <hr>
					      <h3>Конфиденциальность</h3>
					  </div>
                  </div>
				  
			  </div>
			  
	      
	  
	      </div>
	  
	  
	  
	  </div>
	  
	  <div class="imagebox2 margin48">         
             <div class="textright">       
			      В своей деятельности ООО «Нефте-газ Консалтинг»
                  применяет комплексный подход в решении
                  поставленных задач, связанных с проектированием,
                  разработкой, изготовлением, комплектацией, поставкой
                  необходимого оборудования и материалов, ремонта
                  и сервисного обслуживания, оказания полного спектра
                  технических и консультационных услуг. Комплексная
                  поставка инженерных решений — это целый комплекс
                  мероприятий, проводимый компанией с целью
                  сдачи объекта точно в срок. Специалисты ООО
                  «Нефте-Газ Консалтинг» помогут подобрать
                  приемлемый по качеству и цене вариант комплектации
                  и обеспечат своевременную логистику.           
              </div>
			  <div class="imgblock2"></div>
              <div class="clearfix"></div>			  
	  </div>
	  
	  <div class="container margin48">
	      <div class="row">
		      <div class=" col-md-8 text-center col-md-offset-2">
			      <div class="promo">
				  <img src="/images/5.png" class="top">
			      В рамках комплексного решения закрываются все задачи комплектации
                  проекта. Мы берём на себя ответственность за соблюдение сроков
                  и поставки всей номенклатуры позиций.
				  <a class="btn bbutton1" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
				  <img src="/images/4.png" class="bottom">
                  </div>
			  </div>
		  </div>
	  </div>
    
       <div class="imagebox3">	       
	           <div class="textleft">	         
			      <h1>Оказание экспертных и консалтинговых услуг в сфере ТЭК:</h1>
		          Разработка и экспертиза инвестиционных программ
                  предприятий ТЭК, в том числе программ газификации
                  субъектов РФ, финансируемых за счет специальных
                  надбавок к тарифам на услуги по транспортировке
                  газа по газораспределительным сетям.<br><br>
                  Оказание услуг, поставка МТР, разработка комплексных
                  программ развития коммунальной инфраструктуры,
                  нефтегазовой отрасли, систем газоснабжения.
                  Разработка и экспертиза комплексных программ по
                  повышению энергетической эффективности и
                  энергосбережению.<br><br>
                  Разработка программ развития систем коммерческого
                  учета потребления природного газа, электрической и
                  тепловой энергии.              
              </div>
			  <div class="imgblock3"></div>
		      <div class="clearfix"></div>		  
	  </div>
	  
	<div class="banners" id="metal">
    
    <div class="banner_content">
        <h1>Металлопрокат различного сортамента по отраслям:</h1>
                  <ul>
				      <li>гражданское и промышленное строительство (арматура, мелко- и среднеразмерные уголок, балка, швеллер),</li>
				      <li>транспортная нефте- и газо- инфраструктура (трубы различных диаметров),</li>
				      <li>нефте-, зерно-, газохранилища и резервуары (металлический лист),</li>
				      <li>метизно-анкерной продукции (болты, гайки, шпильки, скобы), металлоконструкции, включая составляющие опор линий электропередачи,</li>
				      <li>поставка запорной арматуры.</li>
				  </ul>
				  
       
		
    </div>
	<img src="images/15.png">
	<a class="btn bbutton" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
    </div>
	
	<div class="banners" id="stroy">   
    <div class="banner_content">
        <h1>Строительные материалы и сухие строительные смеси широкого спектра</h1>
			      <p>Строительные материалы и сухие строительные смеси широкого спектра,
включающего как материалы для строительства зданий и сооружений, так
и отделочные материалы для декоративных работ внутри помещений
(строительные пиломатериалы, изделия из древесины, кровельные материалы,
сухие строительные смеси для строительно-монтажных работ и кладки,
гидроизоляционные смеси, составы для устройства напольных покрытий,
современные отделочные материалы, системы утепления фасадов зданий).</p>

        
    </div>
	<img src="images/14.png">
	<a class="btn bbutton" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
    </div>
<div class="banners" id="energ">    
    <div class="banner_content">
        <h1>Поставка энергетического и электротехнического оборудования</h1>
			      <p>Поставка энергетического и электротехнического оборудования                 
				  (распределительные устройства, комплектные трансформаторные
                  подстанции, силовые и распределительные трансформаторы,
                  блочно-модульные быстровозводимые здания, кабельно-проводниковая
                  продукция, системы АСУТП и АСКУЭ, резервные источники питания).</p>
				 
        
    </div>
	<img src="images/16.png">
	 <a class="btn bbutton" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
    </div>
<div class="banners" id="ugol">    
    <div class="banner_content">
        <h1>Поставка угля различных марок, сортамента и фракций.</h1>
			     
        
    </div>
	<img src="images/17.png">
	<a class="btn bbutton" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
    </div>	 
<div class="banners margin36" id="neft">   
    <div class="banner_content">
        <h1>Оптовая торговля нефтью, нефтепродуктами, различными горюче-смазочными материалами, химической и нефтехимической продукцией.</h1>
			    
        
    </div>
	<img src="images/18.png"> 
	<a class="btn bbutton" data-toggle="modal" data-target="#myModal"><span class="btxt">Оставить заявку</span></a>
</div>	 	  
	 
	  
	
	
	 <div class="container margin36">
	      <div class="row">
		      <div class=" col-md-8 text-center col-md-offset-2">
			      <div class="partners">
				  <img src="/images/5.png" class="top">
			      Нашими партнерами являются ведущие проектные, строительно-
монтажные организации, заводы-изготовители и поставщики
оборудования и материалов, логистические и страховые компании,
позволяющие успешно реализовывать сложные социально-значимые
инфраструктурные проекты.
				  <img src="/images/4.png" class="bottom">
                 </div>
			     
		  
	          </div>
	      </div>
	  </div>
	  
	  
	  <div class="imgblock9 margin36">
	      <div class="textleft">
	          <div class="text text-center">
			  <img src="/images/7.png" class="im7">
			  <h1>Выражаем готовность стать для Вас надежным
партнером, сотрудничество с которым позволит достичь намеченных целей.</h1>
			  <img src="/images/6.png" class="im6">  
			  </div>
			  <div class="clearfix"></div>
          </div>		  
	  </div>
	  
	   <div class="container margin36">
	      <h1 class="text-center">Оставить заявку</h1>
	      <div class="formorder2">
		          <div class="formorder2">
		    
              	 <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'formord']); ?>
				<div class="row">
                    <div class="col-md-12"><?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Имя']) ?></div>
                    <div class="col-md-12"><?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Email']) ?></div>				
                    <div class="col-md-12"><?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => 'Телефон']) ?></div>
                    <div class="col-md-12"><?= Html::submitButton('Оставить заявку', ['class' => 'mbutton sbtn2', 'name' => 'contact-button']) ?></div>                  
				</div>	
                <?php ActiveForm::end(); ?>	  
          </div>	
              <div class="clearfix"></div>			  
          </div>		  
	  </div>
	  
	  <div id="map">
	      <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
            <section class="section map-contact" >
              <div id="YMapsID" style="height:500px;"></div>
              <script type="text/javascript">
        var my_map;
        var coordinate = [55.864813568869295,37.680975499999946];		                  
        ymaps.ready(init);
        function init() {
            my_map = new ymaps.Map("YMapsID", {
                center: coordinate,
                zoom: 17,
                controls: ["fullscreenControl", "zoomControl"]
            });
            my_map.behaviors.disable('scrollZoom');
            var placemark = new ymaps.Placemark(coordinate, null, {
                id: 'NeftegazIDPlacemark',
                iconLayout: 'default#image',
                iconImageHref: './images/9big.png',
                iconImageSize: [60, 100],
                iconImageOffset: [-75, -99.7656]
            });
            my_map.geoObjects.add(placemark);
        }
         </script>
        </section>
	  
	  </div>
	  
	   <div class="contacts margin36">
	      <div class="container">
		      <div class="col-md-4">
			      <div class="circl"><div class="img8"><img src="/images/8.png"></div><div class="tx8">Телефон <br>8 (499) 558-35-50</div></div>
                  				  
			  </div>
		      <div class="col-md-4">
			      <div class="circl"><div class="img9"><img src="/images/9.png"></div><div class="tx9">Адрес <br>Москва, ул. Коминтерна,<br>д.20/2, пом.3, ком.20</div></div>
			  
			  </div>
		      <div class="col-md-4">
			      <div class="circl"><div class="img10"><img src="/images/10.png"></div><div class="tx10">E-mail<br>info@ogconsult.com</div></div>
			  
			  </div>
		  
		  </div>
		  
		 

	  </div>