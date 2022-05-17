<?php

use Francerz\Console\BackColors;
use Francerz\Console\ForeColors;

require_once __DIR__ . '/vendor/autoload.php';

echo 'FOREGROUND COLORS: ';
echo ForeColors::DEFAULT . 'DEFAULT';
echo ForeColors::BLACK . BackColors::WHITE . 'BLACK' . BackColors::DEFAULT;
echo ForeColors::DARK_GRAY . 'DARK GRAY';
echo ForeColors::LIGHT_GRAY . 'LIGHT GRAY';
echo ForeColors::WHITE . 'WHITE';
echo ForeColors::RED . 'RED';
echo ForeColors::YELLOW . 'YELLOW';
echo ForeColors::GREEN . 'GREEN';
echo ForeColors::CYAN . 'CYAN';
echo ForeColors::BLUE . 'BLUE';
echo ForeColors::MAGENTA . 'MAGENTA';
echo ForeColors::LIGHT_RED . 'LIGHT RED';
echo ForeColors::LIGHT_YELLOW . 'LIGHT YELLOW';
echo ForeColors::LIGHT_GREEN . 'LIGHT GREEN';
echo ForeColors::LIGHT_CYAN . 'LIGHT CYAN';
echo ForeColors::LIGHT_BLUE . 'LIGHT BLUE';
echo ForeColors::LIGHT_MAGENTA . 'LIGHT MAGENTA';
echo ForeColors::DEFAULT;
echo PHP_EOL;
echo "BACKGROUND COLORS: ";
echo BackColors::DEFAULT . 'DEFAULT';
echo BackColors::WHITE . ForeColors::BLACK . 'WHITE';
echo BackColors::LIGHT_GRAY . 'LIGHT GRAY';
echo BackColors::RED . 'RED';
echo BackColors::YELLOW . 'YELLOW';
echo BackColors::GREEN . 'GREEN';
echo BackColors::CYAN . 'CYAN';
echo BackColors::BLACK . 'BLUE';
echo BackColors::MAGENTA . 'MAGENTA';
echo BackColors::LIGHT_RED . 'LIGHT RED';
echo BackColors::LIGHT_YELLOW . 'LIGHT YELLOW';
echo BackColors::LIGHT_GREEN . 'LIGHT GREEN';
echo BackColors::LIGHT_CYAN . 'LIGHT CYAN';
echo BackColors::LIGHT_BLUE . 'LIGHT BLUE';
echo BackColors::LIGHT_MAGENTA . 'LIGHT MAGENTA';
echo PHP_EOL;
