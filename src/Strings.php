<?php

namespace Funct\Strings;

/**
 * Extracts the string between two substrings
 *
 * @param string $input
 * @param string $left
 * @param string $right
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function between($input, $left, $right)
{
    $input = ' ' . $input;
    $ini   = strpos($input, $left);

    if ($ini == 0) {
        return '';
    }

    $ini += strlen($left);
    $len = strpos($input, $right, $ini) - $ini;

    return substr($input, $ini, $len);
}


/**
 * Camelizes string
 *
 * @param string $input
 * @param bool   $firstLetterUppercase
 *
 * @return string
 *
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function camelize($input, $firstLetterUppercase = false)
{
    $input = trim($input);

    if ($firstLetterUppercase) {
        $input = upperCaseFirst($input);
    } else {
        $input = lowerCaseFirst($input);
    }

    $input = preg_replace('/^[-_]+/', '', $input);

    $input = preg_replace_callback(
        '/[-_\s]+(.)?/u',
        function ($match) {
            if (isset($match[1])) {
                return strtoupper($match[1]);
            } else {
                return '';
            }
        },
        $input
    );

    $input = preg_replace_callback(
        '/[\d]+(.)?/u',
        function ($match) {
            return strtoupper($match[0]);
        },
        $input
    );

    return $input;
}


/**
 * Removes prefix from start of string
 *
 * @param string $input
 * @param string $prefix
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function chompLeft($input, $prefix)
{
    if (startsWith($input, $prefix)) {
        return mb_substr($input, mb_strlen($prefix));
    }

    return $input;
}

/**
 * Removes suffix from end of string
 *
 * @param string $input
 * @param string $suffix
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function chompRight($input, $suffix)
{
    if (endsWith($input, $suffix)) {

        return mb_substr($input, 0, mb_strlen($input) - mb_strlen($suffix));
    }

    return $input;
}

/**
 * Converts string to camelized class name. First letter is always upper case
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function classify($string)
{
    return camelize($string, true);
}


/**
 * Collapse multiple spaces
 *
 * @param string $input
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function collapseWhitespace($input)
{
    return preg_replace('/\s+/u', ' ', $input);
}

/**
 * Check if string contains substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function contains($input, $substring)
{
    return mb_strpos($input, $substring) !== false;
}

/**
 * Count the occurrences of substring in string
 *
 * @param string $input
 * @param string $substring
 *
 * @return int
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function countOccurrences($input, $substring)
{
    return mb_substr_count($input, $substring);
}


/**
 * Converts hyphens and camel casing to underscores
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function dasherize($string)
{
    return strtolower(preg_replace('/(?<!^)([A-Z])/', '-$1', str_replace('_', '-', $string)));
}


/**
 * Check if string ends with substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function endsWith($input, $substring)
{
    return mb_substr($input, -strlen($substring)) === $substring;
}

/**
 * Alias of contains
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function includes($input, $substring)
{
    return contains($input, $substring);
}


/**
 * Check if string contains only letters
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function isAlpha($input)
{
    return ctype_alpha($input);
}

/**
 * Check if string contains only alphanumeric
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function isAlphaNumeric($input)
{
    return ctype_alnum($input);
}

/**
 * Checks if letters in given string are all lowercase.
 *
 * @param string $input
 * @param bool   $mb
 *
 * @return bool
 *
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
 */
function isLower($input, $mb = false)
{
    return $mb
        ? mb_strtolower($input, mb_detect_encoding($input, 'auto')) === $input
        : strtolower($input) === $input;
}


/**
 * Check if string contains only digits
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function isNumeric($input)
{
    return ctype_digit($input);
}

/**
 * Checks if letters in given string are all uppercase.
 *
 * @param string $input
 * @param bool   $mb
 *
 * @return bool
 *
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
 */
function isUpper($input, $mb = false)
{
    return $mb
        ? mb_strtoupper($input, mb_detect_encoding($input, 'auto')) === $input
        : strtoupper($input) === $input;
}


