<?php if($regacy_IE): ?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo HTTP; ?>/assets/javascripts/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo HTTP; ?>/assets/javascripts/vendor/selectivizr-min.js"></script><![endif]-->
<?php else: ?>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo HTTP; ?>/assets/javascripts/vendor/jquery-2.1.1.min.js"><\/script>')</script>
<?php endif; ?>
<script src="<?php echo HTTP; ?>/assets/javascripts/vendor/css_browser_selector.min.js"></script>
<script src="<?php echo HTTP; ?>/assets/javascripts/vendor/nivo-lightbox.min.js"></script>
<script src="<?php echo HTTP; ?>/assets/javascripts/application.min.js"></script>
