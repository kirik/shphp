#!/usr/bin/perl

# SHPHP - Syntax Highlighting in PHP
# Copyright (C) 2007, 2008 gnombat@users.sourceforge.net
# Modification (C) 2009 kirik-san@users.sourceforge.net
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

use strict;
use warnings;

use SourceHighlight::PHP;

sub usage() {
  die "Usage: sh2php.pl FILE.lang\n";
}

################################################################################
# main

if (not @ARGV) {
  usage();
}

foreach (@ARGV) {
  if ($_ eq '-h' or $_ eq '-help' or $_ eq '--help') {
    usage();
  }
}

SourceHighlight::PHP::sh2php($ARGV[0]);
