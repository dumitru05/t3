<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php
	if (!$this->getParam('addon_offcanvas_enable')) return ;
?>
<button class="btn btn-default off-canvas-toggle" type="button" data-nav="#off-canvas" data-effect="<?php echo $this->getParam('addon_offcanvas_effect', 'off-canvas-effect-4') ?>">
	<i class="fa fa-bars"></i>
</button>

<!-- OFF-CANVAS SIDEBAR -->
<div id="off-canvas" class="off-canvas">
	<jdoc:include type="modules" name="<?php $this->_p('off-canvas') ?>" style="raw" />
</div>
<!-- //OFF-CANVAS SIDEBAR -->
