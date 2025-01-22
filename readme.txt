=== Disable Automatic Update Plugin Success Emails ===
Contributors: tnash
Tags:  automatic-updates
Requires at least: 6.7
Tested up to: 6.7.1
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight plugin that disables email notifications for successful plugin updates while ensuring notifications for failed and critical updates are still sent.

== Description ==

**Disable Automatic Update Plugin Success Emails** is a simple and efficient plugin designed to give you better control over WordPress automatic update email notifications for plugins. By default, WordPress sends email notifications for every update. This plugin suppresses those emails for successful plugin updates but continues to send notifications for:

- Failed plugin updates.
- Critical plugin updates.

This plugin helps reduce unnecessary email clutter while ensuring you are notified of critical issues that may require immediate attention.

### Key Features:
- Suppresses email notifications for successful plugin updates.
- Allows email notifications for failed and critical updates.
- Lightweight and optimized for performance.
- No settings page—just activate and enjoy a cleaner inbox!

== Installation ==

1. Download the plugin and extract the contents of the ZIP file.
2. Upload the `disable-automatic-update-success-emails` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **Plugins** menu in WordPress.
4. That’s it! The plugin works automatically to reduce update email clutter.

== Frequently Asked Questions ==

= Does this plugin have any settings? =
No, this plugin works automatically upon activation. There are no settings to configure.

= Will I still receive emails for other types of updates? =
Yes, you will continue to receive emails for:
- **Failed updates**: Notifications for any plugin update that fails.
- **Critical updates**: Notifications flagged as critical by WordPress.

= Can I customize which emails are sent? =
Currently, this plugin focuses on disabling success notifications for plugins. If you need further customization, feel free to extend the plugin's functionality using the provided filters.

== Changelog ==

= 1.0.0 =
- Initial release.
- Suppresses email notifications for successful plugin updates.
- Ensures email notifications for failed and critical plugin updates are still sent.

== Upgrade Notice ==

= 1.0.0 =
First release. Install to stop email notifications for successful plugin updates.