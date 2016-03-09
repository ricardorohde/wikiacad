<?php
/**
 * Helper which is responsible for sending emails.
 *
 * @author  Marcin Klawitter <marcin.klawitter@gmail.com>
 */
class Kohana_Mailer
{
    /**
     * Find and include phpMailer library
     */
    protected static function include_library()
    {
        require_once Kohana::find_file( 'vendor/phpmailer', 'class.phpmailer' );
    }

    /**
     * Send message.
     *
     * @param       string      Email which message is being send to
     * @param       string      Username which message is being send to
     * @param       string      Email subject
     * @param       string      Email body
     * @return      boolean
     */
    public static function send( $from, $name, $subject, $body, $to )
    {
        self::include_library();

        $mail   = new PHPMailer();
        $config = Kohana::$config->load('mailer');

        if (!isset($to) && empty($to)) {
            $to   = $config->get( 'to' );
        }

        if( $config->get( 'mode', 'mail' ) == 'smtp' ) {
            $smtp = $config->get( 'smtp' );

            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host = Arr::get( $smtp, 'host' );
            $mail->Port = Arr::get( $smtp, 'port' );
            $mail->Username = Arr::get( $smtp, 'username' );
            $mail->Password = Arr::get( $smtp, 'password' );
        }

        $mail->IsMail();
        $mail->CharSet      = "UTF-8";
        $mail->setFrom($from, $name);
        $mail->addReplyTo($from, $name);
        $mail->Subject      = $subject;

        // Prepare HTML and Alt message
        $mail->MsgHTML( $body );
        if (!isset($to) && empty($to)) {
            $mail->AddAddress( Arr::get( $to, 'mail' ) );
        }else{
            $mail->AddAddress( $to );
        }
        

        if ($mail->Send()) {
            return true;
        }else{
            return false;
        }
    }
}
