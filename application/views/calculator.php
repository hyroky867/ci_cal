<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>電卓</title>
</head>
<body>
<form method="post" action="<?php echo base_url(''); ?>">
	<input type="text" name="value1" value="<?php echo html_escape($input->getValue1()); ?>">
	<select name="operator">
		<?php foreach ($input->getSelectOperator() as $operator): ?>
			<option value="<?php echo html_escape($operator); ?>"<?php echo html_escape($input->checkSelect($operator)); ?>><?php echo html_escape($operator); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="text" name="value2" value="<?php echo html_escape($input->getValue2()); ?>">
	<input type="submit" value="=">
	<?php echo html_escape($calculator->getResult($input)); ?>
</form>
</body>
</html>
