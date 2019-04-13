<?php

/**
 * @Author: Jabin
 * @Date:   2019-04-13
 * @Email:  jpyan2906@gmail.com
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
	public function __construct()
	{
		# code...
	}

	public function preForm()
	{
		return view('page.show');
	}

	public function form(Request $request)
	{
		$this->validate($request,config('validate.requestValFiled'),config('validate.requestValMsg'));
		return response('表单验证通过');
	}
}