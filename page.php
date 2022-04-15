<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wizesafe
 */

get_header();
?>

	<div class="bg-1">
	<div class="container">
		<div class="row">
			<div class="item">
				<a href="" class="go_many"><img src="img/many.svg" alt="">перевести деньги</a>
			</div>
			<div class="item">
				<span>Завтра может быть уже поздно!</span>
			</div>
			<div class="item">
				<ul>
					<li><a href="#" id="myBtn">Sign up</a></li>
					<li><a href="">Log in</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
	

<div class="bg-2">
	<div class="container">
		<div class="row">
			<div class="item">
				<h1><?php the_field('title'); ?> </h1>
			</div>
			<div class="item">
				<form action="">
					<label for="">Вы платите</label>
					<input type="text" placeholder="6000.00">
					<img src="img/convert_many.svg" alt="">
					<label for="">Получатель получит</label>
					<select name="select"> <!--Supplement an id here instead of using 'name'-->
					  <option value="value1">Значение 1</option>
					  <option value="value2" selected>Значение 2</option>
					  <option value="value3">Значение 3</option>
					</select>
					<div class="itog">Рассчетная сумма к получению не учитывает комиссионные и иные сборы за оказание услуги</div>
					<ul>
						<li>Стоимость услуги................................£3.98	</li>
						<li>Сегодняшний курс...............160.728636</li>
						<li>Будет зачислено на счет получателя до....28 Марта</li>
					</ul>
					<button>Оформить заявку</button>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="bg-3">
	<div class="container">
		<div class="row">
			<p><?php the_field('online_trans'); ?></p>
		</div>
	</div>
</div>


<div class="bg-4">
	<div class="container">
		<div class="row">
			<div class="item">
				<img src="<?php the_field('img-1'); ?>" alt="">
				<div class="txt"><?php the_field('text-1'); ?></div>
			</div>
			<div class="item">
				<img src="<?php the_field('img-2'); ?>" alt="">
				<div class="txt"><?php the_field('text-2'); ?></div>
			</div>
			<div class="item">
				<img src="<?php the_field('img-3'); ?>" alt="">
				<div class="txt"><?php the_field('text-3'); ?></div>
			</div>
		</div>
	</div>
</div>

