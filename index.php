<?php 
require_once 'models/enlaces.php';
require_once 'models/gestorCategoria.php';
require_once 'models/gestorProyectos.php';
require_once 'models/gestorSlide.php';

require_once 'controllers/template.php';
require_once 'controllers/enlaces.php';
require_once 'controllers/gestorCategoria.php';
require_once 'controllers/gestorProyectos.php';
require_once 'controllers/gestorSlide.php';

$template = new TemplateController();
$template->template();