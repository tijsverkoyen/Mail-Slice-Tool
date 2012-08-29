# Mail Slice Tool

This tool can be used to simply the slicing of HTML-emails.

# License

Copyright©, Tijs Verkoyen. All rights reserved.
Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this
list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice,
this list of conditions and the following disclaimer in the documentation
and/or other materials provided with the distribution.
* Neither the name of Tijs Verkoyen, nor the names of its contributors may be
used to endorse or promote products derived from this software without
specific prior written permission.

This software is provided by the copyright holders and contributors as is and
any express or implied warranties, including, but not limited to, the implied
warranties of merchantability and fitness for a particular purpose are
disclaimed. In no event shall the copyright owner or contributors be liable
for any direct, indirect, incidental, special, exemplary, or consequential
damages (including, but not limited to, procurement of substitute goods or
services; loss of use, data, or profits; or business interruption) however
caused and on any theory of liability, whether in contract, strict liability,
or tort (including negligence or otherwise) arising in any way out of the use
of this software, even if advised of the possibility of such damage.

# HOWTO

1. Open your browser and point it this this script
2. Add a GET-parameter "template" with a value of your templatefolder, eg:
	http://localhost/mailingtool?template=example1

## Requirements for a template

* Each template has to live in a seperate folder
* Each template has to have a index.htm-file with the HTML-code.
* Each template has to have a style.css-file with the CSS-code (it will be inlined).