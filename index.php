<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<!---aplicar depois as metas tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1,0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<link href="styles/style.css" type="text/css" rel="stylesheet" /> 
	<meta charset="utf-8"/>
</head>

<body>

<header>
	<div class="center">
		<div class="logo">
			<h2>Facebook</h2>
		</div><!--logo-->

		<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="email">
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password">
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar"/>
				</div><!--form-element-->
				</form><!--form-login-->
				<div class="clear"></div>
	</div><!--center-->
</header>
<section class="main">
	<div class="center">
		<div class="img-pessoas">
			<img src="assets/background.png"/>

		</div><!--img-pessoas-->
			

		<div class="abrir-conta">
			<h2>Abra sua conta </h2>
			<h3> É gratuito e sempre será!</h3>

			<form class="criar-conta">
				<div class="w50">
					<input placeholder="Nome" type="text">
				</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!--w50-->

						<div class="w100">
							<input placeholder="E-mail" type="email">
						</div><!--w100-->

							<div class="w100">
								<input placeholder="Senha" type="password">
							</div><!--w100-->

							<div class="w100">
								<h2>Data de Nascimento:</h2>
								<select name="nascimento-dia" class="nascimento">
									<?php
									for($i =1; $i <= 31; $i++){
									?>
									<option value="<?php echo $i ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>

								<select name="nascimento-mes" class="nascimento">

								<!--aplicar depois o php-->
									<option value="0">Junho</option>
								</select>
								<select class="nascimento-ano">
									<?php
									for($i =1960; $i <= 2020; $i++){
									?>
									<option value="<?php echo $i ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
								<div class="clear"></div>
							</div><!--w100-->
							
							<div class="w100">
								<div class="input-radio">
								<input type="radio" name="sexo" value="masculino">
								<h2>Masculino</h2>
 								</div><!--input-radio-->
								<div class="input-radio">
								<input type="radio" name="sexo" value="feminino">
								<h2>Feminino</h2>
								 </div><!--input-radio-->
								 <div class="clear"></div>
							</div>



							<div class="w100">
								<input type="submit" name="acao" value="Cadastrar!">
							</div><!--w100-->
		
						<div class="clear"></div>
				</form><!--criar-conta-->

		</div><!---abrir-conta-->

		<div class="clear"></div>
	</div><!--center-->
</section><!---main-->

<section class="linguas">
   <div class="center">
	   <a class="selected-lingua" href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
   </div><!--center-->

   		<div style="border:0;padding-top: 10px;" class="center">
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   <a href="#">Português (BR)</a>
	   
   </div><!--center-->
</section><!--linguas-->
</section><!--linguas-->

</body>
</html>