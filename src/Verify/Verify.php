<?php
/**
 * 验证方法类
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
        $email = !empty($email)?$email:$this->param;
        return filter_var($email,FILTER_VALIDATE_EMAIL);

    }
}