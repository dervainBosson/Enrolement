<?php

/**
 * @param string $link
 * @param string $title
 * @return string
 */
function nav_item(string $link, string $title) : string
{
    $class = 'nav-item';
    if ($link === $_SERVER['SCRIPT_NAME'])
    {
        $class .= ' active';
    }
    return <<<HTML
            <li class="$class">
                <a class="nav-link" href="$link">$title</a>
            </li>
HTML;
};

/**
 * @param $variable
 * dump the variable passed in parameter
 */
function dump($variable) : void
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}