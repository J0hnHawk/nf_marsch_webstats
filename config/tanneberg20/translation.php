<?php
/**
 *
 * This file is part of the "FS17 Webstats" package.
 * Copyright (C) 2017  John Hawk <john.hawk@gmx.net>
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
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
if (! defined('IN_NFMWS')) {
    exit();
}

if (empty($lang) || ! is_array($lang)) {
    $lang = array();
}

$lang = array_merge($lang, array(
    'barley' => 'Gerste',
    'bigBagContainerFertilizer' => 'Dünger',
    'bigBagContainerSeeds' => 'Saatgut',
    'cow' => 'Kühe',
    'tertilizer' => 'Dünger',
    'liquidFertilizer' => 'Flüssigdünger',
    'liquidManure' => 'Gülle',
    'maize' => 'Körnermais',
    'manure' => 'Mist',
    'milk' => 'Milch',
    'pig' => 'Schweine',
    'rape' => 'Raps',
    'seeds' => 'Saatgut',
    'fertilizer' => 'Dünger',
    'sheep' => 'Schafe',
    'soybean' => 'Sojabohnen',
    'sunflower' => 'Sonnenblumen',
    'wheat' => 'Weizen',
    'woolPallet' => 'Wolle',
    'woodChips' => 'Hackschnitzel',
    'Tip_RS' => 'Raps oder Sonnenblumen',
    'RM_Output' => 'Diesel',
    'RS_forage' => 'Eiweisfuttermittel',
    'DS_digestate' => 'Gärreste',
    'digestate' => 'Gärreste',
    'Weinfaesser' => 'Weinfässer',
    'weinPallet' => 'Weinfässer',
    'grain' => 'Getreide',
    'Traubensaft' => 'Traubensaft',
    'traubensaft' => 'Traubensaft',
    'slow_soja_water' => 'Wasser',
    'Trauben' => 'Weintrauben',
    'grape' => 'Weintrauben',
    'grass_windrowdryGrass_windrow' => 'Gras oder Heu',
    'water' => 'Wasser',
    'cm_inputWaste' => 'Abfall',
    'fuel' => 'Diesel',
    'cm_outputCompost' => 'Kompost',
    'Mist' => 'Mist',
    'Duenger' => 'Dünger',
    'Holz' => 'Holzstämme',
    'boardwood' => 'Bretter',
    'slow_soja_soja' => 'Sojabohnen',
    'slow_soja_fuel' => 'Diesel',
    'slow_soja_pig' => 'Schweinefutter',
    'slow_soja_liquid' => 'Gülle',
    'slow_soja_milk' => 'Milch',
    'boardPallet' => 'Bretter',
    'fertilizerTank' => 'Flüssigdünger',
    'dryGrass_windrow' => 'Heu',
    'baleHay240' => 'Heu',
    'roundbaleHay_w112_d130' => 'Heu'

));

$lang = array_merge($lang, array(
    'Storage_storage1' => 'Hofsilo',
    'Animals_sheep' => 'Schafweide',
    'FabrikScript_compostMaster2k17' => 'compostMaster2k17',
    'FabrikScript_Fertilizer' => 'Düngerproduktion',
    'FabrikScript_liquidFertilizer' => 'Flüssigdüngerproduktion',
    'FabrikScript_Raffinerie' => 'Raffinierie',
    'FabrikScript_Seeds' => 'Saatgutproduktion',
    'FabrikScript_Weinberg' => 'Weinberg',
    'FabrikScript_Winzerei' => 'Winzerei',
    'FabrikScript_Fabrik' => 'Sägewerk',
    'FabrikScript_SojamilchProduktion' => 'Sojamich Produktion'

));