
			<div class="clearfix"></div>
		</div> <!-- fin contenedor -->

		<!-- PIE DE PÁGINA -->
		<footer id="pie">
			<p>Desarrollado por Martín Carmona &copy; 2023</p>
		</footer>

		<script>
			const colorSwitch = document.querySelector('#switch input[type="checkbox"]');
            function cambiaTema(ev){
                if(ev.target.checked){
                    document.documentElement.setAttribute('tema', 'light');
                } else {
                    document.documentElement.setAttribute('tema', 'dark');
                }
            }
            colorSwitch.addEventListener('change', cambiaTema);
		</script>
		
	</body>
</html>
