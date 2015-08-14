<?php
/**
 * The template for displaying the footer.
 */
?>
</main>

<footer class="footer" role="footer">
	<div class="wrapper">
		<div class="bloque">
			<p>OFICINAS</p>
			<div class="pais">
				<h3>MÉXICO</h3>
				<p><i class="fa fa-phone"></i><?php print_ot('telefono_mex',''); ?></p>
				<p><i class="fa fa-envelope"></i><?php print_ot('correo_mex',''); ?></p>
				<?php $oficina_icon = get_ot('oficinas_mex', array()); ?>
				<p><i class="fa fa-briefcase"></i>
				<?php foreach ($oficina_icon as $oficina) { ?>
					<?php $ciudad = $oficina['ciudad']; ?>
					<?php $parte = substr($ciudad, 0, 3); ?>
					<span>
						<?php echo $parte; ?>
					</span>
				<?php } ?>
				</p>
			</div>

			<div class="pais">
				<h3>USA</h3>
				<p><i class="fa fa-phone"></i><?php print_ot('telefono_eu',''); ?></p>
				<p><i class="fa fa-envelope"></i><?php print_ot('correo_eu',''); ?></p>
				<?php $oficina_icon2 = get_ot('oficinas_eu', array()); ?>
				<p><i class="fa fa-briefcase"></i>
				<?php foreach ($oficina_icon2 as $oficina2) { ?>
					<?php $ciudad2 = $oficina2['ciudad']; ?>
					<?php $parte2 = substr($ciudad2, 0, 3); ?>
					<span>
						<?php echo $parte2; ?>
					</span>
				<?php } ?>
				</p>
			</div>
		</div>

		<div class="bloque">
			<p>CONOCE MÁS</p>
			<a class="boton" href="">POLÍTICA DE CALIDAD</a>
			<a class="boton" href="">AVISO DE PRIVACIDAD</a>
			<a class="boton" href="">RESPONSABILIDAD SOCIAL</a>
		</div>

		<div class="bloque">
			<p>SÍGUENOS</p>
			<!-- Facebook -->
			<?php if (get_ot('fb_url') != '') { ?>
			    <a class="icon" href="<?php print_ot('fb_url', ''); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
			<?php }  ?>
			<!-- Twitter -->
			<?php if (get_ot('tw_url') != '') { ?>
			    <a class="icon" href="<?php print_ot('tw_url', ''); ?>"title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
			<?php }  ?>
			<!-- Youtube -->
			<?php if (get_ot('lin_url') != '') { ?>
			    <a class="icon" href="<?php print_ot('lin_url', ''); ?>" title="Youtube" target="_blank"><i class="fa fa-linkedin"></i></a>
			<?php }  ?>
			<!-- Google Plus -->
			<?php if (get_ot('gp_url') != '') { ?>
			    <a class="icon" href="<?php print_ot('gp_url', ''); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php }  ?>      
		</div>
	</div>

         
<!--     <div class="creditos" class="group">
		<a class="firma-sh" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
	</div> --><!-- #creditos -->  

</footer>

<!-- JS personalizados del tema -->
<?php waypoints(); ?>
<?php themejs(); ?>
<?php bootstrap(); ?>
<?php wp_footer(); ?>

</body>
</html>