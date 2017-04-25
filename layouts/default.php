<div class="wrapper">
    <?php
    echo $this->element('header');
    echo $this->fetch('content');
    echo $this->element('footer');
    ?>
    <div class="overlay overlay--white"></div>
</div>

<div class="overlay overlay--black"></div>
<div class='notifications top-right'></div>
<div class="var">
    <div class="var--cxs visible-cxs"></div>
    <div class="var--xs visible-xs"></div>
    <div class="var--sm visible-sm"></div>
    <div class="var--md visible-md"></div>
    <div class="var--lg visible-lg"></div>
</div>

<?php
echo $this->element('mobile_menu');
