<?php
/*
 *-----------------------------------------------
 *
 *@author [jinsemuyefeng] <[753517165@qq.com]>
 *
 *
 *@version [1.0]
 *
 *-----------------------------------------------
 */
class LoginController extends Controller
{
	
	

	public function actionIndex(){
		$this->renderPartial('/default/login');
	}
}
