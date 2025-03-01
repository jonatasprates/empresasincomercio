<?php

/**
 * vCard.class
 *
 * This (will) contain functions needed to vCards.
 *
 * http://www.imc.org/pdi/vcard-21.txt
 *
 * @copyright &copy; 2003-2006 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: VCard.class.php 10633 2006-02-03 22:27:56Z jervfors $
 * @package squirrelmail
 * @since 1.3.2
 */

/**
 * Unimplemented class that should handle vcards
 * Don't use it unless it is marked as implemented.
 * @package squirrelmail
 */
class VCard {
    /**
     * Create vcard from information stored in array
     * @todo implement vcard creation from array
     * @param array $value_array
     * @return string
     */
    function create_vcard ($value_array) {
        return $vcard;
    }

    /**
     * Read vcard and convert it to array
     * @todo implement vcard parsing
     * @param string $vcard
     * @return array
     */
    function parse_vcard ($vcard) {
        return $array;
    }
}

?>