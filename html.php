<?php

/*

	diagram-in-code https://github.com/paijp/diagram-in-code
	
	Copyright (c) 2023 paijp

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>.

*/

list($body) = explode("*/", stream_get_contents(STDIN), 2);
@list(, $s) = explode("\n", $body, 2);

print $s;
