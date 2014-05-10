<?php

class StringHelper
{
    /**
     * remove unit currency $..
     * @param $p
     * @return int
     */
    public function removeUnitCurrency($p)
    {
        $result = '';
        $arrUnitCurrency = array('$');
        foreach($arrUnitCurrency as $currency)
        {
            $result = str_replace($currency,'',$p);
        }
        return $result;
    }
    /**
     * show saving price of a product or service
     * @param $p
     * @return string
     */
    public function savingPrice($p)
    {
        $result = '';
        $price = intval(StringHelper::removeUnitCurrency($p->price));
        $special_price = intval(StringHelper::removeUnitCurrency($p->special_price));

        if(!empty($special_price))
        {
            $result = round((($price - $special_price)/$price) * 100, 2) . '%';
        }
        return $result;
    }

    /**
     * limit a 'x' words show of a string
     * @param $str
     * @param int $limit
     * @param string $end_char
     * @return string
     */
    public static function limit_chars($str, $limit = 100, $end_char = '&#8230;')
    {
        $lengthShow = $limit;
        @mb_internal_encoding("UTF-8");
		$str = strip_tags($str);
        $intContentLength = mb_strlen($str);
        if ($intContentLength < $lengthShow) return $str;
        else {
            while ($lengthShow > 0 && mb_substr($str, $lengthShow, 1) != ' ') $lengthShow--;
            return mb_substr($str, 0, $lengthShow) . $end_char;
        }
    }

    public static function limit_words($str, $limit = 100, $end_char = '&#8230;')
    {
        if (trim($str) == '')
        {
            return $str;
        }

        preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

        if (strlen($str) == strlen($matches[0]))
        {
            $end_char = '';
        }

        return rtrim($matches[0]).$end_char;
    }
}
