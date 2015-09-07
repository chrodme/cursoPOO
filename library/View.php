<?php


class View extends Response {

    protected $template;
    protected $vars = array();
    protected $templateFileName;
    protected $templateFileNameLayout = "views/layout.tpl.php";

    function __construct($template, $vars = array())
    {
        $this->template = $template;
        $this->vars = $vars;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function getVars()
    {
        return $this->vars;
    }
    public function getTemplateFileName()
    {
        return "views/".$this->template.".tpl.php";
    }
    public function getTemplateFileNameLayout()
    {
        return $this->templateFileNameLayout;
    }

    public function execute()
    {
        $template = $this->getTemplate();
        $templateFileName = $this->getTemplateFileName();
        $templateFileNameLayout = $this->getTemplateFileNameLayout();
        $vars = $this->getVars();

        call_user_func(
            function () use ($template,$vars,$templateFileName,$templateFileNameLayout)
            {
                extract($vars);
                ob_start();
                require $templateFileName;
                $tpl_content = ob_get_clean();
                require $templateFileNameLayout;
            }
        );
    }
}