<?php
/**
 * This file defines compatibility aliases.
 *
 * @license MIT
 * @package krinkle/intuition
 */

use Krinkle\Intuition\Intuition;
use Krinkle\Intuition\Util;

// Kept for backwards-compatibility with older tools not yet using Composer.
// .. rename from TsIntuition to Intuition in v0.1.3.
class_alias( Intuition::class, 'TsIntuition' );
class_alias( Util::class, 'TsIntuitionUtil' );
// .. rename from Intuition to Krinkle\Intuition\Intuition in v1.0.0.
class_alias( Intuition::class, 'Intuition' );
class_alias( Util::class, 'IntuitionUtil' );
