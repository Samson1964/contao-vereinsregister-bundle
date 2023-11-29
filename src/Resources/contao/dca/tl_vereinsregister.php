<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_vereinsregister
 */
$GLOBALS['TL_DCA']['tl_vereinsregister'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_vereinsregister_chronik', 'tl_vereinsregister_chairman', 'tl_vereinsregister_members', 'tl_vereinsregister_namen'),
		'switchToEdit'                => true, 
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id'             => 'primary',
				'name'           => 'index',
				'foundingDate'   => 'index',
				'resolutionDate' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'sort;filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('name', 'timerange'),
			'format'                  => '%s (%s)',
			'label_callback'          => array('tl_vereinsregister', 'listVereine')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
			),
			'editChronik' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['editChronik'],
				'href'                => 'table=tl_vereinsregister_chronik',
				'icon'                => 'bundles/contaovereinsregister/images/history.png'
			),
			'editNamen' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['editNamen'],
				'href'                => 'table=tl_vereinsregister_namen',
				'icon'                => 'bundles/contaovereinsregister/images/namen.png'
			),
			'editChairman' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['editChairman'],
				'href'                => 'table=tl_vereinsregister_chairman',
				'icon'                => 'bundles/contaovereinsregister/images/chairman.png'
			),
			'editMembers' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['editMembers'],
				'href'                => 'table=tl_vereinsregister_members',
				'icon'                => 'bundles/contaovereinsregister/images/members.png'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif',
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['toggle'],
				'attributes'           => 'onclick="Backend.getScrollOffset()"',
				'haste_ajax_operation' => array
				(
					'field'            => 'published',
					'options'          => array
					(
						array('value' => '', 'icon' => 'invisible.svg'),
						array('value' => '1', 'icon' => 'visible.svg'),
					),
				),
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_vereinsregister']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('addImage', 'addBefore', 'addSeparation', 'addAfter', 'overwriteMeta'), 
		'default'                     => '{name_legend},name,association;{place_legend:hide},continent,land,region,city;{time_legend:hide},timerange,periodStartDate,periodEndDate,foundingDate,resolutionDate;{info_legend:hide},info;{before_legend:hide},addBefore;{separation_legend:hide},addSeparation;{after_legend:hide},addAfter;{image_legend},addImage;{link_legend:hide},url;{intern_legend:hide},intern;{publish_legend},published'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'addImage'                    => 'singleSRC,size,floating,fullsize,overwriteMeta',
		'overwriteMeta'               => 'alt,imageTitle,imageUrl,caption',
		'addBefore'                   => 'beforeClubs',
		'addSeparation'               => 'separationClubs',
		'addAfter'                    => 'afterClubs,afterCause',
	), 
	
	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['name'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'association' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['association'],
			'exclude'                 => true,
			'search'                  => false,
			'sorting'                 => false,
			'filter'                  => true,
			'default'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'continent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['continent'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'land' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['land'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'region' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['region'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['city'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 3,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'timerange' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['timerange'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'periodStartDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['periodStartDate'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 12,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array
			(
				'maxlength'           => 10,
				'tl_class'            => 'w50 clr',
				'rgxp'                => 'alnum'
			),
			'load_callback'           => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'getDate')
			),
			'save_callback' => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'putDate')
			),
			'sql'                     => "int(8) unsigned NOT NULL default '0'"
		),
		'periodEndDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['periodEndDate'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 12,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array
			(
				'maxlength'           => 10,
				'tl_class'            => 'w50',
				'rgxp'                => 'alnum'
			),
			'load_callback'           => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'getDate')
			),
			'save_callback' => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'putDate')
			),
			'sql'                     => "int(8) unsigned NOT NULL default '0'"
		),
		'foundingDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['foundingDate'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 12,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array
			(
				'maxlength'           => 10,
				'tl_class'            => 'w50 clr',
				'rgxp'                => 'alnum'
			),
			'load_callback'           => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'getDate')
			),
			'save_callback' => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'putDate')
			),
			'sql'                     => "int(8) unsigned NOT NULL default '0'"
		),
		'resolutionDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['resolutionDate'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 12,
			'filter'                  => true,
			'inputType'               => 'text',
			'eval'                    => array
			(
				'maxlength'           => 10,
				'tl_class'            => 'w50',
				'rgxp'                => 'alnum'
			),
			'load_callback'           => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'getDate')
			),
			'save_callback' => array
			(
				array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'putDate')
			),
			'sql'                     => "int(8) unsigned NOT NULL default '0'"
		),
		'addBefore' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['addBefore'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'beforeClubs' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['beforeClubs'],
			'exclude'                 => true,
			'options_callback'        => array('tl_vereinsregister', 'getVereinsliste'),
			'onsubmit_callback'       => array(array('tl_vereinsregister', 'getVereinsliste')),
			'inputType'               => 'select',
			'eval'                    => array
			(
				'mandatory'           => true, 
				'chosen'              => true, 
				'multiple'            => true, 
				'tl_class'            => 'clr'
			),
			'sql'                     => "blob NULL", 
		),
		'addSeparation' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['addSeparation'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'separationClubs' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_vereinsregister']['separationClubs'],
			'exclude' 				=> true,
			'inputType' 			=> 'multiColumnWizard',
			'eval' 					=> array
			(
				'buttonPos' 		=> 'middle',
				'buttons'			=> array
				(
					//'copy' 			=> false, 
					//'delete' 		=> true,
					'up' 			=> false,
					'down'			=> false
				),
				'columnFields' 		=> array
				(
					'separationClub' => array
					(
						'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['separationClub'],
						'exclude'                 => true,
						'options_callback'        => array('tl_vereinsregister', 'getVereinsliste'),
						'onsubmit_callback'       => array(array('tl_vereinsregister', 'getVereinsliste')),
						'inputType'               => 'select',
						'eval'                    => array
						(
							'mandatory'           => true, 
							'chosen'              => true, 
							'multiple'            => false, 
							'style'               => 'width:600px'
						),
						'sql'                     => "int(6) unsigned NOT NULL default '0'", 
					),
					'separationDate' => array
					(
						'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['separationDate'],
						'exclude'                 => true,
						'search'                  => true,
						'sorting'                 => true,
						'flag'                    => 12,
						'filter'                  => true,
						'inputType'               => 'text',
						'eval'                    => array
						(
							'tl_class'            => 'w50 wizard',
							'style'               => 'width:150px',
							'datepicker'          => true,
							'maxlength'           => 10,
							'rgxp'                => 'alnum'
						),
						'load_callback'           => array
						(
							array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'getDate')
						),
						'save_callback' => array
						(
							array('\Schachbulle\ContaoHelperBundle\Classes\Helper', 'putDate')
						),
						'sql'                     => "int(8) unsigned NOT NULL default '0'"
					),
				)
			),
			'sql'                   => "blob NULL"
		),
		'addAfter' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['addAfter'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'afterClubs' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['afterClubs'],
			'exclude'                 => true,
			'options_callback'        => array('tl_vereinsregister', 'getVereinsliste'),
			'onsubmit_callback'       => array(array('tl_vereinsregister', 'getVereinsliste')),
			'inputType'               => 'select',
			'eval'                    => array
			(
				'mandatory'           => true, 
				'chosen'              => true, 
				'multiple'            => true, 
				'tl_class'            => 'clr w50'
			),
			'sql'                     => "blob NULL", 
		),
		'afterCause' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['afterCause'],
			'default'                 => 'text',
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_vereinsregister', 'getGrund'),
			'eval'                    => array
			(
				'mandatory'           => true, 
				'tl_class'            => 'w50'
			),
			'sql'                     => "char(1) NOT NULL default ''"
		), 
		'info' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['info'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE'),
			'explanation'             => 'insertTags', 
			'sql'                     => "mediumtext NULL"
		),
		'addImage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['addImage'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'singleSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['singleSRC'],
			'inputType'               => 'fileTree',
			'eval'                    => array
			(
				'fieldType'           => 'radio', 
				'filesOnly'           => true, 
				'extensions'          => '%contao.image.valid_extensions%', 
				'mandatory'           => true,
				'tl_class'            => 'clr'
			),
			'sql'                     => "binary(16) NULL"
		),
		'size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['imgSize'],
			'inputType'               => 'imageSize',
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50 clr'),
			'options_callback' => static function ()
			{
				return Contao\System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(Contao\BackendUser::getInstance());
			},
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'floating' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['floating'],
			'inputType'               => 'radioTable',
			'options'                 => array('above', 'left', 'right', 'below'),
			'eval'                    => array('cols'=>4, 'tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'sql'                     => "varchar(12) NOT NULL default 'above'"
		),
		'fullsize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['fullsize'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50', 'type' => 'boolean'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'overwriteMeta' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['overwriteMeta'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr', 'type' => 'boolean'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'alt' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['alt'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'imageTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['imageTitle'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'imageUrl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['imageUrl'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'addWizardClass'=>false, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'caption' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['caption'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['url'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'long'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		), 
		'intern' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['intern'],
			'exclude'                 => true,
			'search'                  => false,
			'sorting'                 => false,
			'filter'                  => false,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE'),
			'sql'                     => "text NULL"
		), 
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_vereinsregister']['published'],
			'exclude'                 => true,
			'search'                  => false,
			'sorting'                 => false,
			'filter'                  => true,
			'default'                 => 1,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
	)
);


