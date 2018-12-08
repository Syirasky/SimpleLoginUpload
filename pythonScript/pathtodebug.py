
# -*- coding: utf-8 -*-
#
#  pathtodebug.py
#  
#  Copyright 2018 User <User@DESKTOP-17Q7VC8>
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
#  
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#  
#  You should have received a copy of the GNU General Public License
#  along with this program; if not, write to the Free Software
#  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
#  MA 02110-1301, USA.
#  
#  
import sys
import os
from datetime import datetime

import numpy as np
import cv2
from imutils.perspective import four_point_transform
from imutils import contours
import math
import imutils
import time
from pandas import DataFrame
import errno
import os
from datetime import datetime
import _GetSection as gSect
from os import walk 
import sys

print ('Number of arguments:', len(sys.argv), 'arguments.')
print ('Argument List:', str(sys.argv))
strdir = sys.argv[1]
extrapath = sys.argv[2]

strname = "a.jpg"+"_"+datetime.now().strftime('%Y-%m-%d_%H-%M-%S')
mydir = os.path.join(strdir,strname)
print(mydir)
print(sys.version)
#D:\Xampp\htdocs\TestLoginSaja2\pythonScript\a.jpg_2018-11-19_16-57-04
#D:\Xampp\htdocs\TestLoginSaja2\pythonScript\a.jpg_2018-11-19_21-14-32
