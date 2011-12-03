<?php if (!defined('APPLICATION')) exit();

class VanillaCMSController extends Gdn_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function Initialize() {
		$this->Head = new HeadModule($this);		
		$this->AddJsFile('jquery.js');
	   $this->AddJsFile('jquery.livequery.js');
	   
	   //These are needed for popup ajax, do not remove
	   $this->AddJsFile('jquery.form.js');
	   $this->AddJsFile('jquery.gardenhandleajaxform.js');
	   $this->AddJsFile('jquery.popup.js');
	   
	   //$this->AddJsFile('global.js', 'vanillacms'); //For menu
	   //$this->AddCssFile('global.css'); //For menu
	   
		$this->AddCssFile('style.css');
		
		parent::Initialize();
	}
	
	/*
	public function ParseArgs($Args = array(), $DefaultArgs = array() ) {

	       $Result = array_merge( $DefaultArgs, $Args );

	       return $Result;
	   }*/
	
   
   function ParseArgs($Args, $Defaults = '') {
      
   	
   	if (is_object($Args)) {
   	        $r = get_object_vars($Args);
   	     } elseif (is_array($Args)) {
   	        $r =& $Args;
   	     }
   	        
   	     if (is_array($Defaults)) {
   	        return array_merge($Defaults, $r);
   	     }
   	           
   	     return $r;
   	
   }
}
