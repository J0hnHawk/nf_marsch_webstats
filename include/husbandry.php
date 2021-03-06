<?php
/**
 *
 * This file is part of the "FS17 Webstats" package.
 * Copyright (C) 2017-2018 John Hawk <john.hawk@gmx.net>
 *
 * "FS17 Webstats" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "FS17 Webstats" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
if (! defined('IN_NFMWS') && ! defined('IN_INSTALL')) {
    exit();
}

$animalPlants = array(
    "Animals_sheep",
    "Animals_pig",
    "Animals_cow"
);
foreach ($animalPlants as $key => $animalPlant) {
    $animalPlants[$key] = translate($animalPlant);
}
$smarty->assign('animalPlants', $animalPlants);
$smarty->assign('animalPallets', $animalPallets);
$smarty->assign('plants', $plants);
