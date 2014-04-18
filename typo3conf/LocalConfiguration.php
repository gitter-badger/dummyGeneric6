<?php
return array(
	'BE' => array(
		'debug' => TRUE,
		'explicitADmode' => 'explicitAllow',
		'fileCreateMask' => '0660',
		'folderCreateMask' => '2770',
		'installToolPassword' => '$P$CEy5/L5KgF9YjLoE2l/h6zXWNQk17F.',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '0',
	),
	'DB' => array(
		'extTablesDefinitionScript' => 'extTables.php',
	),
	'EXT' => array(
		'extConf' => array(
			'adx_gridelements_accordion' => 'a:0:{}',
			'adx_gridelements_columns' => 'a:0:{}',
			'debug_mysql_db' => 'a:12:{s:10:"TYPO3_MODE";s:2:"FE";s:14:"DISABLE_ERRORS";s:1:"0";s:7:"QUERIES";s:6:"SELECT";s:6:"TABLES";s:4:"None";s:13:"EXCLUDETABLES";s:636:"be_groups,be_sessions,be_users,cache_extensions,cache_hash,cache_imagesizes,cache_pages,cache_pagesection,cache_treelist,fe_groups,cf_cache_hash,cf_cf_cache_pages,cf_cache_pagesection,cf_cache_pagesection_tags,cache_hash_tags,fe_sessions,fe_session_data,fe_users,pages,pages_language_overlay,static_countries,static_country_zones,static_currencies,static_languages,static_taxes,static_template,sys_domain,sys_lockedrecords,sys_template,tt_content,tx_realurl_chashcache,tx_realurl_urldecodecache,tx_realurl_urlencodecache,tx_realurl_pathcache,tx_realurl_redirects,tx_realurl_uniqalias,tx_templavoila_datastructure,tx_templavoila_tmplobj,";s:5:"PAGES";s:1:"0";s:7:"FEUSERS";s:1:"0";s:10:"BTRACE_SQL";s:1:"0";s:6:"OUTPUT";s:38:"\\TYPO3\\CMS\\Utility\\DebugUtility::debug";s:10:"TEXTFORMAT";s:1:"0";s:3:"TCA";s:1:"0";s:6:"TICKER";s:0:"";}',
			'gridelements' => 'a:1:{s:20:"additionalStylesheet";s:0:"";}',
			'gridelements_fce' => 'a:0:{}',
			'image_autoresize' => 'a:0:{}',
			'image_autoresize_ff' => 'a:10:{s:11:"directories";s:19:"fileadmin/,uploads/";s:10:"file_types";s:16:"jpg,jpeg,png,gif";s:9:"threshold";s:4:"200K";s:9:"max_width";s:4:"1300";s:10:"max_height";s:4:"1300";s:11:"auto_orient";s:1:"0";s:18:"conversion_mapping";s:65:"ai => jpg,bmp => jpg,pcx => jpg,tga => jpg,tif => jpg,tiff => jpg";s:13:"keep_metadata";s:1:"1";s:21:"resize_png_with_alpha";s:1:"1";s:8:"rulesets";a:1:{s:4:"data";a:1:{s:4:"sDEF";a:1:{s:4:"lDEF";a:1:{s:7:"ruleset";a:1:{s:2:"el";a:0:{}}}}}}}',
			'in8_reports' => 'a:11:{s:24:"enableBlaclistExtensions";s:1:"1";s:16:"listExtBlackLIst";s:0:"";s:18:"enableDatabaseSize";s:1:"1";s:17:"dbSizeOkThreshold";s:9:"157286400";s:22:"dbSizeWarningThreshold";s:9:"367001600";s:18:"enableCheckDumpSql";s:1:"1";s:25:"enableCheckWebmasterTools";s:1:"1";s:17:"enableProjectSize";s:1:"1";s:22:"projectSizeOkThreshold";s:9:"943718400";s:27:"projectSizeWarningThreshold";s:10:"1073741824";s:17:"enableCheckSyslog";s:1:"1";}',
			'in_gallery_flickr' => 'a:1:{s:12:"flickrApiKey";s:32:"a60d6d4cfa500b945995d905a8960849";}',
			'in_news' => 'a:1:{s:11:"newsDoktype";s:3:"180";}',
			'in_sitemap' => 'a:0:{}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'powermail' => 'a:6:{s:12:"disableIpLog";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
			'realurl' => 'a:5:{s:10:"configFile";s:51:"typo3conf/ext/skin/Classes/Utility/realurl_base.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
			'scheduler' => 'a:5:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";s:30:"listShowTaskDescriptionAsHover";s:1:"1";}',
			'scriptmerger' => 'a:0:{}',
			'skin' => 'a:0:{}',
			'skinDummy' => 'a:0:{}',
			'skinFlex' => 'a:0:{}',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'fr',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
			),
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'debug' => '1',
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'colorspace' => 'sRGB',
		'enable_typo3temp_db_tracking' => '1',
		'gdlib_png' => '1',
		'im' => '0',
		'im_mask_temp_ext_gif' => '0',
		'im_path' => '/usr/bin/',
		'im_path_lzw' => '/usr/bin/',
		'im_useStripProfileByDefault' => '0',
		'im_v5effects' => 1,
		'im_version_5' => 'im6',
		'image_processing' => 1,
		'jpg_quality' => '100',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'compat_version' => '6.2',
		'curlUse' => '1',
		'devIPmask' => '192.168.1.0/24',
		'displayErrors' => '2',
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => 'c71895a001fbc3bfc8ca0792e03c2f39f0e5df349a26a1678073c48481ef554ea2c0da19516273a384b8bcb12bea1efe',
		'isInitialInstallationInProgress' => FALSE,
		'setDBinit' => 'SET NAMES utf8;',
		'sitename' => 'Dummy Generic 6.2',
		'sqlDebug' => '1',
		'systemLogLevel' => '4',
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>