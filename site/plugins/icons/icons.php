<?php
/**
 * Icon Plugin for kirby
 * User: thieshagedorn
 * Link: https://github.com/ThiesHagedorn/KirbyIconPlugin
 * Date: 18.06.15
 * Version: 1.0
 */

kirbytext::$pre[] = function($kirbytext, $text) {

    $text = preg_replace_callback('!(\(icon:[a-z-\s0-9]+\))!is', function($matches) use($kirbytext) {

        $toreplace = array(
            '(icon:',
            ')',
            ' lg,',
            ' 2x',
            ' 3x',
            ' 4x',
            ' 5x',
            ' fw',
            ' spin',
            ' 90',
            ' 180',
            ' 270',
            ' horizontal',
            ' vertical',
        );
        $replace = array(
            '<i class="fa fa-',
            '"></i>',
            ' fa-lg,',
            ' fa-2x',
            ' fa-3x',
            ' fa-4x',
            ' fa-5x',
            ' fa-fw',
            ' fa-spin',
            ' fa-rotate-90',
            ' fa-rotate-180',
            ' fa-rotate-270',
            ' fa-flip-horizontal',
            ' fa-flip-vertical',
        );

        return str_replace($toreplace,$replace,$matches[1]);

    }, $text);

    return $text;

};
