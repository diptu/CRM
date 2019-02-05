<?php


class Template
{
    //Path to template
    protected $template;
    protected $vars = array();
    public function __construct($template)
    {
        $this->template = $template;
    }
    public function __get($key){
        return $this->vars =$key;
    }
    public function __set($key,$value){
        return $this->vars[$key] = $value;
    }

    public function __toString(){
        try{
            extract($this->vars);
            chdir(dirname($this->template));
            ob_start();

            include basename($this->template);
        }catch(Exception $e){

        }

        return ob_get_clean();
    }
}



?>
