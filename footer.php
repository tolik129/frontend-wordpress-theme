<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wizesafe
 */

?>


<footer>
	<div class="container">
		<div class="wraper">
			<div class="item">
				<h3>Банки с которыми мы работаем:</h3>
				<p><?php the_field('banks'); ?>
		</p>
		    <div class="wraper-card">
		    	<img src="img/visa.png" alt="">
		    	<img src="img/master.png" alt="">
		    </div>
			</div>
			<div class="item">
				<h3>Лицензии:</h3>
				<p><?php the_field('licensii'); ?> </p>
			</div>
			<div class="item item-2">
				<img src="img/app.png" alt="">
				<img src="img/google.png" alt="">
				<img src="img/qr.png" alt="">
				<ul>
					<li><a href=""><img src="img/vk.png" alt=""></a></li>
					<li><a href=""><img src="img/vb.png" alt=""></a></li>
					<li><a href=""><img src="img/tel.png" alt=""></a></li>
				</ul>
			</div>
		</div>

		<ul class="menu-footer">
			<li><a href="">Политика конфеденциальности</a></li>
			<li><a href="">Условия пользования сервисом</a></li>
			<li><a href="">Политика Cookie</a></li>
		</ul>
		<div class="reserved"><?php the_field('wizesafe_group'); ?></div>
	</div>
</footer>

















<div id="myModal" class="modal">

 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    
    </div>
    <div class="modal-body">
      <h2>Создать лицевой счёт</h2>
      <form action="">
      	<select name="" id="">
      		<option value="">+7</option>
      		<option value="">+8</option>
      		<option value="">+6</option>
      	</select>
      	<input type="text" class="number_phone" placeholder="номер телефона">
      	<input type="text" placeholder="фамилия">
      	<input type="text" placeholder="Имя">
      	<input type="date" placeholder="дата рождения">
      	<input type="email" placeholder="Адрес электронной почты">
      	<button>открыть счёт</button>
      </form>
      <div class="wraper_in">
      	<span>Уже есть аккаунт?</span>
      	<a href=""> Войти</a>
      </div>
    </div>
   
  </div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
	var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
	$(document).ready(function(){
		$(".card-header").click(function(){
			$(".card .card-body").slideUp()
			$(".card .card-header span").removeClass("fa-minus").addClass("fa-plus");
			$(this).next(".card-body").slideDown()
			$(this).children("span").removeClass("fa-plus").addClass("fa-minus")
		})
	})
</script>
<?php wp_footer(); ?>
</body>
</html>
