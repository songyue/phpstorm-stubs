<?php

// Start of gettext v.

/**
 * Sets the default domain
 * @link https://php.net/manual/zh/function.textdomain.php
 * @param string $text_domain <p>
 * The new message domain, or <b>NULL</b> to get the current setting without
 * changing it
 * </p>
 * @return string If successful, this function returns the current message
 * domain, after possibly changing it.
 * @since 4.0
 * @since 5.0
 */
function textdomain ($text_domain) {}

/**
 * Lookup a message in the current domain
 * @link https://php.net/manual/zh/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 * @since 4.0
 * @since 5.0
 */
function gettext ($message) {}

/**
 * Lookup a message in the current domain
 * @link https://php.net/manual/zh/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 * @since 4.0
 * @since 5.0
 */
function _ ($message) {}

/**
 * Override the current domain
 * @link https://php.net/manual/zh/function.dgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function dgettext ($domain, $message) {}

/**
 * Overrides the domain for a single lookup
 * @link https://php.net/manual/zh/function.dcgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @param int $category <p>
 * The category
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function dcgettext ($domain, $message, $category) {}

/**
 * Sets the path for a domain
 * @link https://php.net/manual/zh/function.bindtextdomain.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $directory <p>
 * The directory path
 * </p>
 * @return string The full pathname for the <i>domain</i> currently being set.
 * @since 4.0
 * @since 5.0
 */
function bindtextdomain ($domain, $directory) {}

/**
 * Plural version of gettext
 * @link https://php.net/manual/zh/function.ngettext.php
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string correct plural form of message identified by
 * <i>msgid1</i> and <i>msgid2</i>
 * for count <i>n</i>.
 * @since 4.2
 * @since 5.0
 */
function ngettext ($msgid1, $msgid2, $n) {}

/**
 * Plural version of dgettext
 * @link https://php.net/manual/zh/function.dngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function dngettext ($domain, $msgid1, $msgid2, $n) {}

/**
 * Plural version of dcgettext
 * @link https://php.net/manual/zh/function.dcngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function dcngettext ($domain, $msgid1, $msgid2, $n, $category) {}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 * @link https://php.net/manual/zh/function.bind-textdomain-codeset.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $codeset <p>
 * The code set
 * </p>
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function bind_textdomain_codeset ($domain, $codeset) {}

// End of gettext v.
?>
