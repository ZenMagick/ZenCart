<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('includes/classes/support')
    ->exclude('zc_install')
    ->exclude('zenmagick')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->fixers(array('line_feed', 'eof_ending', 'php_closing_tag'))
    ->finder($finder)
    ;
