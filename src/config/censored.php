<?php
use ShahiemSeymor\Bbcode\Models\Settings;
/**
 * @copyright   2006-2014, Miles Johnson - http://milesj.me
 * @license     https://github.com/milesj/decoda/blob/master/license.md
 * @link        http://milesj.me/code/php/decoda
 */
$censor = array(
    'asshole',
    'bitch',
    'btch',
    'blowjob',
    'cock',
    'cawk',
    'clt',
    'clit',
    'clitoris',
    'cock',
    'cocksucker',
    'cum',
    'cunt',
    'cnt',
    'dildo',
    'dick',
    'douche',
    'fag',
    'faggot',
    'fcuk',
    'fuck',
    'fuk',
    'motherfucker',
    'nigga',
    'nigger',
    'nig',
    'penis',
    'pussy',
    'rimjaw',
    'scrotum',
    'shit',
    'sht',
    'slut',
    'twat',
    'whore',
    'whre',
    'vagina',
    'vag',
    'rape',
);

$words = explode(",", Settings::get('censor_words'));

return array_merge($words, $censor);