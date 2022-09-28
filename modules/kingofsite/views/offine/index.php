<?php
/**
 * @package Helix3 Framework
 * Template Name - Shaper Helix - iii
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees



?>


	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="offline-inner">

					<div id="frame" class="outline">
						
						<h1>
							<?php echo htmlspecialchars($app->get('sitename')); ?>
						</h1>
						<?php if ($app->get('display_offline_message', 1) == 1 && str_replace(' ', '', $app->get('offline_message')) != '') : ?>
							<p>
								<?php echo $app->get('offline_message'); ?>
							</p>
						<?php elseif ($app->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
							<p>
								<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
							</p>
						<?php endif; ?>
						<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login">
							<div class="form-group" id="form-login-username">
								<input name="username" id="username" type="text" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" size="18" />
							</div>
							
							<div class="form-group" id="form-login-password">
								<input type="password" name="password" class="form-control" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" id="passwd" />
							</div>
							<?php if (count($twofactormethods) > 1) : ?>
							<div class="form-group" id="form-login-secretkey">
								<input type="text" name="secretkey" class="form-control" size="18" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" id="secretkey" />
							</div>
							<?php endif; ?>
							<div class="form-group" id="submit-buton">
								<input type="submit" name="Submit" class="btn btn-success login" value="<?php echo JText::_('JLOGIN'); ?>" />
							</div>

							<input type="hidden" name="option" value="com_users" />
							<input type="hidden" name="task" value="user.login" />
							<input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" />
							<?php echo JHtml::_('form.token'); ?>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
