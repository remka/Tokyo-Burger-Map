<?php

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */

function setActive($path)
{
    return Request::is($path . '*') ? ' class=active' :  '';
}

function justActive($path)
{
    return Request::is($path . '*') ? 'active' :  '';
}

function activeUri($cont, $id)
{
    $uri = Request::segment($id);
    if($cont == $uri) {
      return 'active';
    } elseif ($cont == '' && !isset($uri)) {
      return 'active';
    }
}
