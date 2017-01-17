<?php
/* set arrays for select options */

function ptsc_shortcodes_list(){
    $ptsc_icons = array ( 'icon-glass' => 'icon-glass', 'icon-music' => 'icon-music', 'icon-search' => 'icon-search', 'icon-envelope' => 'icon-envelope', 'icon-heart' => 'icon-heart', 'icon-star' => 'icon-star', 'icon-star-empty' => 'icon-star-empty', 'icon-user' => 'icon-user', 'icon-film' => 'icon-film', 'icon-th-large' => 'icon-th-large', 'icon-th' => 'icon-th', 'icon-th-list' => 'icon-th-list', 'icon-ok' => 'icon-ok', 'icon-remove' => 'icon-remove', 'icon-zoom-in' => 'icon-zoom-in', 'icon-zoom-out' => 'icon-zoom-out', 'icon-off' => 'icon-off', 'icon-signal' => 'icon-signal', 'icon-cog' => 'icon-cog', 'icon-trash' => 'icon-trash', 'icon-home' => 'icon-home', 'icon-file' => 'icon-file', 'icon-time' => 'icon-time', 'icon-road' => 'icon-road', 'icon-download-alt' => 'icon-download-alt', 'icon-download' => 'icon-download', 'icon-upload' => 'icon-upload', 'icon-inbox' => 'icon-inbox', 'icon-play-circle' => 'icon-play-circle', 'icon-rotate-right' => 'icon-rotate-right', 'icon-refresh' => 'icon-refresh', 'icon-list-alt' => 'icon-list-alt', 'icon-lock' => 'icon-lock', 'icon-flag' => 'icon-flag', 'icon-headphones' => 'icon-headphones', 'icon-volume-off' => 'icon-volume-off', 'icon-volume-down' => 'icon-volume-down', 'icon-volume-up' => 'icon-volume-up', 'icon-qrcode' => 'icon-qrcode', 'icon-barcode' => 'icon-barcode', 'icon-tag' => 'icon-tag', 'icon-tags' => 'icon-tags', 'icon-book' => 'icon-book', 'icon-bookmark' => 'icon-bookmark', 'icon-print' => 'icon-print', 'icon-camera' => 'icon-camera', 'icon-font' => 'icon-font', 'icon-bold' => 'icon-bold', 'icon-italic' => 'icon-italic', 'icon-text-height' => 'icon-text-height', 'icon-text-width' => 'icon-text-width', 'icon-align-left' => 'icon-align-left', 'icon-align-center' => 'icon-align-center', 'icon-align-right' => 'icon-align-right', 'icon-align-justify' => 'icon-align-justify', 'icon-list' => 'icon-list', 'icon-indent-left' => 'icon-indent-left', 'icon-indent-right' => 'icon-indent-right', 'icon-facetime-video' => 'icon-facetime-video', 'icon-picture' => 'icon-picture', 'icon-pencil' => 'icon-pencil', 'icon-map-marker' => 'icon-map-marker', 'icon-adjust' => 'icon-adjust', 'icon-tint' => 'icon-tint', 'icon-edit' => 'icon-edit', 'icon-share' => 'icon-share', 'icon-check' => 'icon-check', 'icon-move' => 'icon-move', 'icon-step-backward' => 'icon-step-backward', 'icon-fast-backward' => 'icon-fast-backward', 'icon-backward' => 'icon-backward', 'icon-play' => 'icon-play', 'icon-pause' => 'icon-pause', 'icon-stop' => 'icon-stop', 'icon-forward' => 'icon-forward', 'icon-fast-forward' => 'icon-fast-forward', 'icon-step-forward' => 'icon-step-forward', 'icon-eject' => 'icon-eject', 'icon-chevron-left' => 'icon-chevron-left', 'icon-chevron-right' => 'icon-chevron-right', 'icon-plus-sign' => 'icon-plus-sign', 'icon-minus-sign' => 'icon-minus-sign', 'icon-remove-sign' => 'icon-remove-sign', 'icon-ok-sign' => 'icon-ok-sign', 'icon-question-sign' => 'icon-question-sign', 'icon-info-sign' => 'icon-info-sign', 'icon-screenshot' => 'icon-screenshot', 'icon-remove-circle' => 'icon-remove-circle', 'icon-ok-circle' => 'icon-ok-circle', 'icon-ban-circle' => 'icon-ban-circle', 'icon-arrow-left' => 'icon-arrow-left', 'icon-arrow-right' => 'icon-arrow-right', 'icon-arrow-up' => 'icon-arrow-up', 'icon-arrow-down' => 'icon-arrow-down', 'icon-mail-forward' => 'icon-mail-forward', 'icon-resize-full' => 'icon-resize-full', 'icon-resize-small' => 'icon-resize-small', 'icon-plus' => 'icon-plus', 'icon-minus' => 'icon-minus', 'icon-asterisk' => 'icon-asterisk', 'icon-exclamation-sign' => 'icon-exclamation-sign', 'icon-gift' => 'icon-gift', 'icon-leaf' => 'icon-leaf', 'icon-fire' => 'icon-fire', 'icon-eye-open' => 'icon-eye-open', 'icon-eye-close' => 'icon-eye-close', 'icon-warning-sign' => 'icon-warning-sign', 'icon-plane' => 'icon-plane', 'icon-calendar' => 'icon-calendar', 'icon-random' => 'icon-random', 'icon-comment' => 'icon-comment', 'icon-magnet' => 'icon-magnet', 'icon-chevron-up' => 'icon-chevron-up', 'icon-chevron-down' => 'icon-chevron-down', 'icon-retweet' => 'icon-retweet', 'icon-shopping-cart' => 'icon-shopping-cart', 'icon-folder-close' => 'icon-folder-close', 'icon-folder-open' => 'icon-folder-open', 'icon-resize-vertical' => 'icon-resize-vertical', 'icon-resize-horizontal' => 'icon-resize-horizontal', 'icon-bar-chart' => 'icon-bar-chart', 'icon-camera-retro' => 'icon-camera-retro', 'icon-key' => 'icon-key', 'icon-cogs' => 'icon-cogs', 'icon-comments' => 'icon-comments', 'icon-thumbs-up' => 'icon-thumbs-up', 'icon-thumbs-down' => 'icon-thumbs-down', 'icon-star-half' => 'icon-star-half', 'icon-heart-empty' => 'icon-heart-empty', 'icon-signout' => 'icon-signout', 'icon-pushpin' => 'icon-pushpin', 'icon-external-link' => 'icon-external-link', 'icon-signin' => 'icon-signin', 'icon-trophy' => 'icon-trophy', 'icon-github-sign' => 'icon-github-sign', 'icon-upload-alt' => 'icon-upload-alt', 'icon-lemon' => 'icon-lemon', 'icon-phone' => 'icon-phone', 'icon-check-empty' => 'icon-check-empty', 'icon-bookmark-empty' => 'icon-bookmark-empty', 'icon-phone-sign' => 'icon-phone-sign', 'icon-github' => 'icon-github', 'icon-unlock' => 'icon-unlock', 'icon-credit-card' => 'icon-credit-card', 'icon-rss' => 'icon-rss', 'icon-hdd' => 'icon-hdd', 'icon-bullhorn' => 'icon-bullhorn', 'icon-bell' => 'icon-bell', 'icon-certificate' => 'icon-certificate', 'icon-hand-right' => 'icon-hand-right', 'icon-hand-left' => 'icon-hand-left', 'icon-hand-up' => 'icon-hand-up', 'icon-hand-down' => 'icon-hand-down', 'icon-circle-arrow-left' => 'icon-circle-arrow-left', 'icon-circle-arrow-right' => 'icon-circle-arrow-right', 'icon-circle-arrow-up' => 'icon-circle-arrow-up', 'icon-circle-arrow-down' => 'icon-circle-arrow-down', 'icon-globe' => 'icon-globe', 'icon-wrench' => 'icon-wrench', 'icon-tasks' => 'icon-tasks', 'icon-filter' => 'icon-filter', 'icon-briefcase' => 'icon-briefcase', 'icon-fullscreen' => 'icon-fullscreen', 'icon-group' => 'icon-group', 'icon-link' => 'icon-link', 'icon-cloud' => 'icon-cloud', 'icon-beaker' => 'icon-beaker', 'icon-cut' => 'icon-cut', 'icon-copy' => 'icon-copy', 'icon-paper-clip' => 'icon-paper-clip', 'icon-save' => 'icon-save', 'icon-sign-blank' => 'icon-sign-blank', 'icon-reorder' => 'icon-reorder', 'icon-list-ul' => 'icon-list-ul', 'icon-list-ol' => 'icon-list-ol', 'icon-strikethrough' => 'icon-strikethrough', 'icon-underline' => 'icon-underline', 'icon-table' => 'icon-table', 'icon-magic' => 'icon-magic', 'icon-truck' => 'icon-truck', 'icon-money' => 'icon-money', 'icon-caret-down' => 'icon-caret-down', 'icon-caret-up' => 'icon-caret-up', 'icon-caret-left' => 'icon-caret-left', 'icon-caret-right' => 'icon-caret-right', 'icon-columns' => 'icon-columns', 'icon-sort' => 'icon-sort', 'icon-sort-down' => 'icon-sort-down', 'icon-sort-up' => 'icon-sort-up', 'icon-envelope-alt' => 'icon-envelope-alt', 'icon-rotate-left' => 'icon-rotate-left', 'icon-legal' => 'icon-legal', 'icon-dashboard' => 'icon-dashboard', 'icon-comment-alt' => 'icon-comment-alt', 'icon-comments-alt' => 'icon-comments-alt', 'icon-bolt' => 'icon-bolt', 'icon-sitemap' => 'icon-sitemap', 'icon-umbrella' => 'icon-umbrella', 'icon-paste' => 'icon-paste', 'icon-lightbulb' => 'icon-lightbulb', 'icon-exchange' => 'icon-exchange', 'icon-cloud-download' => 'icon-cloud-download', 'icon-cloud-upload' => 'icon-cloud-upload', 'icon-user-md' => 'icon-user-md', 'icon-stethoscope' => 'icon-stethoscope', 'icon-suitcase' => 'icon-suitcase', 'icon-bell-alt' => 'icon-bell-alt', 'icon-coffee' => 'icon-coffee', 'icon-food' => 'icon-food', 'icon-file-alt' => 'icon-file-alt', 'icon-building' => 'icon-building', 'icon-hospital' => 'icon-hospital', 'icon-ambulance' => 'icon-ambulance', 'icon-medkit' => 'icon-medkit', 'icon-fighter-jet' => 'icon-fighter-jet', 'icon-beer' => 'icon-beer', 'icon-h-sign' => 'icon-h-sign', 'icon-plus-sign-alt' => 'icon-plus-sign-alt', 'icon-double-angle-left' => 'icon-double-angle-left', 'icon-double-angle-right' => 'icon-double-angle-right', 'icon-double-angle-up' => 'icon-double-angle-up', 'icon-double-angle-down' => 'icon-double-angle-down', 'icon-angle-left' => 'icon-angle-left', 'icon-angle-right' => 'icon-angle-right', 'icon-angle-up' => 'icon-angle-up', 'icon-angle-down' => 'icon-angle-down', 'icon-desktop' => 'icon-desktop', 'icon-laptop' => 'icon-laptop', 'icon-tablet' => 'icon-tablet', 'icon-mobile-phone' => 'icon-mobile-phone', 'icon-circle-blank' => 'icon-circle-blank', 'icon-quote-left' => 'icon-quote-left', 'icon-quote-right' => 'icon-quote-right', 'icon-spinner' => 'icon-spinner', 'icon-circle' => 'icon-circle', 'icon-mail-reply' => 'icon-mail-reply', 'icon-folder-close-alt' => 'icon-folder-close-alt', 'icon-folder-open-alt' => 'icon-folder-open-alt', 'icon-expand-alt' => 'icon-expand-alt', 'icon-collapse-alt' => 'icon-collapse-alt', 'icon-smile' => 'icon-smile', 'icon-frown' => 'icon-frown', 'icon-meh' => 'icon-meh', 'icon-gamepad' => 'icon-gamepad', 'icon-keyboard' => 'icon-keyboard', 'icon-flag-alt' => 'icon-flag-alt', 'icon-flag-checkered' => 'icon-flag-checkered', 'icon-terminal' => 'icon-terminal', 'icon-code' => 'icon-code', 'icon-reply-all' => 'icon-reply-all', 'icon-mail-reply-all' => 'icon-mail-reply-all', 'icon-star-half-empty' => 'icon-star-half-empty', 'icon-location-arrow' => 'icon-location-arrow', 'icon-crop' => 'icon-crop', 'icon-code-fork' => 'icon-code-fork', 'icon-unlink' => 'icon-unlink', 'icon-question' => 'icon-question', 'icon-info' => 'icon-info', 'icon-exclamation' => 'icon-exclamation', 'icon-superscript' => 'icon-superscript', 'icon-subscript' => 'icon-subscript', 'icon-eraser' => 'icon-eraser', 'icon-puzzle-piece' => 'icon-puzzle-piece', 'icon-microphone' => 'icon-microphone', 'icon-microphone-off' => 'icon-microphone-off', 'icon-shield' => 'icon-shield', 'icon-calendar-empty' => 'icon-calendar-empty', 'icon-fire-extinguisher' => 'icon-fire-extinguisher', 'icon-rocket' => 'icon-rocket', 'icon-maxcdn' => 'icon-maxcdn', 'icon-chevron-sign-left' => 'icon-chevron-sign-left', 'icon-chevron-sign-right' => 'icon-chevron-sign-right', 'icon-chevron-sign-up' => 'icon-chevron-sign-up', 'icon-chevron-sign-down' => 'icon-chevron-sign-down', 'icon-html5' => 'icon-html5', 'icon-css3' => 'icon-css3', 'icon-anchor' => 'icon-anchor', 'icon-unlock-alt' => 'icon-unlock-alt', 'icon-bullseye' => 'icon-bullseye', 'icon-ellipsis-horizontal' => 'icon-ellipsis-horizontal', 'icon-ellipsis-vertical' => 'icon-ellipsis-vertical', 'icon-rss-sign' => 'icon-rss-sign', 'icon-play-sign' => 'icon-play-sign', 'icon-ticket' => 'icon-ticket', 'icon-minus-sign-alt' => 'icon-minus-sign-alt', 'icon-check-minus' => 'icon-check-minus', 'icon-level-up' => 'icon-level-up', 'icon-level-down' => 'icon-level-down', 'icon-check-sign' => 'icon-check-sign', 'icon-edit-sign' => 'icon-edit-sign', 'icon-external-link-sign' => 'icon-external-link-sign', 'icon-share-sign' => 'icon-share-sign', );

    $pt_shortcodes = array(
        /*'example' => array(
            'label' => 'example',
            'has_content' => true,
            'params' => array(
                'text' => array(
                    'type' => 'text',
                    'label' => 'Text',
                    'desc' => 'Select the color for dropcap'
                ),
                'color' => array(
                    'type' => 'colorpicker',
                    'label' => 'Color',
                    'desc' => 'Select the color for dropcap'
                ),
                'select' => array(
                    'type' => 'select',
                    'label' => 'Select',
                    'desc' => 'Select the color for dropcap',
                    'options' => array(
                        'gray' => 'Gray',
                        'color' => 'Curent Main Color'
                    ),
                ),
                'textarea' => array(
                    'type' => 'textarea',
                    'label' => 'Textarea',
                    'desc' => 'Select the color for dropcap'
                ),
                'checkbox' => array(
                    'type' => 'checkbox',
                    'label' => 'Checkbox',
                    'desc' => 'Select the color for dropcap'
                ),
                'multicheckbox' => array(
                    'type' => 'checkbox-multi',
                    'label' => 'Checkbox multi',
                    'desc' => 'Select the color for dropcap',
                    'options' => array(
                        'gray' => 'Gray',
                        'color' => 'Curent Main Color'
                    ),
                ),
                'multiselect' => array(
                    'type' => 'select-multi',
                    'label' => 'Select multi',
                    'desc' => 'Select the color for dropcap',
                    'options' => array(
                        'gray' => 'Gray',
                        'color' => 'Curent Main Color',
                        'asd' => 'Curent Main Color',
                        'asda' => 'Curent Main Color'
                    ),
                ),
            ),
        ),*/
        'clear' => array(
            'label' => 'Clearfix div',
            'has_content' => false,
            'std' => '',
            ),

        

        'dropcap' => array(
            'label' => 'Dropcap',
            'has_content' => true,
            'params' => array(
                'content' => array(
                    'type' => 'textarea',
                    'label' => 'Content',
                    'std' => '',
                    ),
                'color' => array(
                    'type' => 'select',
                    'label' => 'Color',
                    'desc' => 'Select color for dropcap letter',
                    'options' => array(
                        'gray' => 'Gray',
                        'color' => 'Curent Main Color'
                    ),
                    'std' => '',
                ),
            )
        ),

        'accordion' => array(
            'label' => 'Accordion',
            'has_content' => true,
            'wrapper' => 'accordionwrap',
            'params' => array(
                'title' => array(
                    'type' => 'text',
                    'label' => 'Title',
                    'desc' => 'Set title',
                    'std' => '',
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => 'Content',
                    'std' => '',
                ),
            )
        ),

        'button' => array(
            'label' => 'Button',
            'has_content' => true,
            'params' => array(
                'url' => array(
                    'type' => 'text',
                    'label' => 'Url',
                    'desc' => 'Set URL',
                    'std' => '',
                ),
                'color' => array(
                    'type' => 'select',
                    'label' => 'Color',
                    'desc' => 'Select the color for button',
                    'options' => array(
                        'gray' => 'Gray',
                        'light' => 'Light',
                        'color' => 'Curent Main Color'
                    ),
                    'std' => '',
                ),
                'customcolor' => array(
                    'type' => 'colorpicker',
                    'label' => 'Custom Color',
                    'desc' => 'Select the custom color for button (ignores previous setting)',
                    'std' => '',
                ),
                'iconcolor' => array(
                    'type' => 'select',
                    'label' => 'Icon Color',
                    'desc' => 'Select the color for icon in the button',
                    'options' => array(
                        'white' => 'White',
                        'dark' => 'Dark'
                    ),
                    'std' => '',
                ),
                'icon' => array(
                    'type' => 'select',
                    'label' => 'Icon',
                    'desc' => 'Select the icon for button',
                    'options' => $ptsc_icons,
                    'std' => '',
                ),
                'target' => array(
                    'type' => 'select',
                    'label' => 'Target',
                    'desc' => 'Select the target of a button link',
                    'options' => array(
                        '_top' => 'Top',
                        '_self' => 'Self',
                        '_blank' => 'Blank',
                        '_parent' => 'Parent'
                    ),
                    'std' => '',
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => 'Content',
                    'std' => '',
                ),
                'custom_class' => array(
                    'type' => 'text',
                    'label' => 'Custom class',
                    'std' => '',
                )
            )
        ),
        'tab' => array(
            'label' => 'Tabs',
            'has_content' => true,
            'wrapper' => 'tabgroup',
            'params' => array(
                'title' => array(
                    'type' => 'text',
                    'label' => 'Title',
                    'desc' => 'Set title',
                    'std' => '',
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => 'Content',
                    'std' => '',
                ),
            )
        ),

        'toggle' => array(
            'label' => 'Toggle',
            'has_content' => true,
            'params' => array(
                'open' => array(
                    'type' => 'select',
                    'label' => 'Open/closed',
                    'desc' => 'Set type',
                    'options' => array(
                        'no' => 'Closed',
                        'yes' => 'Open',
                    ),
                    'std' => '',
                ),
                'title' => array(
                    'type' => 'text',
                    'label' => 'Title',
                    'std' => '',
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => 'Content',
                    'std' => '',
                ),
            )
        )
    ); //eof main array

    return apply_filters( 'ptsc_shortcodes', $pt_shortcodes );
}
ptsc_shortcodes_list();
?>