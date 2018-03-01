<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>文件列表</title>
</head>

<body>
	<div id="contentlist">
		<?php
		$contents = $_POST[ 'filecategory' ];
		echo '<table><thead><tr><th>类型</th><th>名称</th><th>操作</th></tr></thead><tbody id="contentarea">';
		//ces
		echo '</tbody><tfoot><tr><td colspan="2"></td><td>100.00</td></tr></tfoot></table>';
		echo $contents;
		?>
	</div>
</body>

</html>