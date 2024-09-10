<?php 
    // require_once(realpath(dirname(__FILE__) .'./content_footer.php'));
    include_once('./master_layout/content_footer.php');
?>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-content/plugins/contact-form-7/includes/swv/js/index.js' id='swv-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
      /* 
						<![CDATA[ */
      var wpcf7 = {
        "api": {
          "root": "https:\/\/demo.tamnguyen.vn\/xkld2\/wp-json\/",
          "namespace": "contact-form-7\/v1"
        }
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-content/plugins/contact-form-7/includes/js/index.js' id='contact-form-7-js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-includes/js/hoverIntent.min.js' id='hoverIntent-js'></script>
    <script type='text/javascript' id='flatsome-js-js-extra'>
      /* 
						<![CDATA[ */
      var flatsomeVars = {
        "ajaxurl": "https:\/\/demo.tamnguyen.vn\/xkld2\/wp-admin\/admin-ajax.php",
        "rtl": "",
        "sticky_height": "70",
        "user": {
          "can_edit_pages": false
        }
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-content/themes/flatsome/assets/js/flatsome.js' id='flatsome-js-js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-content/themes/flatsome/inc/extensions/flatsome-lazy-load/flatsome-lazy-load.js' id='flatsome-lazy-js'></script>
  </body>
</html>