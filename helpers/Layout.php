<?php
require_once 'Configure.php';
require_once 'Url.php';

class Layout {
    public $Configure;
    public $Url;

    protected $_blocks = [];
    protected $_layout;
    protected $_template;
    protected $_data = [];

    public function __construct()
    {
        $this->Configure = new Configure();
        $this->Url = new Url();
        foreach (glob("data/*.php") as $filename) {
            $item = str_replace(['data/', '.php'], '', $filename);
            $this->_data[$item] = include $filename;
        }
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

    public function cell($cell, $template)
    {
        return $this->output('cells/' . $cell . '/' . $template . '.php');
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
        foreach ($this->_data as $key => $value) {
            $$key = $value;
            if (is_array($value) && $value) {
                $name = $key;
                if ($key == 'categories') {
                    $name = 'category';
                } else {
                    $name = substr($key, 0, -1);
                }
                $$name = reset($value);
            }
        }

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