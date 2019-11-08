<?php
/**
 * 电话号码验证
 */
namespace Verify;

class Verify
{

	private $param = '';
	
	function __construct($param = '')
	{
		$this->param = $param;
	}

	public function checkPhone($phone = '')
	{
        $num = !empty($phone)?$phone:$this->param;
		$preg_phone='/^1[34578]\d{9}$/ims';
        if (preg_match($preg_phone, $num)) {
			return $num;
        } else {
			return false;
        }
	}

	public function checkEmail($email = '')
    {

    }
}