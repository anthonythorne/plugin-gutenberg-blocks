<?php
/**
 * Returns an array of used for block registration.
 */

/**
 * Array of block args for block registration.
 *
 * @see register_block_type()
 * @see WP_Block_Type::__construct() for information on accepted arguments. Below is as of WP 5.9.3
 *
 * @param array|string $args       {
 *     Optional. Array or string of arguments for registering a block type. Any arguments may be defined,
 *     however the ones described below are supported by default. Default empty array.
 *
 *     @type string        $api_version      Block API version.
 *     @type string        $title            Human-readable block type label.
 *     @type string|null   $category         Block type category classification, used in
 *                                           search interfaces to arrange block types by category.
 *     @type array|null    $parent           Setting parent lets a block require that it is only
 *                                           available when nested within the specified blocks.
 *     @type string|null   $icon             Block type icon.
 *     @type string        $description      A detailed block type description.
 *     @type array         $keywords         Additional keywords to produce block type as
 *                                           result in search interfaces.
 *     @type string|null   $textdomain       The translation textdomain.
 *     @type array         $styles           Alternative block styles.
 *     @type array         $variations       Block variations.
 *     @type array|null    $supports         Supported features.
 *     @type array|null    $example          Structured data for the block preview.
 *     @type callable|null $render_callback  Block type render callback.
 *     @type array|null    $attributes       Block type attributes property schemas.
 *     @type array         $uses_context     Context values inherited by blocks of this type.
 *     @type array|null    $provides_context Context provided by blocks of this type.
 *     @type string|null   $editor_script    Block type editor only script handle.
 *     @type string|null   $script           Block type front end and editor script handle.
 *     @type string|null   $view_script      Block type front end only script handle.
 *     @type string|null   $editor_style     Block type editor only style handle.
 *     @type string|null   $style            Block type front end and editor style handle.
 * }
 */

return [];