/**
 * Class tl_vereinsregister
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    News
 */
class tl_vereinsregister extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Add the type of input field
	 * @param array
	 * @return string
	 */
	public function listVereine ($arrRow)
	{
		$temp = '<div class="tl_content_left">' . $arrRow['name'];
		if($arrRow['timerange']) $temp .= ' <span style="color:#b3b3b3;padding-left:3px">[' . $arrRow['timerange'] . ']</span>';
		else $temp .= ' <span style="color:#b3b3b3;padding-left:3px">['.\Schachbulle\ContaoHelperBundle\Classes\Helper::getDate($arrRow['foundingDate']).' - '.\Schachbulle\ContaoHelperBundle\Classes\Helper::getDate($arrRow['resolutionDate']).']</span>';
		$temp .= '</div>';
		return $temp;
	}

	public function getVereinsliste(DataContainer $dc)
	{
		$array = array();
		$objVereine = $this->Database->prepare("SELECT id, name, timerange, foundingDate, resolutionDate, published FROM tl_vereinsregister WHERE published = ? ORDER BY name ASC")
		                              ->execute(1);
		while($objVereine->next())
		{
			$array[$objVereine->id] = '<b>'.$objVereine->name.'</b>';
			$array[$objVereine->id] .= $objVereine->timerange ? ' ['.$objVereine->timerange.']' : ' ['.\Schachbulle\ContaoHelperBundle\Classes\Helper::getDate($objVereine->foundingDate).' - '.\Schachbulle\ContaoHelperBundle\Classes\Helper::getDate($objVereine->resolutionDate).']';
		}
		return $array;
	}
	
	public function getGrund(DataContainer $dc)
	{
		$array = array
		(
			''  => '-',
			'1' => 'Aufspaltung/Trennung',
			'2' => 'Auflösung',
			'3' => 'Fusion mit anderem/n Verein(en)',
			'4' => 'Umbenennung',
		);
		return $array;
	}

}
