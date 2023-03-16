## Cooach Admin Plugin

The Cooach Admin Plugin is a tool designed to simplify the creation of admin pages for other plugins developed for the Cooach platform. This plugin offers a solution that can help save time and effort when creating admin pages.

### Usage

To use the Cooach Admin Plugin, follow these simple steps:

1. Create a new file in your plugin directory (for example, `admin.php`).
2. In this file, define a function that calls the `add_submenu_page()` function with the required arguments to create your admin page. You can customize the arguments to suit your specific needs.
3. Write a callback function that will be called when your admin page is loaded. This function will generate the contents of your admin page.
4. Add an action to the `cooach_admin_register_submenu` hook that calls your function with the `add_submenu_page()` function.
5. That's it! Your admin page will now be available in the Cooach platform.

By using the Cooach Admin Plugin, you can create admin pages for your Cooach plugins with a little less coding effort.
