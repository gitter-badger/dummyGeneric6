<?php
namespace TYPO3\CMS\Extbase\Validation\Validator;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2013 Extbase Team (http://forge.typo3.org/projects/typo3v4-mvc)
 *  Extbase is a backport of TYPO3 Flow. All credits go to the TYPO3 Flow team.
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
 *  A copy is found in the text file GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Validator for "plain" text.
 *
 * @api
 */
class TextValidator extends AbstractValidator {

	/**
	 * Checks if the given value is a valid text (contains no XML tags).
	 *
	 * Be aware that the value of this check entirely depends on the output context.
	 * The validated text is not expected to be secure in every circumstance, if you
	 * want to be sure of that, use a customized regular expression or filter on output.
	 *
	 * See http://php.net/filter_var for details.
	 *
	 * @param mixed $value The value that should be validated
	 * @return void
	 * @api
	 */
	public function isValid($value) {
		if ($value !== filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {
			$this->addError(
				\TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate(
					'validator.text.notvalid',
					'extbase'
				), 1221565786);
		}
	}
}