<?php

class View {
    public array $js;
    private string $folder;
    public array $data;
    function __construct($folder) {
        $this->folder = $folder;
        $this->js = [];
    }
    public function pushJs($js){
        $this->js[] = $this->folder.'/'.$js;
    }

    public function render($path_view, $noInclude = false)
    {
    if ($noInclude == true) 
    {
        require PATH.'views/' . $this->folder.'/'.$path_view. '.php'; 

    }else {
        require  PATH.'views/header.php';
        require  PATH.'views/' . $this->folder.'/'.$path_view. '.php';
        require  PATH.'views/footer.php'; 
    }
    }

}