<?php
/**
 * 
 * This file is part of the Aura Project for PHP.
 * 
 * @package Aura.Intl
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Intl;

/**
 * 
 * BasicFormatter
 * 
 * @package Aura.Intl
 * 
 */
class BasicFormatter implements FormatterInterface
{
    /**
     * 
     * Format message
     * 
     * @param string $locale
     * 
     * @param string $string
     * 
     * @param array $tokens_values
     * 
     * @return string A string replaced with the token values
     * 
     */
    public function format($locale, $string, array $tokens_values)
    {
        foreach ($tokens_values as $token => $value) {
            $string = str_replace("{:$token}", $value, $string);
        }
        return $string;
    }
}
