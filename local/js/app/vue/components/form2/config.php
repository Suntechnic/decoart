<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

return [
    'js' =>[
        '/local/js/app/vue/components/form2/dist/script.js',
    ],
    'rel' => [
		'main.polyfill.core',
		'ui.vue',
	],
    'skip_core' => true,
];