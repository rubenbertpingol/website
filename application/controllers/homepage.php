<?if( ! defined('BASEPATH') ) EXIT('No direct script access allowed!');

class Homepage extends CI_Controller
{
	public $myClass;
	public $data_;
	public $pageRequest;
	public $isMenu_block = false;
	public $isAuthor = false;
	public $isFeatured = false;
	public $isRightPane = false;
	public $isFooter = false;
	
	function __construct()
	{
		parent::__construct();
		$this->myClass = $this;
		$this->pageRequest = $this->setRequest();
	}
	
	public function index()
	{
		$data = array(
			"isMenu"						=>	$this->isMenu_block = true,
			"isIncludeAuthor"		=>	$this->isAuthor	= true,
			"isIncludeFeatured"	=>	$this->isFeatured	= true,
			"isRight"						=>	$this->isRightPane = true,
			"isFoot"						=>	$this->isFooter = true,
			"articles"					=>	array("biography"),
			"rightpanes"				=>	array("awards-and-recognitions", "services-offered")
		);
		
		$this->data_ = $data;
		
		$this->load->view("template", $data);
	}
	
	public function loadMenu($pos = null)
	{
		if( !is_null($pos) ){
			$this->load->view("includes/" . $pos . "-menu", $this->data_);
		}
	}
	
	public function loadAuthor()
	{
		$this->load->view("includes/auth", $this->data_);
	}
	
	public function loadFeatured($file = null)
	{
		if( !is_null($file) ){
			$this->load->view("featured/" . $file, $this->data_);
		}
	}
	
	public function loadFooter($footer = null)
	{
		if( !is_null($footer) ){
			$this->load->view($footer, $this->data_);
		} else {
			$this->load->view("includes/footer", $this->data_);
		}
	}
	
	protected function setRequest()
	{
		if($_SERVER['REQUEST_METHOD']){
			if($_SERVER['REQUEST_METHOD'] == "GET"){
				if(!array_key_exists('isDynamicPage', $_GET)){
					$_GET['isDynamicPage'] = true;
				}
			}
		}
	}
	
}