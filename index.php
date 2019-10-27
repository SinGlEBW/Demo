<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Documen</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/media.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<!-- ____BOX TOP STYLE_____ -->
<!--(table>tr>td*3)+div>table>tr>td>((div>a)*3+div>h2)^td^tr>td*2   - с помощью Emmet заменяеться вся конструкция-->


	<header>
		<img src="images/logo2.png" alt="logo">
		<h1>Заголовок сайта</h1>
		<div></div>
	</header>

	<main>	<!--___NAVIGATION_____-->	
		<nav>
			<ul class="navigation">
			
				<li><a href="">Главая</a> </li>
				<li><a href="">Доставка</a> </li>
				<li><a href="">Оплата</a> </li>
				<li><a href="">Акции</a> </li>
				<li><a href="">Статьи</a> </li>
				<li><a href="">Контакты</a> </li>
			</ul>
		</nav>
	
		<div class="conteiner"><!--_SITEBAR & CONTENT____-->
		<div class="wrap">
		
		<input  id="check" type="checkbox"><!--Кнопка на сайтбара на маленьком разрешении -->
		<label for="check" class="l__check"></label>
		
			<section class="sidebar"> 
					<ul class="ul_list">
						<li><a href="">Страница 1</a> </li>
						<li><a href="">Страница 2</a> </li>
						<li><a href="">Страница 3</a> </li>
						<li><a href="">Страница 4</a> </li>
						<li><a href="">Страница 5</a> </li>
						<li><a href="">Страница 6</a> </li>
					</ul>	
                    
					<div class="login_link"><!-- ___BOX OPEN_____ -->
					   <h5> Личный кабинет</h5>
						<form action="form_reg.php" method="post">
				            <input class="login" type="text" name="login" placeholder="Введите логин:">
				            <input class="login" type="password" name="password" placeholder="Введите пароль:">
							<input class="submit_entrance" type = "submit" name = "submit_login" value="Вход">																								
						</form>
						
						<input id="check-2" type="checkbox" ><!--Кнопка для регистрации -->
						<button class="button"><label for="check-2">Регистрация</label></button>
						 
								
								<div class="forma_registration">    
                                   <div class="wrapreg"> 
                                       <label for="check-2"><div class="close"></div></label> 
                                      <h4>Регистрация</h4>
                                        <form action="form_reg.php">
                                          <input class="formreg" class="logreg" type="text" name="logreg" placeholder="Логин:">
                                          <input class="formreg" class="passreg" type="password" name="passreg" placeholder="Пароль:">
                                          <input class="formreg" class="repeat-passreg" type="password" name="repeat-passreg" placeholder="Повторите пароль:">
                                          <input class="formreg" class="emailreg" type="email" name="emailreg" placeholder="Email:">
                                          <input class="formreg" class="check-3" type="submit" name="check-2" value="Зарегистрироваться" >
                                        </form>
                                    </div>
                                </div>		
								
											
					</div>
			</section>
            
         </div> <!-- конец wrap-->
           
            
			<section class="content"><!-- ___BOX CONTENT______ -->
				<h2>Какой то текст</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, velit, voluptatibus, cumque, dignissimos culpa illum incidunt magni pariatur id doloremque earum eligendi exercitationem doloribus commodi deserunt voluptates vero quo placeat ipsum accusamus cum nobis saepe laborum modi perspiciatis ab impedit odit dolore tenetur corporis nam sunt facere quas! Pariatur, earum voluptate voluptates at repellendus consequatur saepe! Voluptatum, enim, quos, et iure quia veritatis consectetur similique rerum beatae tempore veniam quis modi sit autem quibusdam provident cum vitae consequuntur est maiores natus ea minus quisquam error iste ab cumque nobis minima cupiditate perferendis. Sapiente, repellendus quaerat minima. Numquam, nulla mollitia sapiente ad voluptatibus possimus officia. Veritatis, velit, odio, enim veniam vel maxime numquam officia explicabo quia accusantium labore nesciunt eum natus quisquam inventore dolores cum magni eligendi quo maiores. Delectus, dolorum, tempora, itaque accusantium consequatur autem perferendis iste nam inventore doloremque ea ipsa nostrum rem quibusdam qui omnis porro sunt assumenda sapiente voluptatibus fugiat odit accusamus. Sint, commodi, incidunt, qui totam iure distinctio ipsum sed unde quasi repudiandae sit corporis autem consectetur odit omnis magni esse quae facere magnam molestias quo velit quis delectus architecto ipsa. Odio, suscipit, ipsam repellendus ad laboriosam consectetur dolore eius minus odit quidem tempore voluptas nam ullam. Quibusdam, reprehenderit earum similique obcaecati. Error, non, ex voluptatum laudantium ipsa impedit reiciendis expedita odio quae pariatur vero vel nisi numquam! Culpa, distinctio, magni, eaque voluptatem non dolorum consectetur quasi cupiditate hic nulla error quas unde mollitia consequatur dolore odio eius amet. Iure, quo, optio eos suscipit cum culpa quia sapiente natus laboriosam earum ullam nisi! Possimus, delectus, ex nam eum laboriosam minus sequi aperiam repudiandae iusto saepe. Eveniet, obcaecati eos repellat quaerat quod magni esse cupiditate doloremque corporis quisquam delectus alias quos consequuntur et perferendis in eum odio eius laboriosam aspernatur facilis sed doloribus quis. Illo, dolores totam amet vitae tenetur sequi ratione! Magnam, sit, maiores praesentium ex natus quod iure molestias itaque ab consectetur vel beatae quasi dolor explicabo fuga nobis fugit deleniti aut autem non aliquid recusandae rerum! Repudiandae, autem, reiciendis, fuga inventore totam qui quasi repellat numquam nulla deserunt saepe ipsum. Rerum, ducimus, provident, repellat, architecto maiores error obcaecati vero libero tenetur blanditiis facilis cumque modi atque eaque nostrum. Repellendus, sunt, adipisci velit deleniti ex qui facere magni aliquid earum quibusdam possimus expedita repellat praesentium. Earum, quisquam, provident, harum, ipsam magni cumque minima delectus eaque illum veniam nesciunt dolorem suscipit tenetur assumenda numquam quis a accusamus alias ullam voluptatem id temporibus consectetur laboriosam aliquam aut magnam error odio veritatis repellat quas. Expedita, consectetur, voluptatum animi enim minus quos nisi dolore dolor qui pariatur est rerum delectus sint officiis ab deleniti labore nesciunt unde quas eum amet molestias nemo tempora rem aperiam nostrum eius consequuntur itaque repellendus possimus assumenda perferendis porro quisquam ullam eligendi debitis quidem eveniet id voluptatibus recusandae! Eligendi, quaerat, placeat veritatis molestias hic reiciendis eum aliquam beatae autem incidunt! Adipisci, excepturi, aliquam at non reiciendis aut cum consequuntur rem ratione quod tempore explicabo inventore quibusdam. Aliquid beatae ex hic? Necessitatibus, illum, magnam, sunt, nulla quos delectus consequuntur alias porro deleniti facilis sapiente atque laborum nesciunt voluptate vel iste voluptatibus exercitationem molestiae autem ut. Eius, qui, aut, nulla maxime veritatis cupiditate quia praesentium vel fugit mollitia eveniet unde voluptas quaerat itaque repellat blanditiis exercitationem laborum repellendus voluptates ratione alias doloremque quae consectetur quis accusantium odio deserunt possimus dolor perspiciatis fuga ea corporis odit perferendis. Amet reprehenderit commodi cumque repudiandae blanditiis? Possimus, ut, eum, quisquam, nobis voluptas veniam illum eaque autem quas quod optio id incidunt laborum atque ad ipsum iure ea ab laudantium tempore nostrum rerum sint numquam. Ex, fuga, minus, a dolore voluptas obcaecati cupiditate ipsa nisi rerum officiis in laborum reiciendis rem magni sit assumenda quaerat eius et recusandae sequi totam neque eaque tempora omnis quis culpa numquam consequatur! Velit, necessitatibus tenetur perspiciatis excepturi itaque officia recusandae optio quam corrupti ea culpa expedita nam ut error minima adipisci repudiandae temporibus fugit in cum aut eos accusantium animi voluptatibus repellendus odit voluptates at libero aliquam quod. Dignissimos, sint, repellat quos atque recusandae cumque molestiae illum nostrum consequatur amet consectetur incidunt beatae accusamus impedit similique qui fugit minus quae error blanditiis! Reprehenderit, incidunt, velit, nesciunt asperiores nobis dolorem modi sed vel rem illo id est unde laboriosam harum sit error hic provident in nihil quis. Nulla, velit, quisquam magnam minus culpa eligendi placeat maiores illo cum tenetur iure accusamus laborum libero veniam maxime veritatis assumenda quas officiis quidem numquam porro saepe commodi autem enim dolores mollitia cupiditate quasi nostrum reiciendis dolorum. Ea, repellat, perspiciatis, illo non maxime possimus culpa commodi blanditiis quasi expedita cupiditate dicta aspernatur pariatur deleniti architecto accusantium distinctio alias odit dolor velit rerum nisi tempore ut dignissimos enim. Harum, eum libero sit quis itaque iusto vero quia odit ipsam minus fugit temporibus omnis dolorem voluptatibus dolor asperiores veritatis a cumque dolores nesciunt saepe culpa dolore laborum et assumenda error incidunt ad aliquid quo. Magnam, aut, reiciendis modi voluptatem omnis suscipit. Ullam dignissimos ratione totam commodi maxime dolorum. Fuga, officia, itaque at aut molestias rerum quibusdam perspiciatis nam eos minus possimus nostrum perferendis commodi rem odio accusantium ullam suscipit voluptas iste voluptatem tempora atque temporibus voluptates quod quisquam consequuntur quia impedit voluptatum similique asperiores nesciunt soluta cum architecto. Doloribus, consequuntur amet dignissimos hic ab numquam ratione velit ducimus vero alias quidem sint magnam voluptatem voluptatibus culpa odio doloremque impedit debitis assumenda mollitia enim iure possimus laudantium nesciunt reiciendis non cum repellat esse asperiores quod. Doloribus, deserunt, iure, suscipit enim perspiciatis mollitia quisquam ex quaerat fuga animi aliquam amet officiis impedit magni velit sunt at assumenda quae in eligendi earum a iusto accusantium repellendus pariatur incidunt nam rerum totam nisi tenetur sit fugiat odit repellat. Quo, hic, nisi, suscipit, alias molestiae laboriosam quisquam officia delectus aliquam voluptates quos deleniti optio quis pariatur molestias deserunt iure accusamus ut nesciunt aperiam ipsa numquam nemo illum minus porro voluptas eaque ducimus. Quisquam doloremque perferendis nostrum a minima dolorem. Temporibus, id, porro, harum minima animi nisi delectus pariatur laudantium suscipit officiis dolores eos alias molestias natus odit?
				</p> 
			</section>
		</div>
	</main>

	<footer class="footer">
	    <a class="footer__icon" href="#" ><img src="images/vk.png" alt="VK"></a>
	    <a class="footer__icon" href="#" ><img src="images/youtube.png" alt="You Tube"></a>
	</footer>
</body>
</html>