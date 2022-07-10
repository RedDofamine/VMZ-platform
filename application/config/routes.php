<?php


return [
	// '' => [
	// 	'controller' => 'main',
	// 	'action' => 'index'
	// ],
	// 'account/${1}' => [
	// 	'controller' => 'account',
	// 	'action' => 'index'
	// ],
	'account' => [
		'controller' => 'account',
		'action' => 'logout'
	],
	'login' => [
		'controller' => 'account',
		'action' => 'login'
	],
	'register' => [
		'controller' => 'account',
		'action' => 'register'
	],
	'doc' => [
		'controller' => 'doc',
		'action' => 'index'
	],
	'doc/act' => [
		'controller' => 'doc',
		'action' => 'act'
	],
	'doc/tools' => [
		'controller' => 'doc',
		'action' => 'tools'
	],
	// 'doc/tool/${1}' => [
	// 	'controller' => 'doc',
	// 	'action' => 'tool'
	// ],
	// 'doc/machines' => [
	// 	'controller' => 'doc',
	// 	'action' => 'machines'
	// ],
	// 'doc/machine/${1}' => [
	// 	'controller' => 'doc',
	// 	'action' => 'machine'
	// ],
	// 'doc/program/${1}' => [
	// 	'controller' => 'doc',
	// 	'action' => 'program'
	// ],
	// 'doc/programs' => [
	// 	'controller' => 'doc',
	// 	'action' => 'programs'
	// ],
];
