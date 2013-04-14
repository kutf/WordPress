/* compressions for WordPress */
if(extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler"))
   add_action('wp', create_function('', '@ob_end_clean();
   @ini_set("zlib.output_compression", 1);'));
// this is not compatible with wp-super cache by the way   
