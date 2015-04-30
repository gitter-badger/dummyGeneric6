<?php
namespace TYPO3\CMS\Form\Tests\Unit\PostProcess;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Susanne Moog, <typo3@susannemoog.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Testcase for PostProcessor
 */
class PostProcessorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHPUnit_Framework_MockObject_MockObject|\TYPO3\CMS\Form\PostProcess\PostProcessor
	 */
	public $fixture;

	/**
	 * Set up
	 */
	public function setUp() {
		$form = $this->getMock('TYPO3\\CMS\\Form\\Domain\\Model\\Form', array(), array(), '', FALSE);
		$this->fixture = $this->getMock(
			'TYPO3\CMS\Form\PostProcess\PostProcessor',
			array('sortTypoScriptKeyList'),
			array($form, array())
		);
	}

	/**
	 * @test
	 */
	public function processFindsClassSpecifiedByTypoScriptWithoutFormPrefix() {
		$classNameWithoutPrefix = uniqid('postprocess');
		eval(
			'namespace TYPO3\CMS\Form\PostProcess;' .
			'class ' . $classNameWithoutPrefix . 'PostProcessor implements PostProcessorInterface {' .
			'  public function __construct(\TYPO3\CMS\Form\Domain\Model\Form $form, array $typoScript) {' .
			'  }' .
			'  public function process() {' .
			'    return \'processedWithoutPrefix\';' .
			'  }' .
			'}'
		);
		$typoScript = array(
			10 => uniqid('postprocess'),
			20 => $classNameWithoutPrefix
		);
		$this->fixture->typoScript = $typoScript;
		$this->fixture->expects($this->once())->method('sortTypoScriptKeyList')->will($this->returnValue(array(10, 20)));
		$returnValue = $this->fixture->process();
		$this->assertEquals('processedWithoutPrefix', $returnValue);
	}

	/**
	 * @test
	 */
	public function processFindsClassSpecifiedByTypoScriptWithFormPrefix() {
		$classNameWithPrefix = uniqid('postprocess');
		eval(
			'namespace TYPO3\CMS\Form\PostProcess;' .
			'class ' . $classNameWithPrefix . 'PostProcessor implements PostProcessorInterface {' .
			'  public function __construct(\TYPO3\CMS\Form\Domain\Model\Form $form, array $typoScript) {' .
			'  }' .
			'  public function process() {' .
			'    return \'processedWithPrefix\';' .
			'  }' .
			'}'
		);
		$typoScript = array(
			10 => uniqid('postprocess'),
			20 => $classNameWithPrefix
		);
		$this->fixture->typoScript = $typoScript;
		$this->fixture->expects($this->once())->method('sortTypoScriptKeyList')->will($this->returnValue(array(10, 20)));
		$returnValue = $this->fixture->process();
		$this->assertEquals('processedWithPrefix', $returnValue);
	}

	/**
	 * @test
	 */
	public function processReturnsEmptyStringIfSpecifiedPostProcessorDoesNotImplementTheInterface() {
		$classNameWithoutInterface = uniqid('postprocess');
		eval(
			'namespace TYPO3\CMS\Form\PostProcess;' .
			'class ' . $classNameWithoutInterface . 'PostProcessor {' .
			'  public function __construct(\TYPO3\CMS\Form\Domain\Model\Form $form, array $typoScript) {' .
			'  }' .
			'  public function process() {' .
			'    return \'withoutInterface\';' .
			'  }' .
			'}'
		);
		$typoScript = array(
			10 => uniqid('postprocess'),
			20 => $classNameWithoutInterface
		);
		$this->fixture->typoScript = $typoScript;
		$this->fixture->expects($this->once())->method('sortTypoScriptKeyList')->will($this->returnValue(array(10, 20)));
		$returnValue = $this->fixture->process();
		$this->assertEquals('', $returnValue);
	}

}