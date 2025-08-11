<?php

namespace Truebeep;

/**
 * Ajax class
 */
class Ajax
{
    /**
     * Initialize ajax class
     */
    public function __construct()
    {
        add_action('wp_ajax_get_loyalty_data', [$this, 'handle_get_loyalty_data']);
    }

    /**
     * Handle get loyalty data AJAX request
     */
    public function handle_get_loyalty_data()
    {
        $loyalty_panel = new Frontend\LoyaltyPanel();
        $loyalty_panel->ajax_get_loyalty_data();
    }
}
