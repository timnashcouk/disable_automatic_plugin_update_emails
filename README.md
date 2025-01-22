# Disable Automatic Update Plugin Success Emails

A lightweight plugin that disables email notifications for successful plugin updates while ensuring notifications for failed and critical updates are still sent.

## Description

**Disable Automatic Update Plugin Success Emails** is a simple and efficient plugin designed to give you better control over WordPress automatic update email notifications for plugins. By default, WordPress sends email notifications for every update. This plugin suppresses those emails for successful plugin updates but continues to send notifications for:

- Failed plugin updates.
- Critical plugin updates.

### Key Features:
- Suppresses email notifications for successful plugin updates.
- Allows email notifications for failed and critical updates.
- No settings page—just activate and enjoy a cleaner inbox!

### Why?
Sending an email on success serves no real purpose, we only really want to know when something needs our attention. That said it works best combined with some sort of activity log.

---

## Installation

1. Clone or download the plugin repository.
2. Upload the `disable-automatic-update-success-emails` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin from the **Plugins** menu in WordPress.
4. That's it! The plugin works automatically to reduce update email clutter.

---

## FAQ

### Does this plugin have any settings?
No, this plugin works automatically upon activation. There are no settings to configure.

### Will I still receive emails for other types of updates?
Yes, you will continue to receive emails for:
- **Failed updates**: Notifications for any plugin update that fails.
- **Critical updates**: Notifications flagged as critical by WordPress.
You will also continue to recieve other update emails for themes/core if you have them configured.
---

## Changelog

### 1.0.0
- Initial release.
- Suppresses email notifications for successful plugin updates.
- Ensures email notifications for failed and critical plugin updates are still sent.

---

## Support

If you encounter any issues or have feedback, please open an issue in this repository.

---

## License

This plugin is licensed under the [GPL-2.0-or-later](https://www.gnu.org/licenses/gpl-2.0.html).