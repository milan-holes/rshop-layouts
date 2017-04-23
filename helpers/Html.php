<?php
class Html {
    protected $_layout;

    public function __construct($layout)
    {
        $this->_layout = $layout;
    }

    public function scriptBlock($script)
    {
        $this->_layout->append('scripts', $script);
    }
}