/**
 * Remove accents from latin characters
 *
 * @param string $input
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function latinize($input)
{
    $table = [
        'أ' => 'a', 'ب' => 'b', 'ت' => 't', 'ث' => 'th', 'ج' => 'g', 'ح' => 'h', 'خ' => 'kh', 'د' => 'd', 'ذ' => 'th',
        'ر' => 'r', 'ز' => 'z', 'س' => 's', 'ش' => 'sh', 'ص' => 's', 'ض' => 'd', 'ط' => 't', 'ظ' => 'th', 'ع' => 'aa',
        'غ' => 'gh', 'ف' => 'f', 'ق' => 'k', 'ك' => 'k', 'ل' => 'l', 'م' => 'm', 'ن' => 'n', 'ه' => 'h', 'و' => 'o',
        'ي' => 'y', 'Ä' => 'A', 'Ö' => 'O', 'Ü' => 'U', 'ß' => 'ss', 'ä' => 'a', 'ö' => 'o', 'ü' => 'u', 'က' => 'k',
        'ခ' => 'kh', 'ဂ' => 'g', 'ဃ' => 'ga', 'င' => 'ng', 'စ' => 's', 'ဆ' => 'sa', 'ဇ' => 'z', 'စျ' => 'za',
        'ည' => 'ny', 'ဋ' => 't', 'ဌ' => 'ta', 'ဍ' => 'd', 'ဎ' => 'da', 'ဏ' => 'na', 'တ' => 't', 'ထ' => 'ta', 'ဒ' => 'd',
        'ဓ' => 'da', 'န' => 'n', 'ပ' => 'p', 'ဖ' => 'pa', 'ဗ' => 'b', 'ဘ' => 'ba', 'မ' => 'm', 'ယ' => 'y', 'ရ' => 'ya',
        'လ' => 'l', 'ဝ' => 'w', 'သ' => 'th', 'ဟ' => 'h', 'ဠ' => 'la', 'အ' => 'a', 'ြ' => 'y', 'ျ' => 'ya', 'ွ' => 'w',
        'ြွ' => 'yw', 'ျွ' => 'ywa', 'ှ' => 'h', 'ဧ' => 'e', '၏' => '-e', 'ဣ' => 'i', 'ဤ' => '-i', 'ဉ' => 'u',
        'ဦ' => '-u', 'ဩ' => 'aw', 'သြော' => 'aw', 'ဪ' => 'aw', '၍' => 'ywae', '၌' => 'hnaik', '၀' => '0', '၁' => '1',
        '၂' => '2', '၃' => '3', '၄' => '4', '၅' => '5', '၆' => '6', '၇' => '7', '၈' => '8', '၉' => '9', '္' => '',
        '့' => '', 'း' => '', 'ာ' => 'a', 'ါ' => 'a', 'ေ' => 'e', 'ဲ' => 'e', 'ိ' => 'i', 'ီ' => 'i', 'ို' => 'o',
        'ု' => 'u', 'ူ' => 'u', 'ေါင်' => 'aung', 'ော' => 'aw', 'ော်' => 'aw', 'ေါ' => 'aw', 'ေါ်' => 'aw', '်' => 'at',
        'က်' => 'et', 'ိုက်' => 'aik', 'ောက်' => 'auk', 'င်' => 'in', 'ိုင်' => 'aing', 'ောင်' => 'aung', 'စ်' => 'it',
        'ည်' => 'i', 'တ်' => 'at', 'ိတ်' => 'eik', 'ုတ်' => 'ok', 'ွတ်' => 'ut', 'ေတ်' => 'it', 'ဒ်' => 'd',
        'ိုဒ်' => 'ok', 'ုဒ်' => 'ait', 'န်' => 'an', 'ာန်' => 'an', 'ိန်' => 'ein', 'ုန်' => 'on', 'ွန်' => 'un',
        'ပ်' => 'at', 'ိပ်' => 'eik', 'ုပ်' => 'ok', 'ွပ်' => 'ut', 'န်ုပ်' => 'nub', 'မ်' => 'an', 'ိမ်' => 'ein',
        'ုမ်' => 'on', 'ွမ်' => 'un', 'ယ်' => 'e', 'ိုလ်' => 'ol', 'ဉ်' => 'in', 'ံ' => 'an', 'ိံ' => 'ein',
        'ုံ' => 'on', 'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
        'Ž' => 'Z', 'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
        'ž' => 'z', '°' => 0, '¹' => 1, '²' => 2, '³' => 3, '⁴' => 4, '⁵' => 5, '⁶' => 6, '⁷' => 7, '⁸' => 8, '⁹' => 9,
        '₀' => 0, '₁' => 1, '₂' => 2, '₃' => 3, '₄' => 4, '₅' => 5, '₆' => 6, '₇' => 7, '₈' => 8, '₉' => 9, 'æ' => 'ae',
        'ǽ' => 'ae', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Å' => 'AA', 'Ǻ' => 'A', 'Ă' => 'A', 'Ǎ' => 'A',
        'Æ' => 'AE', 'Ǽ' => 'AE', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'å' => 'aa', 'ǻ' => 'a', 'ă' => 'a',
        'ǎ' => 'a', 'ª' => 'a', '@' => 'at', 'Ĉ' => 'C', 'Ċ' => 'C', 'ĉ' => 'c', 'ċ' => 'c', '©' => 'c', 'Ð' => 'Dj',
        'Đ' => 'D', 'ð' => 'dj', 'đ' => 'd', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ĕ' => 'E', 'Ė' => 'E',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ƒ' => 'f', 'Ĝ' => 'G', 'Ġ' => 'G',
        'ĝ' => 'g', 'ġ' => 'g', 'Ĥ' => 'H', 'Ħ' => 'H', 'ĥ' => 'h', 'ħ' => 'h', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I',
        'Ï' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Ǐ' => 'I', 'Į' => 'I', 'Ĳ' => 'IJ', 'ì' => 'i', 'í' => 'i', 'î' => 'i',
        'ï' => 'i', 'ĩ' => 'i', 'ĭ' => 'i', 'ǐ' => 'i', 'į' => 'i', 'ĳ' => 'ij', 'Ĵ' => 'J', 'ĵ' => 'j', 'Ĺ' => 'L',
        'Ľ' => 'L', 'Ŀ' => 'L', 'ĺ' => 'l', 'ľ' => 'l', 'ŀ' => 'l', 'Ñ' => 'N', 'ñ' => 'n', 'ŉ' => 'n', 'Ò' => 'O',
        'Ô' => 'O', 'Õ' => 'O', 'Ō' => 'O', 'Ŏ' => 'O', 'Ǒ' => 'O', 'Ő' => 'O', 'Ơ' => 'O', 'Ø' => 'OE', 'Ǿ' => 'O',
        'Œ' => 'OE', 'ò' => 'o', 'ô' => 'o', 'õ' => 'o', 'ō' => 'o', 'ŏ' => 'o', 'ǒ' => 'o', 'ő' => 'o', 'ơ' => 'o',
        'ø' => 'oe', 'ǿ' => 'o', 'º' => 'o', 'œ' => 'oe', 'Ŕ' => 'R', 'Ŗ' => 'R', 'ŕ' => 'r', 'ŗ' => 'r', 'Ŝ' => 'S',
        'Ș' => 'S', 'ŝ' => 's', 'ș' => 's', 'ſ' => 's', 'Ţ' => 'T', 'Ț' => 'T', 'Ŧ' => 'T', 'Þ' => 'TH', 'ţ' => 't',
        'ț' => 't', 'ŧ' => 't', 'þ' => 'th', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ũ' => 'U', 'Ŭ' => 'U', 'Ű' => 'U',
        'Ų' => 'U', 'Ư' => 'U', 'Ǔ' => 'U', 'Ǖ' => 'U', 'Ǘ' => 'U', 'Ǚ' => 'U', 'Ǜ' => 'U', 'ù' => 'u', 'ú' => 'u',
        'û' => 'u', 'ũ' => 'u', 'ŭ' => 'u', 'ű' => 'u', 'ų' => 'u', 'ư' => 'u', 'ǔ' => 'u', 'ǖ' => 'u', 'ǘ' => 'u',
        'ǚ' => 'u', 'ǜ' => 'u', 'Ŵ' => 'W', 'ŵ' => 'w', 'Ý' => 'Y', 'Ÿ' => 'Y', 'Ŷ' => 'Y', 'ý' => 'y', 'ÿ' => 'y',
        'ŷ' => 'y', 'ა' => 'a', 'ბ' => 'b', 'გ' => 'g', 'დ' => 'd', 'ე' => 'e', 'ვ' => 'v', 'ზ' => 'z', 'თ' => 't',
        'ი' => 'i', 'კ' => 'k', 'ლ' => 'l', 'მ' => 'm', 'ნ' => 'n', 'ო' => 'o', 'პ' => 'p', 'ჟ' => 'zh', 'რ' => 'r',
        'ს' => 's', 'ტ' => 't', 'უ' => 'u', 'ფ' => 'f', 'ქ' => 'k', 'ღ' => 'gh', 'ყ' => 'q', 'შ' => 'sh', 'ჩ' => 'ch',
        'ც' => 'ts', 'ძ' => 'dz', 'წ' => 'ts', 'ჭ' => 'ch', 'ხ' => 'kh', 'ჯ' => 'j', 'ჰ' => 'h', 'ΑΥ' => 'AU',
        'Αυ' => 'Au', 'ΟΥ' => 'OU', 'Ου' => 'Ou', 'ΕΥ' => 'EU', 'Ευ' => 'Eu', 'ΕΙ' => 'I', 'Ει' => 'I', 'ΟΙ' => 'I',
        'Οι' => 'I', 'ΥΙ' => 'I', 'Υι' => 'I', 'ΑΎ' => 'AU', 'Αύ' => 'Au', 'ΟΎ' => 'OU', 'Ού' => 'Ou', 'ΕΎ' => 'EU',
        'Εύ' => 'Eu', 'ΕΊ' => 'I', 'Εί' => 'I', 'ΟΊ' => 'I', 'Οί' => 'I', 'ΎΙ' => 'I', 'Ύι' => 'I', 'ΥΊ' => 'I',
        'Υί' => 'I', 'αυ' => 'au', 'ου' => 'ou', 'ευ' => 'eu', 'ει' => 'i', 'οι' => 'i', 'υι' => 'i', 'αύ' => 'au',
        'ού' => 'ou', 'εύ' => 'eu', 'εί' => 'i', 'οί' => 'i', 'ύι' => 'i', 'υί' => 'i', 'Α' => 'A', 'Β' => 'V',
        'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'I', 'Θ' => 'Th', 'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L',
        'Μ' => 'M', 'Ν' => 'N', 'Ξ' => 'X', 'Ο' => 'O', 'Π' => 'P', 'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'I',
        'Φ' => 'F', 'Χ' => 'Ch', 'Ψ' => 'Ps', 'Ω' => 'O', 'Ά' => 'A', 'Έ' => 'E', 'Ή' => 'I', 'Ί' => 'I', 'Ό' => 'O',
        'Ύ' => 'I', 'Ϊ' => 'I', 'Ϋ' => 'I', 'ϒ' => 'I', 'α' => 'a', 'β' => 'v', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e',
        'ζ' => 'z', 'η' => 'i', 'θ' => 'th', 'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => 'x',
        'ο' => 'o', 'π' => 'p', 'ρ' => 'r', 'ς' => 's', 'σ' => 's', 'τ' => 't', 'υ' => 'i', 'φ' => 'f', 'χ' => 'ch',
        'ψ' => 'ps', 'ω' => 'o', 'ά' => 'a', 'έ' => 'e', 'ή' => 'i', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'i', 'ϊ' => 'i',
        'ϋ' => 'i', 'ΰ' => 'i', 'ώ' => 'o', 'ϐ' => 'v', 'ϑ' => 'th', 'अ' => 'a', 'आ' => 'aa', 'ए' => 'e', 'ई' => 'ii',
        'ऍ' => 'ei', 'ऎ' => 'ऎ', 'ऐ' => 'ai', 'इ' => 'i', 'ओ' => 'o', 'ऑ' => 'oi', 'ऒ' => 'oii', 'ऊ' => 'uu',
        'औ' => 'ou', 'उ' => 'u', 'ब' => 'B', 'भ' => 'Bha', 'च' => 'Ca', 'छ' => 'Chha', 'ड' => 'Da', 'ढ' => 'Dha',
        'फ' => 'Fa', 'फ़' => 'Fi', 'ग' => 'Ga', 'घ' => 'Gha', 'ग़' => 'Ghi', 'ह' => 'Ha', 'ज' => 'Ja', 'झ' => 'Jha',
        'क' => 'Ka', 'ख' => 'Kha', 'ख़' => 'Khi', 'ल' => 'L', 'ळ' => 'Li', 'ऌ' => 'Li', 'ऴ' => 'Lii', 'ॡ' => 'Lii',
        'म' => 'Ma', 'न' => 'Na', 'ङ' => 'Na', 'ञ' => 'Nia', 'ण' => 'Nae', 'ऩ' => 'Ni', 'ॐ' => 'oms', 'प' => 'Pa',
        'क़' => 'Qi', 'र' => 'Ra', 'ऋ' => 'Ri', 'ॠ' => 'Ri', 'ऱ' => 'Ri', 'स' => 'Sa', 'श' => 'Sha', 'ष' => 'Shha',
        'ट' => 'Ta', 'त' => 'Ta', 'ठ' => 'Tha', 'द' => 'Tha', 'थ' => 'Tha', 'ध' => 'Thha', 'ड़' => 'ugDha',
        'ढ़' => 'ugDhha', 'व' => 'Va', 'य' => 'Ya', 'य़' => 'Yi', 'ज़' => 'Za', 'Ā' => 'A', 'Ē' => 'E', 'Ģ' => 'G',
        'Ī' => 'I', 'Ķ' => 'K', 'Ļ' => 'L', 'Ņ' => 'N', 'Ū' => 'U', 'ā' => 'a', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i',
        'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n', 'ū' => 'u', 'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'E', 'Ł' => 'L', 'Ń' => 'N',
        'Ó' => 'O', 'Ś' => 'S', 'Ź' => 'Z', 'Ż' => 'Z', 'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n',
        'ó' => 'o', 'ś' => 's', 'ź' => 'z', 'ż' => 'z', 'Ъ' => '', 'Ь' => '', 'А' => 'A', 'Б' => 'B', 'Ц' => 'C',
        'Ч' => 'Ch', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Э' => 'E', 'Ф' => 'F', 'Г' => 'G', 'Х' => 'H', 'И' => 'I',
        'Й' => 'Y', 'Я' => 'Ya', 'Ю' => 'Yu', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P',
        'Р' => 'R', 'С' => 'S', 'Ш' => 'Sh', 'Щ' => 'Shch', 'Т' => 'T', 'У' => 'U', 'В' => 'V', 'Ы' => 'Y', 'З' => 'Z',
        'Ж' => 'Zh', 'ъ' => '', 'ь' => '', 'а' => 'a', 'б' => 'b', 'ц' => 'c', 'ч' => 'ch', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'э' => 'e', 'ф' => 'f', 'г' => 'g', 'х' => 'h', 'и' => 'i', 'й' => 'y', 'я' => 'ya', 'ю' => 'yu',
        'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'ш' => 'sh',
        'щ' => 'shch', 'т' => 't', 'у' => 'u', 'в' => 'v', 'ы' => 'y', 'з' => 'z', 'ж' => 'zh', 'Ç' => 'C', 'Ğ' => 'G',
        'İ' => 'I', 'Ş' => 'S', 'ç' => 'c', 'ğ' => 'g', 'ı' => 'i', 'ş' => 's', 'Ґ' => 'G', 'І' => 'I', 'Ї' => 'Ji',
        'Є' => 'Ye', 'ґ' => 'g', 'і' => 'i', 'ї' => 'ji', 'є' => 'ye', 'ạ' => 'a', 'ả' => 'a', 'ầ' => 'a', 'ấ' => 'a',
        'ậ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ằ' => 'a', 'ắ' => 'a', 'ặ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ẹ' => 'e',
        'ẻ' => 'e', 'ẽ' => 'e', 'ề' => 'e', 'ế' => 'e', 'ệ' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ị' => 'i', 'ỉ' => 'i',
        'ọ' => 'o', 'ỏ' => 'o', 'ồ' => 'o', 'ố' => 'o', 'ộ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ờ' => 'o', 'ớ' => 'o',
        'ợ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ụ' => 'u', 'ủ' => 'u', 'ừ' => 'u', 'ứ' => 'u', 'ự' => 'u', 'ử' => 'u',
        'ữ' => 'u', 'ỳ' => 'y', 'ỵ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'Ạ' => 'A', 'Ả' => 'A', 'Ầ' => 'A', 'Ấ' => 'A',
        'Ậ' => 'A', 'Ẩ' => 'A', 'Ẫ' => 'A', 'Ằ' => 'A', 'Ắ' => 'A', 'Ặ' => 'A', 'Ẳ' => 'A', 'Ẵ' => 'A', 'Ẹ' => 'E',
        'Ẻ' => 'E', 'Ẽ' => 'E', 'Ề' => 'E', 'Ế' => 'E', 'Ệ' => 'E', 'Ể' => 'E', 'Ễ' => 'E', 'Ị' => 'I', 'Ỉ' => 'I',
        'Ọ' => 'O', 'Ỏ' => 'O', 'Ồ' => 'O', 'Ố' => 'O', 'Ộ' => 'O', 'Ổ' => 'O', 'Ỗ' => 'O', 'Ờ' => 'O', 'Ớ' => 'O',
        'Ợ' => 'O', 'Ở' => 'O', 'Ỡ' => 'O', 'Ụ' => 'U', 'Ủ' => 'U', 'Ừ' => 'U', 'Ứ' => 'U', 'Ự' => 'U', 'Ử' => 'U',
    ];

    $string = strtr($input, $table);

    return $string;
}


/**
 * Return the substring denoted by n positive left-most characters
 *
 * @param string $string
 * @param int    $n
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function left($string, $n)
{
    $start = 0;
    if ($n < 0) {
        $start = $n;
        $n     = -$n;
    }

    return substr($string, $start, $n);
}

/**
 * Return the length of a string
 *
 * @param  string $string the input string
 * @param bool    $mb     to use or not to use mb_strlen
 *
 * @return int         the length of the input string
 * @author Rod Elias <rod@wgo.com.br>
 */
