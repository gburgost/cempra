	<footer class="Footer">
		<p>Diseñado y desarrollo por @GBurgos</p>
	</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.smoove.js"></script>
	<script>
	$( document ).ready(function() {
		$('.row').smoove({offset:'10%'});
		$('.aparece').smoove({offset:'10%'});
	});
	 $(function() {
		if(window.matchMedia("(max-width:968px)").matches){
	    	var $buttonShowMenu = document.getElementById('showMenu');
			var $buttonHideMenu = document.getElementById('hideMenu');
			var $menu = document.getElementById('menu');

			var showMenu = function(){
				$buttonShowMenu.classList.remove('is-active');
				$buttonHideMenu.classList.add('is-active');
				$menu.classList.add('is-active');
			};

			var hideMenu = function(){
				$buttonHideMenu.classList.remove('is-active');
				$buttonShowMenu.classList.add('is-active');
				$menu.classList.remove('is-active');
			};

			$buttonShowMenu.addEventListener("click", showMenu);
			$buttonHideMenu.addEventListener("click", hideMenu);
	    }
	  });
	</script>
</body>
</html>