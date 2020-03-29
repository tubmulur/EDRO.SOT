<?php
//Copyright © assminog@gmail.com Andrey A. Chekmarev
$arrElectronicContactIOTemplates= array(
	'Email'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Email',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Email',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'		=>'Электронная почта',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Электронная почта',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Telegram'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'			=>'Telegram',
					'inputName'		=>'Telegram link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Telegram',
					),
				
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'			=>'Телеграм',
					'inputName'	=>'Ссылка на Телеграм',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Телеграм',
					'inputName'	=>'Ссылка на Телеграм',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					)
				)
			)
		),
	'Whatsapp'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'		=>'Whatsapp',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Whatsapp',
				),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Whatsapp',
					'inputName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Whatsapp',
					'inputName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					)
				)
			)
		),
	'VK'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'VK',
					'inputName'	=>'Vk link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'VK',
					'inputName'	=>'Vk link',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'ВК',
					'inputName'	=>'Ссылка на ВК',
					),
				'Templates'=>array(
					'Default'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'ВК',
					'inputName'	=>'Ссылка на ВК',
					),
				'Templates'=>array(
					'Default'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Skype'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Skype',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="callto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Skype',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					)
				)
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Скайп',
					'inputName'	=>'Номер телефона Скайп',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="callto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Скайп',
					'inputName'	=>'Номер телефона Скайп',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Viber'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Viber',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Viber',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Вайбер',
					'templateContactName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				    ),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Вайбер',
					'templateContactName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					)
				)
			)
		),
	'ICQ'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'		=>'ICQ number',
					),
				'Templates'	=>array(
					'Default'	=>'{Contact}',
					'Android'	=>'{Contact}',
					'IOS'		=>'{Contact}',
					'Windows'	=>'{Contact}',
				    ),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'		=>'ICQ number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					),
				),
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
				'Templates'	=>array(
					'Default'	=>'{Contact}',
					'Android'	=>'{Contact}',
					'IOS'		=>'{Contact}',
					'Windows'	=>'{Contact}',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					)
				)
			)
		),
	'Facebook'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Facebook',
					'inputName'	=>'Facebook link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					)
				)
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'	=>'Фейсбук',
					'inputName'	=>'Ссылка на Фейсбук',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'	=>array(
				'Names'	=>array(
					'Name'	=>'Фейсбук',
					'inputName'	=>'Ссылка на Фейсбук',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					)
				)
			)
		)
	);
//arrElectronicContactServices= array('str@strServiceName'=>strContact);
?>