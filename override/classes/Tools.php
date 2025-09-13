<?php

class Tools extends ToolsCore
{
    public static function displayPrice($price, $currency = null, $no_utf8 = false, Context $context = null)
            {

                if (!is_numeric($price)) {
                    return $price;
                }

                $context = $context ?: Context::getContext();
                $currency = $currency ?: $context->currency;

                if (is_int($currency)) {
                    $currency = Currency::getCurrencyInstance($currency);
                }

                $locale = static::getContextLocale($context);
                $currencyCode = is_array($currency) ? $currency["iso_code"] : $currency->iso_code;

                return $locale->formatPrice($price, $currencyCode);
            }

}