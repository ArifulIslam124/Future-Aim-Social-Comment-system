=== Future Aim Social Comments ===
Contributors: Arifulislam124
Tags: facebook comments, lazy laod, fb comment, free, fb comments, future aim facebook comments
Requires at least: 3.0
Tested up to: 6.0.1
Stable tag: 1.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use Facebook Comments with lazy loading feature. Load FB comments after button click or scroll down.

== Description ==

Use Facebook comments system in your website without slowing down your website. This plugin add an extra feature to lazy load Facebook comments after clicking a button or scrolling down.

Simple plugin to add Facebook Comments to your website easily. It works perfectly with latest version of WordPress.


> #### Future Aim Social Comments system - Features
>
> - Add most popular Facebook commenting system in your website.<br />
> - **Future Aim Facebook scripts and comments only after clicking a button or scrolling down.**<br />
> - **Translation ready!**<br />
> - Adjust number of comments, color scheme, language, width, sorting order etc..<br />
> - Facebook comments increases your audience.<br />
> - Customize button label.<br />
> - **Super Light weight.**<br />
> - Completely free to use with lifetime updates.<br />
> - **Developer friendly.**<br />
> - Follows best WordPress coding standards.<br />
> - Of course, available in [GitHub](https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system)<br />

**Bug Reports**

Bug reports are always welcome. [Report here](https://arifulsh.com).

**More information**

- Follow the developer [@Twitter](https://twitter.com/ArifulIslam124)
- Other [WordPress plugins](https://profiles.wordpress.org/arifulislam124) by Ariful Islam (https://arifulsh.com)

**Other Requirements**

You need to create an APP in your Facebook developer console, and get the APP ID from [here](https://developers.facebook.com/apps/).


== Installation ==


= Installing the plugin - Simple =
1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for **Future Aim Social Comment system** and click "*Install now*"
2. Alternatively, download the plugin and upload the contents of `future-aim-social-comments.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
3. Activate the plugin
4. Go to Future Aim Social Comment system sub settings page under WordPress Settings page.
5. Give your facebook app ID.
6. Configure the plugin options with available settings.

OR, See detailed doc, [how to install a WordPress plugin](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).


= Need more help? =
Please [open a support request](http://wordpress.org/support/plugin/future-aim-social-comments).

= Missing something? =
If you would like to have an additional feature for this plugin, [let me know](https://arifulsh.com)

== Frequently Asked Questions ==

= Why this plugin? =

Normal Facebook comments plugins will drag your website speed down. This plugin won't.

= Wait, how? =

By lazy loading FB scripts and comments only when needed.

= Please explain, how this plugin lazy loads? =

Comments and scripts will be loaded only after user clicking on a "Load Comments" (of course you can customize this button text too) button, or after scrolling down. You select any of these lazy load methods.

= How can I add custom post type support? =

It's easy. You can use `fafcs_supported_post_types` filter to add custom post type support. Add following line to your theme's functions.php or in your custom plugin.


`
add_filter( 'fafcs_supported_post_types', 'mycustom_add_fafcs_cpt_support' );

function mycustom_add_fafcs_cpt_support( $post_types ) {
    // Here mycpt is your custom post type name.
    $post_types[] = 'mycpt';

    return $post_types;
}
`
= Where can I moderate the comments? =

Once you configure the plugin with APP ID, you will find the moderation page link on the plugin settings page.

== Other Notes ==

= Bug Reports =

Bug reports are always welcome. [Report here](https://arifulsh.com).


== Screenshots ==

1. **Settings** - Settings page.
2. **Lazy Load Button** - (If you set scroll method, no button will be added).
3. **Facebook Comments** - Sample of comments box.


== Changelog ==

