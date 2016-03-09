<ul class="pagination">
	<?php if ($first_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first"><?php echo __('Primeiro') ?></a></li>
	<?php else: ?>
		<li><a href="javascript:void(0)"><?php echo __('Primeiro') ?></a></li>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev"><?php echo __('Anterior') ?></a></li>
	<?php else: ?>
		<li><a href="javascript:void(0)"><?php echo __('Anterior') ?></a></li>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<li class="active"><a href="javascript:void(0)"><?php echo $i ?></a></li>
		<?php else: ?>
			<li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next"><?php echo __('Próximo') ?></a></li>
	<?php else: ?>
		<li><a href="javascript:void(0)"><?php echo __('Próximo') ?></a></li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last"><?php echo __('Último') ?></a></li>
	<?php else: ?>
		<li><a href="javascript:void(0)"><?php echo __('Último') ?></a></li>
	<?php endif ?>

</ul>