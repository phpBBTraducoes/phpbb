<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Inesperadamente a op��o de configura��o "%s" n�o existe.',

	'GROUP_NOT_EXIST'					=> 'Inesperadamente o grupo "%s" n�o existe.',

	'MIGRATION_DATA_DONE'				=> 'Dados instalados: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalando dados: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migra��o j� est� efetivamente instalada (saltar): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Algo correu mal durante a execu��o do pedido e foi criada uma exce��o. As altera��es feitas antes de ocorrer o erro foram revertidas da melhor forma poss�vel. No entanto, deve verificar se existem erros no f�rum.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'A migra��o "%1$s" n�o pode ser preenchida completamente, migra��o faltando "%2$s".',
	'MIGRATION_SCHEMA_DONE'				=> 'Esquema instalado: %1$s; Dados: %2$.2f segundos',
	'MIGRATION_APPLY_DEPENDENCIES'      => 'Aplicar dependencias de %s.',
	'MIGRATION_DATA_RUNNING'         	=> 'Instalando dados: %s.',
	'MIGRATION_NOT_VALID'           	=> '%s n�o � uma migra��o v�lida.',
	'MIGRATION_SCHEMA_RUNNING'         	=> 'Instalando esquema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'A migra��o � inv�lida. Uma condi��o em uma declara��o utilizando � IF � est� faltando.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'A migra��o � inv�lida. Um callback v�lida para uma etapa de migra��o em uma instru��o de aux�lio � IF � est� faltando.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'A migra��o � inv�lida. Uma fun��o personalizada exig�vel n�o pode ser executada.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'A migra��o � inv�lida. Um tipo de ferramenta de migra��o desconhecida foi encontrada.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'A migra��o � inv�lida. Uma ferramenta de migra��o indefinida foi encontrada.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'A migra��o � inv�lida. Um m�todo de ferramenta de migra��o indefinido foi encontrado.',

	'MODULE_ERROR'						=> 'Ocorreu um erro durante a cria��o de um m�dulo: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Um arquivo com informa��es do m�dulo necess�rio est� faltando: %2$s',
	'MODULE_NOT_EXIST'					=> 'Um m�dulo requerido n�o existe: %s',

	'PERMISSION_NOT_EXIST'				=> 'Inesperadamente a configura��o de permiss�o "%s" n�o existe.',

	'ROLE_NOT_EXIST'					=> 'Inesperadamente a permiss�o "%s" n�o existe.',
));
