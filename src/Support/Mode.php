<?php namespace PragmaRX\Glottos\Support;
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

class Mode {

	protected $mode;

    /**
     * Create an instance of Mode
     * 
     * @param string
     */
	public function __construct($mode = null)
	{
		$this->mode = $mode;
	}

    /**
     * Mode getter
     * 
     * @return string
     */
    public function get()
    {
        return $this->mode;
    }

    /**
     * Mode setter
     * @param string
     */
    public function set($value)
    {
        $this->mode = $value;
    }

}