<?php
namespace Modules\JUpload\Controllers;
use Resources;

class Basic extends Resources\Controller
{
    public function index()
    {
        $this->output('basic');
    }
}
