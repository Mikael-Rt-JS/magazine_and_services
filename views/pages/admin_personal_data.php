<?php
include './views/blocks/doctype_start.php';vv
?>
<title>Categories page</title>
<?php 
$cssBlocks=Blocks_control::adding_css(Router::uriNow());
for($i=0;$i<count($cssBlocks);$i++){ ?>
    <link rel="stylesheet" href="<?= $cssBlocks[$i];?>">
<?php }?>
</head>
<body>
    <h1>Categories</h1>
<?php 
$blocks=Blocks_control::render_blocks(Router::uriNow());
for($i=0;$i<count($blocks);$i++){ 
    include $blocks[$i];
}?>