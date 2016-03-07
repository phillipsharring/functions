<?php

function protocol()
{
    return !isset($_SERVER['HTTPS']) || ('off' == $_SERVER['HTTPS']) ? 'http://' : 'https://';
}
