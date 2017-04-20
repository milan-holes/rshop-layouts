<?php
require_once 'Configure.php';
require_once 'Url.php';

class Layout {
    public $Configure;
    public $Url;

    protected $_blocks = [];
    protected $_layout;
    protected $_template;

    public function __construct()
    {
        $this->Configure = new Configure();
        $this->Url = new Url();
    }

    public function setLayout($layout)
    {
        $this->_layout = $layout;
    }

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

    public function element($template, array $params = [])
    {
        return $this->output('elements/' . $template . '.php');
    }

    public function cell($template, array $config = [])
    {

    }

    public function assign($key, $value)
    {
        $this->_blocks[$key] = $value;
    }

    public function fetch($key)
    {
        $content = isset($this->_blocks[$key]) ? $this->_blocks[$key] : '';
        unset($this->_blocks[$key]);

        return $content;
    }

    private function output($file)
    {
        ob_start();
        include file_exists($file) ? $file : 'defaults/' . $file;
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }

    public function __toString()
    {
        $this->_blocks['content'] = $this->output('templates/' . $this->_template . '.php');
        $this->_blocks['layout'] = $this->output('layouts/' . $this->_layout . '.php');

        return $this->output('layouts/base.php');
    }
}