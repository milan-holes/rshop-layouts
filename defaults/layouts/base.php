<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RSHOP layouts</title>
        <link rel="stylesheet" href="/rshop/frontend/css/default.css?<?= date('YmdHis') ?>">
    </head>
<body>

<?php
echo $this->fetch('layout');
?>
<script src="/js/default.js?<?= date('YmdHis') ?>"></script>
<script src="/js/scripts.js?<?= date('YmdHis') ?>"></script>
<?php
echo $this->fetch('scripts');
?>

</body>
</html>