function len($string, $mb = false)
{
    return length($string, $mb);
}

/**
 * Return the length of a string
 *
 * @param  string $string the input string
 * @param bool    $mb     to use or not to use mb_strlen
 *
 * @return int         the length of the input string
 * @author Rod Elias <rod@wgo.com.br>
 */
function length($string, $mb = false)
{

    return $mb ? mb_strlen($string) : strlen($string);
}

/**
 * Returns an array with the lines. Cross-platform compatible
 *
 * @param string $string
 *
 * @return array
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function lines($string)
{
    return preg_split('/\r\n|\n|\r/', $string);
}


/**
 * Converts string first char to lowercase
 *
 * @param string $input
 *
 * @return string
 *
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function lowerCaseFirst($input)
{
    return lcfirst($input);
}


/**
 * Pads the string in the center with specified character. char may be a string or a number, defaults is a space
 *
 * @param string $string
 * @param int    $length
 * @param string $char
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function pad($string, $length, $char = ' ')
{
    return str_pad($string, $length, $char, STR_PAD_BOTH);
}


/**
 * Left pads the string
 *
 * @param string $input
 * @param string $length
 * @param string $char
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function padLeft($input, $length, $char = ' ')
{
    return str_pad($input, $length, $char, STR_PAD_LEFT);
}


/**
 * Right pads the string
 *
 * @param string $input
 * @param string $length
 * @param string $char
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function padRight($input, $length, $char = ' ')
{
    return str_pad($input, $length, $char, STR_PAD_RIGHT);
}


/**
 * Repeat the string n times
 *
 * @param string $input
 * @param int    $n
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function repeat($input, $n)
{
    return str_repeat($input, $n);
}

/**
 * Reverses a string
 *
 * @param  string $input
 *
 * @return string
 * @author Rod Elias <rod@wgo.com.br>
 */
