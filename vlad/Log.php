<?php
namespace vlad;

class Log extends \core\LogAbstract implements \core\LogInterface{
 protected $log = array();
 
	public static function log($str){
		self:: Instance() -> log[] = $str ;
 }
 
	public function _write()
	{
		if (mkdir("log\\", 0700))
		{
		 $date = new \DateTime();
		 $resdate = $date -> format('Y-m-d\TH-i-s.u').".log";
		 file_put_contents("log\\".$resdate, implode("\n", $this->log), FILE_APPEND);
		 echo implode("\n", $this->log);
		} else die("Ошибка создания файла");
	}

	public static function write() {
		self::Instance()->_write();
	}
}
?>