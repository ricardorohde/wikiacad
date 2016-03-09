	<?php if(Auth::instance()->logged_in() && Auth::instance()->get_user()->has('roles', 2) ): ?>
				</div>
			</div>
		</section>
	</div>
	<footer class="main-footer">
		<!-- To the right -->
		<div class="pull-right hidden-xs">
			Painel de controle
		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2015 <a href="#">SB Racks</a>.</strong> All rights reserved.
	</footer>
	<?php endif; ?>
</div>