function reverse($input)
{
    return strrev($input);
}


/**
 * Return the substring denoted by n positive right-most characters
 *
 * @param string $string
 * @param int    $n
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function right($string, $n)
{
    $start = -$n;
    if ($n < 0) {
        $start = 0;
        $n     = -$n;
    }

    return substr($string, $start, $n);
}


/**
 * Converts the text into a valid url slug. Removes accents from Latin characters
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function slugify($string)
{
    $string = latinize($string);
    $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
    $string = trim($string, '-');
    $string = strtolower($string);

    return preg_replace('~[^-\w]+~', '', $string);
}


/**
 * Check if string starts with substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function startsWith($input, $substring)
{
    return mb_strpos($input, $substring) === 0;
}

/**
 * Returns a new string with all occurrences of [string1],[string2],... removed.
 *
 * @param string $string
 * @param string $string1
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function strip($string, $string1)
{
    $arguments = func_get_args();

    return str_replace(array_slice($arguments, 1), '', $string);
}


/**
 * Strip all of the punctuation
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function stripPunctuation($string)
{
    return preg_replace('/[^\w\s]|_/', '', $string);
}

/**
 * Makes a case swapped version of the string
 * @param  string  $string the input string
 * @param  boolean $mb     to use or not to use multibyte character feature
 * @return string          case swapped version of the input string
 *
 * @author Rod Elias <rod@wgo.com.br>
 */
