<?php

global $wp_version;

?>
<script type="text/javascript">
//<![CDATA[
window.ZemantaGetAPIKey = function () {
	return '<?php echo $api_key; ?>';
};

window.ZemantaPluginVersion = function () {
	return '<?php echo $version; ?>';
};

window.ZemantaPluginType = function () {
	return 'gp';
};

window.ZemantaPluginFeatures = {
<?php
for($i = 0, $keys = array_keys($features), $len = sizeof($keys); $i < $len; $i++) :
	echo "\t'" . $keys[$i] . "': " . json_encode($features[$keys[$i]]) . ($i < $len-1 ? ',' : '') . "\n";
endfor;
?>
};
//]]>
</script>

<script type="text/javascript" id="zemanta-loader" src="http://fstatic.zemanta.com/plugins/wordpress-gp/loader.js<?php if ($is_old) {echo "?v1=";} else {echo "";} ?>"></script>
