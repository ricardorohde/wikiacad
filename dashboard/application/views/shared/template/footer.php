	<?php if(Auth::instance()->logged_in() && Auth::instance()->get_user()->has('roles', 3) ): ?>
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
		<strong>&copy; 2015 <a href="#">Wiki ACAD</a>.</strong>
	</footer>
	<?php endif; ?>
</div>