function swapCase($string, $mb = false)
{
    return array_reduce(str_split($string), function($carry, $item) use ($mb) {
        return $carry .= isLower($item, $mb) ? toUpper($item, $mb) : toLower($item, $mb);
    }, '');
}

/**
 * Repeat the string n times
 *
 * @param string $input
 * @param int    $n
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function times($input, $n)
{
    return repeat($input, $n);
}

/**
 * Creates a title version of the string. Capitalizes all the words and replaces some characters in the string to
 * create a nicer looking title. string_titleize is meant for creating pretty output
 *
 * @param string $string
 * @param array  $ignore
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function titleize($string, array $ignore = [])
{
    $string = preg_replace('/(?<!^)([A-Z])/', ' $1', $string);
    $string = preg_replace('/[^a-z0-9:]+/i', ' ', $string);
    $string = trim($string);

    return preg_replace_callback(
        '/([\S]+)/u',
        function ($match) use ($ignore) {
            if (in_array(strtolower($match[0]), $ignore)) {
                return $match[0];
            } else {
                return ucfirst(strtolower($match[0]));
            }
        },
        $string
    );
}

/**
 * Makes a string lowercase
 * @param  string  $input the input string
 * @param  boolean $mb    to use or not to use multibyte character feature
 * @return string         lowercased string
 *
 * @author Rod Elias <rod@wgo.com.br>
 */
