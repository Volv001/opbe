<?php
/**
 *  OPBE
 *  Copyright (C) 2013  Jstar
 *
 * This file is part of OPBE.
 * 
 * OPBE is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPBE is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with OPBE.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OPBE
 * @author Jstar <frascafresca@gmail.com>
 * @copyright 2013 Jstar <frascafresca@gmail.com>
 * @license http://www.gnu.org/licenses/ GNU AGPLv3 License
 * @version alpha(2013-2-4)
 * @link https://github.com/jstar88/opbe
 */
require ("../RunnableTest.php");
class Shuffle extends RunnableTest
{
    public function getAttachers()
    {
        return new Fleet(array(
            $this->getFighters(206, 50),
            $this->getFighters(207, 50),
            $this->getFighters(204, 150)));
    }
    public function getDefenders()
    {
        return new Fleet(array(
            $this->getFighters(210, 150),
            $this->getFighters(215, 50),
            $this->getFighters(207, 20)));
    }
}
new Shuffle();

?>