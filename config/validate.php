<?php

/**
 * @Author: Jabin
 * @Date:   2019-04-13
 * @Email:  jpyan2906@gmail.com
 */
return [
	'requestValFiled' => [
		'title' => 'bail|required|string|between:2,32',
		'url' => 'sometimes|url|max:200',
		'picture' => 'nullable|string'
	],

	'requestValMsg' => [
		'title.required' => '标题字段不能为空',
		'title.string' => '标题字段仅支持字符串',
		'title.between' => '标题长度必须介于2-32之间',
		'url.url' => 'URL格式不正确，请输入有效的URL',
		'url.max' => 'URL长度不能超过200',
	]
];