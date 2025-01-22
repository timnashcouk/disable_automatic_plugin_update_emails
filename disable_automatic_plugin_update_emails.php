<?php
/**
 * Plugin Name: Disable Automatic Update Plugin Success Emails
 * Description: A lightweight plugin to disable email notifications for successful plugin updates while still sending notifications for failed and critical updates.
 * Version:     1.0.0
 * Author:      Tim Nash
 * Author URI:  https://timnash.co.uk/
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disable-update-emails
 */

/**
 * Filter to send email notifications only for failed or critical plugin updates.
 *
 * @param bool   $send    Whether to send the email. Default true.
 * @param string $type    The type of email being sent. Can be 'success', 'fail', or 'critical'.
 * @param array  $updates Array of update data for plugins that were processed.
 * 
 * @return bool True to send the email, false to suppress it.
 */
add_filter(
    'auto_plugin_update_send_email',
    function ( bool $send, string $type, array $updates ): bool {
        // Allow email only for failed or critical updates.
        if ( 'fail' === $type || 'critical' === $type ) {
            return true; // Send email for failed or critical updates.
        }

        // Disable email for all other types (e.g., 'success').
        return false;
    },
    10,
    3
);