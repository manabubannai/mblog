<?php
// デフォルト値を設定
$page_title = isset($page_title) ? $page_title : 'Manabu Bannai';
$page_description = isset($page_description) ? $page_description : 'Manabu Bannai\'s Blog';
$css_path = isset($css_path) ? $css_path : 'style.css';
$favicon_path = isset($favicon_path) ? $favicon_path : 'images/favicon.png';
?>
<meta charset="UTF-8">
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="author" content="Manabu Bannai">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo htmlspecialchars($css_path); ?>">
<link rel="shortcut icon" href="<?php echo htmlspecialchars($favicon_path); ?>">
<title><?php echo htmlspecialchars($page_title); ?></title> 