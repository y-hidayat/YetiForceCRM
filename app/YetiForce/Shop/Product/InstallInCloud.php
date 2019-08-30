<?php
/**
 * YetiForce shop InstallInCloud file.
 *
 * @package   App
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace App\YetiForce\Shop\Product;

/**
 * YetiForce shop InstallInCloud class.
 */
class InstallInCloud extends \App\YetiForce\Shop\AbstractBaseProduct
{
	/**
	 * {@inheritdoc}
	 */
	public $pricesType = 'selection';
	/**
	 * {@inheritdoc}
	 */
	public $prices = [
		'Micro' => 50,
		'Small' => 100,
		'Medium' => 200,
		'Large' => 400,
	];

	/**
	 * {@inheritdoc}
	 */
	public $customFields = [
		'subdomain' => [
			'label' => 'LBL_DOMAIN_PREFIX',
			'type' => 'text',
			'validator' => 'required,custom[onlyLetterNumber]'
		],
		'email' => [
			'label' => 'LBL_EMAIL',
			'type' => 'email',
			'validator' => 'required,funcCall[Vtiger_Email_Validator_Js.invokeValidation]'
		]
	];

	/**
	 * {@inheritdoc}
	 */
	public $companyDataForm = false;

	/**
	 * {@inheritdoc}
	 */
	public $featured = true;

	/**
	 * {@inheritdoc}
	 */
	public function verify($cache = true): bool
	{
		return true;
	}
}