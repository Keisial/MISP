<div class="popover_choice">
	<legend><?php echo __('Choose the format that you wish to export the event in'); ?></legend>
	<div class="popover_choice_main" id ="popover_choice_main">
		<table style="width:100%;">
		<?php foreach ($exports as $k => $export): ?>
			<tr style="border-bottom:1px solid black;" class="templateChoiceButton">
				<td role="button" tabindex="0" aria-label="Export as <?php echo h($export['text']); ?>" title="Export as <?php echo h($export['text']); ?>" style="padding-left:10px; text-align:left;width:50%;" onClick="exportChoiceSelect('<?php echo h($export['url']); ?>', '<?php echo h($k); ?>', '<?php echo h($export['checkbox']); ?>')"><?php echo h($export['text']); ?></td>
				<td style="padding-right:10px; width:50%;text-align:right;">
					<?php if ($export['checkbox']):
						echo h($export['checkbox_text']);
					?>
						<input title="<?php h($export['checkbox_text']); ?>" id = "<?php echo h($k) . '_toggle';?>" type="checkbox" style="align;vertical-align:top;margin-top:8px;" <?php if (isset($export['checkbox_default'])) echo 'checked';?>>
						<span id ="<?php echo h($k);?>_set" style="display:none;"><?php if (isset($export['checkbox_set'])) echo h($export['checkbox_set']); ?></span>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<div role="button" tabindex="0" aria-label="Cancel" title="Cancel" class="templateChoiceButton templateChoiceButtonLast" onClick="cancelPopoverForm();">Cancel</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		resizePopoverBody();
	});

	$(window).resize(function() {
		resizePopoverBody();
	});
</script>
