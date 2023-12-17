<?php
include './views/blocks/doctype_start.php';
?>
<title>404</title>
<?php 
$cssBlocks=Blocks_control::adding_css(Router::uriNow());
for($i=0;$i<count($cssBlocks);$i++){ ?>
    <link rel="stylesheet" href="<?= $cssBlocks[$i];?>">
<?php }?>
</head>
<body>
    <h1>404 page not found</h1>
<?php 
$blocks=Blocks_control::render_blocks(Router::uriNow());
for($i=0;$i<count($blocks);$i++){ 
    include $blocks[$i];
}?>