function toLower($input, $mb = false)
{
    return $mb ? mb_strtolower($input, mb_detect_encoding($input, 'auto')) : strtolower($input);
}

/**
 * Join an array into a human readable sentence
 *
 * @param array  $array
 * @param string $delimiter
 * @param string $lastDelimiter
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function toSentence($array, $delimiter = ', ', $lastDelimiter = ' and ')
{
    $lastWord = array_pop($array);

    return implode($delimiter, $array) . $lastDelimiter . $lastWord;
}

/**
 * The same as string_to_sentence, but adjusts delimeters to use Serial comma)
 *
 * @param array  $array
 * @param string $delimiter
 * @param string $lastDelimiter
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function toSentenceSerial($array, $delimiter = ', ', $lastDelimiter = ' and ')
{
    $lastWord = array_pop($array);

    $lastDel = '';
    if (count($array) > 1) {
        $lastDel = trim($delimiter, ' ');
    }

    return implode($delimiter, $array) . $lastDel . $lastDelimiter . $lastWord;
}


/**
 * makes a string uppercase
 * @param  string  $input the input string
 * @param  boolean $mb    to use or not to use multibyte character feature
 * @return string         uppercased string
 *
 * @author Rod Elias <rod@wgo.com.br>
 */
function toUpper($input, $mb = false)
{
    return $mb ? mb_strtoupper($input, mb_detect_encoding($input, 'auto')) : strtoupper($input);
}


/**
 * Truncate string accounting for word placement and character count
 *
 * @param  string $input
 * @param  int    $length
 * @param  string $chars
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function truncate($input, $length, $chars = '…')
{
    if (strlen($input) > $length) {
        $splits = preg_split('/([\s\n\r]+)/u', $input, null, PREG_SPLIT_DELIM_CAPTURE);

        $splitsLength = 0;
        $splitsCount  = count($splits);

        for ($lastSplit = 0; $lastSplit < $splitsCount; ++$lastSplit) {
            $splitsLength += strlen($splits[$lastSplit]);
            if ($splitsLength > $length) {
                break;
            }
        }

        return implode(array_slice($splits, 0, $lastSplit)) . $chars;
    } else {
        return $input;
    }
}


/**
 * Converts hyphens and camel casing to underscores
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function underscore($string)
{
    return strtolower(preg_replace('/(?<!^)([A-Z])/', '_$1', str_replace('-', '_', $string)));
}


/**
 * Converts string first char to uppercase
 *
 * @param string $input
 *
 * @return string
 *
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
function upperCaseFirst($input)
{
    return ucfirst($input);
}
