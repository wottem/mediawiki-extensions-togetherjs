<?php
/*
 * This file is part of the MediaWiki extension TowTruck.
 *
 * TowTruck is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * TowTruck is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with TowTruck.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup extensions
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @author C. Scott Ananian <cscott@cscott.net>
 * @copyright Copyright © 2013, Mark Holmquist and C. Scott Ananian
 */

class TowTruckHooks {

	// Add the towtruck scripts to the edit page so we can do cool things
	static function editGetModules( $editPage, $output ) {
		$output->addModules( array( 'ext.towTruck' ) );

		return true;
	}
	// Add the towtruck scripts to the article page so we can do cool things
	static function articleGetModules( $article ) {
		$output = $article->getContext()->getOutput();
		$output->addModules( array( 'ext.towTruck' ) );

		return true;
	}
}
