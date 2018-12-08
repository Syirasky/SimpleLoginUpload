<?php
/*
 * debugpython.php
 * 
 * Copyright 2018 User <User@DESKTOP-17Q7VC8>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
		$strpypath = getcwd()."/pythonScript/pathtodebug.py";
		$strdir = getcwd()."/uploads/";
		$extrapath = "/pythonScript/";
		$newcmd = "python3 \"$strpypath\" \"$strdir\" $extrapath";
		//print_r($newcmd);
		$output = shell_exec($newcmd);
		print_r("\r\n".$output);
	
//		D:\Xampp\htdocs\TestLoginSaja2\a.jpg_2018-11-19_16-57-23	before .. then add strdir D:\Xampp\htdocs\TestLoginSaja2\pythonScript\a.jpg_2018-11-19_21-14-32
?>
