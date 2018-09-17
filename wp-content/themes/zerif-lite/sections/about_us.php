<?php
/**
 * About us section
 *
 * @package zerif-lite
 */

zerif_before_about_us_trigger();

$zerif_aboutus_show = get_theme_mod( 'zerif_aboutus_show' );

echo '<section class="about-us ' . ( ( is_customize_preview() && ( ! isset( $zerif_aboutus_show ) || $zerif_aboutus_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="aboutus">';

?>

	<?php zerif_top_about_us_trigger(); ?>

	<div class="container">
		<!-- SECTION HEADER -->

		<div class="section-header">
<?php 
    echo do_shortcode("[metaslider id=47]"); 
?>
			<h1>Шахматы — это интересно!</h1>
		
<center><p>Шахматы - это не только ежедневная кропотливая работа для достижения спортивных успехов. </br>Занятия шахматами способствуют всестороннему развитию человека и дарят массу положительных эмоций. </br>Если кому-то скучно на занятиях - значит он попал не к тому тренеру :)</p>
<h1>Групповые и индивидуальные занятия с детьми от 4-х лет и взрослыми.</h1>
<p>Понедельник – пятница «Школа № 2123 имени Мигеля Эрнандеса» м. Арбатская, Пушкинская, Тверская.</p>
</div>
</div>
		<!-- BEGIN FIRST ROOM WRAP -->
					<div class="rooms-list-item-wrap">
						<div class="rooms-list-item-image-wrap">
							<img src="wp-content/uploads/2018/08/room1-1.jpg" id="rooms-list-image">
							<a href="gi_kids.html" class="latestnews-title"><div class="latestnews-title">
								<div class="room-overlay-content">
									<a href="gi_kids"><div class="latestnews-title"><span class="icon-search"></span></div></a>
									<div class="room-overlay-checkavail overlay-checkavail2" id="room-main-one"><span class="icon-calendar"></span></div>
								</div>
								</div></a>
							
						</div>
						<div class="rooms-list-content-wrap module-bottom">
							<a href="gi_kids"><div class="latestnews-title">Групповые и индивидуальные занятия для детей</div></a>
							
							<div class="room-list-parametr">
								
								<div id="room-bed">Занятия шахматами пользуются большой популярностью у детей, несмотря на десятки различных других кружков и возможностей заниматься спортом. Содержание занятий и скорость усвоения материала очень сильно зависит от возраста ребенка...</div>
							</div>				
						</div>
						<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">							
							<div class="modal-body">
								<div id="frontend"></div>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть <span class="icon-remove"></span></button>
							</div>
						</div>
					</div>
					<!-- END FIRST ROOM WRAP -->
					
					<!-- BEGIN SECOND ROOM WRAP -->
					<div class="rooms-list-item-wrap">
						<div class="rooms-list-item-image-wrap">
							<img src="wp-content/uploads/2018/08/room2-2.jpg" id="rooms-list-image">
							<a href="stand-2" class="room-overlay-link"><div class="room-main-list-overlay">
								<div class="room-overlay-content">
									<a href="stand"><div class="room-overlay-readmore"><span class="icon-search"></span></div></a>
									<div class="room-overlay-checkavail overlay-checkavail" id="room-main-one"><span class="icon-calendar"></span></div>
								</div>
							</div></a>
							
						</div>
						<div class="rooms-list-content-wrap module-bottom">
							<a href="stand-2"><div class="latestnews-title">Занятия со взрослыми</div></a>
							<div class="underheader-line"></div>
							<div class="room-list-parametr">
								
								<div id="room-bed">Работа со взрослыми проходит как в группах, так и индивидуально. Материал занятий взрослые, по общему правилу, усваивают быстрее, чем дети, поэтому результаты обучения видны уже после 2-3 занятий.


В современном мире ценится время и мобильность, поэтому удобным местом...

</div>
							</div>
						</div>	
						<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">							
							<div class="modal-body">
								<div id="frontend2"></div>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть <span class="icon-remove"></span></button>
							</div>
						</div>
					</div>
					<!-- END SECOND ROOM WRAP -->
					
					<!-- BEGIN THIRD ROOM WRAP -->
					<div class="rooms-list-item-wrap">
						<div class="rooms-list-item-image-wrap">
							<img src="wp-content/uploads/2018/08/room3-2.jpg" id="rooms-list-image">
							<a href="mat" class="room-overlay-link"><div class="room-main-list-overlay">
								<div class="room-overlay-content">
									<a href="mat"><div class="room-overlay-readmore"><span class="icon-search"></span></div></a>
									<div class="room-overlay-checkavail overlay-checkavail3" id="room-main-one"><span class="icon-calendar"></span></div>
								</div>
							</div></a>
							
						</div>
						<div class="rooms-list-content-wrap module-bottom">
							<a href="mat"><div class="latestnews-title">Преподавание курса решения олимпиадных математических задач</div></a>
							<div class="underheader-line"></div>
							<div class="room-list-parametr">
								
								<div id="room-bed">Для детей 7-12 лет.
Дети, сильно увлекающиеся шахматами, часто проявляют интерес и серьезные способности к различным математическим задачам на логику. Для таких детей проводятся специальные занятия по математике, либо комбинированные занятия, когда ребенок...</div>
							</div>					
						</div>
						<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">							
							<div class="modal-body">
								<div id="frontend3"></div>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть <span class="icon-remove"></span></button>
							</div>
						</div>
					</div>
					<!-- END THIRD ROOM WRAP -->
					
	<?php zerif_bottom_about_us_trigger(); ?>

</section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>
