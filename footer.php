		<footer class="container-fluid">
			<section class="row">
				<!-- <article class="col-12 col-md-3">
					<h3>Cenário</h3>
					<ul>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
					</ul>
				</article>
				<article class="col-12 col-md-3">
					<h3>Figurino</h3>
					<ul>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
						<li><a href="" title="" rel="next"></a></li>
					</ul>
				</article> -->
				<article class="col-12" id="contato-footer">
					<h3 class="col-12 offset-md-4 col-md-4">Entre em Contato</h3>
					<form class="col12 offset-md-4 col-md-4" action="https://costureira-de-cenografia.com.br/obrigada.php" name="cotacao" id="cotacao" method="POST">
						<label for="nome" class="col-12">Nome*<br/><input type="text" name="nome" id="nome" placeholder=" nome" required></label>
						<br/>
						<label for="email" class="col-12">email*<br/><input type="email" name="email" id="email" placeholder=" email" required></label>
						<br/>
						<label for="tel" class="col-12">telefone<br/><input type="number" name="tel" id="tel" placeholder=" telefone (com DDD)"></label>
						<br/>
						<label for="tipo-de-projeto" class="col-12">
							Tipo de projeto desejado<br/>
							<input type="checkbox" name="cenario" id="cenario" value="cenario"> Cenário<br/>
							<input type="checkbox" name="figurino" id="figurino" value="figurino"> Figurino<br/>
							<input type="checkbox" name="outro" id="outro" value="outro"> Outro<br/>
						</label>
						<br/>
						<label for="mensagem" class="col-12">Mensagem<br/><textarea name="mensagem" id="mensagem" rows="6"></textarea></label>
						<br/>
						<input type="submit" class="solicitarOrcamento" value="Enviar">
  						<input type="reset" class="verMais" value="Limpar">
					</form>
				</article>
			</section>
		</footer>
		<!-- JS -->
		<script async defer="defer" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script async defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script async defer="defer" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script async defer="defer" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		<script>
			const menu = document.querySelector('nav');
			window.onscroll = function() {menuRolagem()};

			function menuRolagem() {
			    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			        menu.style = 'background-color: rgba(0,0,0,0.75) !important; height: 60px;';
			    } else {
			        menu.style = 'background-color: rgba(0,0,0,0.0) !important; height: 71px;';
			    }
			}

			const filtroCenarios = document.querySelector('#filtroCenarios');
			const cenarios = document.querySelectorAll('.cardCenario');

			const filtroFigurinos = document.querySelector('#filtroFigurinos');
			const figurinos = document.querySelectorAll('.cardFigurino');

			function apenasCenarios(){
				for (i = 0; i < figurinos.length &&  i < cenarios.length; i++){
					figurinos[i].style = 'display:none;'
					cenarios[i].style = 'display:block;'
				}
			}

			function apenasFigurinos(){
				for (i = 0; i < cenarios.length && i < figurinos.length; i++){
					cenarios[i].style = 'display:none;'
					figurinos[i].style = 'display:block;'
				}
			}

			function todosCases(){
				for (i = 0; i < figurinos.length; i++){
					figurinos[i].style = 'display:block;'
				};
				for (i = 0; i < cenarios.length; i++){
					cenarios[i].style = 'display:block;'
				};
			}	

		</script>
	</body>
</html>