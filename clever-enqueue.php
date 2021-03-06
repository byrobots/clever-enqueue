<?php
/**
 * Plugin Name: Clever Enqueue
 * Plugin URI: https://clever-enqueue.by-robots.com
 * Description: Allows for conditional enqueuing of Javascript and CSS assets in WordPress.
 * Version: 0.1
 * Requires PHP: 5.6
 * Author: By Robots
 * Author URI: https://www.by-robots.com
 * License: MIT
 *
 * @package ByRobots\CleverEnqueue
 */

// No direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the main Clever_Enqueue class.
if ( ! class_exists( 'ByRobots\CleverEnqueue\Clever_Enqueue' ) ) {
	include_once __DIR__ . '/includes/class-clever-enqueue.php';
}

/**
 * A new instance of Clever_Enqueue
 *
 * @return \ByRobots\CleverEnqueue\Clever_Enqueue
 */
function clever_enqueue() {
	return new \ByRobots\CleverEnqueue\Clever_Enqueue();
}

// Global for backwards compatibility.
$GLOBALS['clever_enqueue'] = clever_enqueue();