<div class="bg-5">
	<div class="container">
		<div class="row">
			<h2><?php the_field('title_block'); ?></h2>
		</div>
		<div class="row">
			<div class="item">
				<h3 class="blue"><?php the_field('title_1'); ?></h3>
				<div class="cont">
					<?php the_field('content_1'); ?>
				</div>

				<h3 class="blue"><?php the_field('title_2'); ?></h3>
				<div class="cont">
					<?php the_field('content_2'); ?>
				</div>

					<h3 class="blue"><?php the_field('title_3'); ?></h3>
				<div class="cont">
					<?php the_field('content_3'); ?>
				</div>

					<h3 class="blue"><?php the_field('title_4'); ?></h3>
				<div class="cont">
					<?php the_field('content_4'); ?>
				</div>

					<h3 class="blue"><?php the_field('title_5'); ?></h3>
				<div class="cont">
					<?php the_field('content_5'); ?>
				</div>

					<h3 class="blue"><?php the_field('title_6'); ?></h3>
				<div class="cont">
					<?php the_field('content_6'); ?>
				</div>


			</div>
			<div class="item">
				<h3 class="green"><?php the_field('title_7'); ?></h3>
				<div class="cont">
                    <?php the_field('content_7'); ?>
				</div>


				<h3 class="green"><?php the_field('title_8'); ?></h3>
				<div class="cont">
					<?php the_field('content_8'); ?>
				</div>


				<h3 class="green"><?php the_field('title_9'); ?></h3>
				<div class="cont">
					<?php the_field('content_9'); ?>
				</div>


				<h3 class="green"><?php the_field('title_10'); ?></h3>
				<div class="cont">
					<?php the_field('content_10'); ?>
				</div>


				<h3 class="green"><?php the_field('title_11'); ?></h3>
				<div class="cont">
					<?php the_field('content_11'); ?>
				</div>


				<h3 class="green"><?php the_field('title_12'); ?></h3>
				<div class="cont">
					<?php the_field('content_12'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="bg-6">
	<div class="container">
		<div class="row bg">  
			<div class="wraper">
				<h2><?php the_field('title_block-4'); ?></h2>
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/line.png" alt="">
					<h4><?php the_field('title_4-1'); ?></h4>
					<p><?php the_field('cont-1'); ?></p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/line.png" alt="">
					<h4><?php the_field('title_4-2'); ?></h4>
					<p><?php the_field('cont-2'); ?> </p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/line.png" alt="">
					<h4><?php the_field('title_4-3'); ?></h4>
					<p><?php the_field('cont-3'); ?></p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() ?>/img/line.png" alt="">
					<h4><?php the_field('title_4-4'); ?></h4>
					<p><?php the_field('cont-4'); ?></p>
				</li>
			</ul>
			<div class="transaction"><img src="<?php echo get_template_directory_uri() ?>/img/trans.png" alt=""> <?php the_field('proverka'); ?></div>
			<div class="min">
				<?php the_field('min-sum'); ?>
			</div>
			</div>
			
		</div>
	</div>
</div>

<div class="bg-7">
	<div class="container">
		
			<h2><?php the_field('bl-5-title'); ?></h2>
			<div class="wraper">
				<div class="item">
					<ul>
					<li><a href=""><img src="img/1.png" alt="">Argentina</a></li>
					<li><a href=""><img src="img/2.png" alt="">Bahrain</a></li>
					<li><a href=""><img src="img/3.png" alt="">Bangladesh</a></li>
					<li><a href=""><img src="img/4.png" alt="">Bolivia</a></li>
					<li><a href=""><img src="img/5.png" alt="">Brazil</a></li>
					<li><a href=""><img src="img/6.png" alt="">Cameroon</a></li>
					<li><a href=""><img src="img/7.png" alt="">Canada</a></li>
					<li><a href=""><img src="img/8.png" alt="">Chile</a></li>
					<li><a href=""><img src="img/9.png" alt="">China</a></li>
					<li><a href=""><img src="img/10.png" alt="">Colombia</a></li>
					<li><a href=""><img src="img/11.png" alt="">China</a></li>
					<li><a href=""><img src="img/12.png" alt="">Colombia</a></li>
					<li><a href=""><img src="img/13.png" alt="">Egypt</a></li>
					<li><a href=""><img src="img/14.png" alt="">Germany</a></li>
				</ul>
				</div>
				<div class="item">
					<ul>
						<li><a href=""><img src="img/15.png" alt="">Italy</a></li>
						<li><a href=""><img src="img/16.png" alt="">India</a></li>
						<li><a href=""><img src="img/17.png" alt="">Indonesia</a></li>
						<li><a href=""><img src="img/18.png" alt="">Kenya</a></li>
						<li><a href=""><img src="img/19.png" alt="">Kyrgyzstan</a></li>
						<li><a href=""><img src="img/20.png" alt="">Mexico</a></li>
						<li><a href=""><img src="img/21.png" alt="">Montenegro</a></li>
						<li><a href=""><img src="img/22.png" alt="">Nepal</a></li>
						<li><a href=""><img src="img/23.png" alt="">Netherlands</a></li>
						<li><a href=""><img src="img/24.png" alt="">Nigeria</a></li>
						<li><a href=""><img src="img/25.png" alt="">Philippines</a></li>
						<li><a href=""><img src="img/26.png" alt="">Russia</a></li>
						<li><a href=""><img src="img/27.png" alt="">Egypt</a></li>
						<li><a href=""><img src="img/28.png" alt="">Rwanda</a></li>
					</ul>
				</div>
				<div class="item">
					<ul>
						<li><a href=""><img src="img/29.png" alt="">Rwanda</a></li>
						<li><a href=""><img src="img/30.png" alt="">Rwanda</a></li>
						<li><a href=""><img src="img/31.png" alt="">Bangladesh</a></li>
						<li><a href=""><img src="img/32.png" alt="">Bolivia</a></li>
						<li><a href=""><img src="img/33.png" alt="">Brazil</a></li>
						<li><a href=""><img src="img/34.png" alt="">Cameroon</a></li>
						<li><a href=""><img src="img/35.png" alt="">Canada</a></li>
						<li><a href=""><img src="img/36.png" alt="">Chile</a></li>
						<li><a href=""><img src="img/37.png" alt="">China</a></li>
						<li><a href=""><img src="img/38.png" alt="">Colombia</a></li>
						<li><a href=""><img src="img/39.png" alt="">China</a></li>
					</ul>
					<div class="deteil"><a href="">Узнать подробности ></a></div>
				</div>
			</div>
	</div>
</div>





<div class="bg-8">
	<div class="container">
		<h2><?php the_field('bl-6-title'); ?></h2>
		<div class="cont"><?php the_field('chouse'); ?></div>
		<img src="<?php the_field('img-6'); ?>" alt="">
		<div class="cont"><?php the_field('no-block'); ?></div>
	</div>
</div>



<div class="bg-9">
	<div class="container">
		<h2><?php the_field('title-7'); ?></h2>
		<div class="accordion">
			<div class="card">
				<div class="card-header">
					<span class="fa fa-minus"></span>
					<h3><?php the_field('tit-1'); ?> </h3>
					
				</div>
				<div class="card-body">
					<p>
					<?php the_field('otvet-1'); ?></p>
				</div>
			</div>

				<div class="card">
				<div class="card-header">
					<span class="fa fa-plus"></span>
					<h3><?php the_field('tit-2'); ?></h3>
					
				</div>
				<div class="card-body">
					<p><?php the_field('otvet-2'); ?>
			</p>
				</div>
			</div>

				<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-3'); ?></h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-3'); ?></p>
					</div>
				</div>

					<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-4'); ?></h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-4'); ?></p>
					</div>
				</div>

					<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-5'); ?></h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-5'); ?></p>
					</div>
				</div>

					<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-6'); ?></h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-6'); ?></p>
					</div>
				</div>

					<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-7'); ?></h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-7'); ?></p>
					</div>
				</div>

					<div class="card">
					<div class="card-header">
						<span class="fa fa-plus"></span>
						<h3><?php the_field('tit-8'); ?> </h3>
						
					</div>
					<div class="card-body">
						<p><?php the_field('otvet-8'); ?></p>
					</div>
				</div>
		</div>
		<div class="otvet">
			<?php the_field('no-otvet'); ?>
			</div>
	</div>
</div>

<div class="bg-10">
	<div class="container">
		<div class="wraper">
			<div class="item">
				<img src="<?php the_field('logo'); ?>" alt="">
			</div>
			<div class="item">
				<ul>
					<li><a href="">Новости и блог</a></li>
					<li><a href="">Центр помощи</a></li>
					<li><a href="">Приведи друга</a></li>
				</ul>
			</div>
			<div class="item">
				<span><?php the_field('phone'); ?></span>
			</div>
		</div>
	</div>
</div>


<?php

get_footer();
