<?php
	$titulo = 'Página inicial';
	$cssExtra = '<link rel="stylesheet"  href="-css/cadrasto_cliente.css">';
	include 'cabecalho.php';
?>
	
	 <div class="container-fluid">
	 	<div class="row">
	 		<div class="col-lg-3 col-sm-12 ">
	 		
	 		</div>
	 		<div class="col-lg-6 col-sm-12  mt-4">
	 		<h1 class="loginh1">faça seu login ou crie uma conta gratuita </h1>
	 		<p class="loginp">Veja todos os seus anúncios em um só lugar. alugue seus<br> imóves forma rápida e fácil, altere seu perfil com segurança</p>
	 		</div>
	 		<div class="col-lg-3 col-sm-12 ">
	 		
	 		</div>
	 	</div>

	 	<article class="row">
	 		<div class="col-lg-1 col-sm-12     ">
	 		</div>
	 		<div class="col-lg-4 col-sm-12   mt-4  cg" style="height: 320px;">
	 			<div class="row">
              <div class="col-lg-12 col-sm-12  idcss " >
                  
            <h3  class="textocadrasto"> <img src="ionicons/src/ios-person.svg" alt="icon chave" class="iconi3"> login Anunciante  </h3>
       

        </div>
        </div>

        <div class="col-sm-12">
            <label>Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email">
        </div>
        <div class="col-sm-12">

           
            <label>Senha</label>
            <input type="" class="form-control" id="user_name" name="user_name">
            <p><a href="#">Esqueci minha senha </a></p> 
        </div>
        <div class="form-group adicionar">
                <a href="#" class="btn btn-lg">Entrar</a>
            </div>
	 		</div>
	 		
	 		<div class="col-lg-6 col-sm-12  mt-4  ml-2 cg">

           <div class="row">
              <div class="col-lg-12 col-sm-12  idcss " >
            <h3  class="textocadrasto">  <img src="ionicons/src/ios-home.svg" alt="icon chave" class="iconi3">Ainda não tenho uma conta </h3>
        </div>
        </div>
         <div class="col-sm-12">

           
            <label>Nome completo</label>
            <input type="" class="form-control" id="user_name" name="user_name">
        </div>
        <div class="col-sm-12">
            <label>Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email">
        </div>
        <div class="col-sm-12">
            <label>Senha</label>
           <input type="" class="form-control" id="user_phone" name="user_phone" >
           <p>Minimo 5 caracteres </p>
        </div>
        <div class="col-sm-12">
            <label>Repetir senha</label>
            <input type="" class="form-control" id="user_phone" name="user_phone" >
        </div>
        

       <div class="form-group adicionar mt-4">
                <a href="#" class="btn btn-lg">Criar conta </a>
            </div> 
    </div>
   
	 		
	 	</article>
	 </div>
	<div class="foter">
		
		
		<div class=" footer1  " style="flex: 1 6 10%">
			

			
		</div>
		<div class=" footer1 " style="flex: 1 6 30%">
			<h2>Mais imóveis</h2>
			<ul class="rodape">
				
				<a href="">	<li>Residencia</li></a>
				<a href=""><li>Apartamentos</li></a>
				<a href=""><li>Casas</li></a>
				<a href=""><li>Condominios</li></a>
			</ul>
		</div>
		<div  class=" footer1 " style="flex: 1 6 30%">
			<h2>Informações </h2>

			<ul class="rodape">

				<a href="">	<li>Quem somos</li></a>
				<a href=""><li>Contato</li></a>
				<a href=""><li>Alugue seu imóvel</li></a>
				
			</ul>
		</div>

		<div class=" footer1 " style="flex: 1 6 24%">
			<h1>Entre em contato</h1>
			<ol class="rodape_contatos">

					<li>(96)991082902</li>
				<li>mateusbahia375@gmail.com</li>
				

				
			</ol>
			
			<a class="btn btn-social-icon btn-facebook" style="background:  #3B5998">
				<span class="fa fa-facebook"></span> 
			</a>

        <a class="btn btn-social-icon btn-twitter" style="background:   #55ACEE">
				<span class="fa fa-twitter"></span> 
			</a>
			<a class="btn btn-social-icon btn-instagram" style="background:   #3F729B">
				<span class="fa fa-instagram"></span> 
			</a>
			
		</div>
		
		
	</div>	
	<footer class="forterrodape">
		<div class="footer2 ">
			<div  style="text-align: center;" >
				<b style=" color: #fff;">Imobiliária casa facil© 2018 </b> &nbsp;&nbsp;- Todos os direitos reservados.
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <div></div> -->
	
</body>
</html>