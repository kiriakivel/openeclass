<?php


/**
 * generate CSRF token
 * function adopted from www.webtipblog.com/implementing-csrf-protection-in-php/
 * 
 * @author  Joe Sexton <joe@webtipblog.com>
 * @param   string $formName
 * @return  string  
 */
function generateToken( $formName ) {
    $secretKey = 'jhdfkjv!@212';
    if ( !session_id() ) {
        session_start();
    }
    $sessionId = session_id();

    return sha1( $formName.$sessionId.$secretKey );
}

/**
 * check CSRF token
 * 
 * @author  Joe Sexton <joe@webtipblog.com>
 * @param   string $token
 * @param   string $formName
 * @return  boolean  
 */
function checkToken( $token, $formName ) {
    return $token === generateToken( $formName );
}

?>
