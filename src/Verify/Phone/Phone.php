<?php
/**
 * 电话号码验证
 */
namespace Verify\Phone;

class Phone
{

	private $phoneNum = '';
	
	function __construct($phoneNum = '')
	{
		$this->phoneNum = $phoneNum;
	}

	public function checkPhone($phone = '')
	{
		$num = isset($phone)?$phone:$this->phoneNum;
		$preg_phone='/^1[34578]\d{9}$/ims';
        if (preg_match($preg_phone, $num)) {
			return $num;
        } else {
			return false;
        }
	}
}