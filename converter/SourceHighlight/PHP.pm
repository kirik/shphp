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

package SourceHighlight::PHP;

use strict;
use warnings;

use Data::Dumper;
use File::Basename;

use PHP::Array;
use PHP::Boolean;
use PHP::RegExp;
use PHP::String;
use SourceHighlight::DOM;
use SourceHighlight::StateMachine;

sub serialize_state_machine {
  my $state_machine = shift;

  foreach my $state (@$state_machine) {
    foreach my $pattern (@$state) {
      my $regex = $pattern->{regex};
      $regex =~ s|[A-Z]\-[A-Z]||g;
      my $flags = 'i';
      $pattern->{regex} = PHP::RegExp->new($regex, $flags);
      if ($pattern->{class}) {
        if (ref($pattern->{class})) {
          my @classes = map { 'sh_' . $_ } @{$pattern->{class}};
          $pattern->{style} = PHP::Array->new(\@classes);
        }
        else {
          $pattern->{style} = PHP::String->new('sh_' . $pattern->{class});
        }
        delete $pattern->{class};
      }
      foreach my $exit ('exit', 'exitall') {
        if ($pattern->{$exit}) {
          $pattern->{$exit} = PHP::Boolean->new($pattern->{$exit});
        }
      }
    }
  }

  my $first_state = 1;
  my $level = 0;
  foreach my $state (@$state_machine) {
    if ($first_state) {
      $first_state = 0;
    }
    else {
      print ",\n";
    }
    print "    // State #$level\n";
    print "    array(\n";
    my $first_pattern = 1;
    foreach my $pattern (@$state) {
      if ($first_pattern) {
        $first_pattern = 0;
      }
      else {
        print ",\n";
      }

      print "        array(\n";

      print '            ', $pattern->{regex}, ",\n";

      if (exists $pattern->{style}) {
        print '            ', $pattern->{style}, ",\n";
      }
      else {
        print "            null,\n";
      }

      print '            ';
      if (exists $pattern->{next}) {
        print $pattern->{next};
      }
      elsif (exists $pattern->{exit}) {
        print '-2';
      }
      elsif (exists $pattern->{exitall}) {
        print '-3';
      }
      else {
        print '-1';
      }

      if (exists $pattern->{state}) {
        print ",\n            1\n";
      }
      else {
        print "\n";
      }

      print "        )";
    }
    print "\n";
    print "    )";
    $level++;
  }
  print "\n";
}

=head2 SourceHighlight::DOM::sh2php()

  my $file = 'foo.lang';
  SourceHighlight::DOM::sh2php($file);

Converts a source-highlight language definition file to PHP and writes it
to standard output.  Calls "die" on error.

=cut

sub sh2php($) {
  $_ = shift;

  my ($filename, $directories, $suffix) = fileparse($_, ".lang");
  if ($suffix ne '.lang') {
    die "File $_ does not have a .lang suffix\n";
  }
  open LANG, $_ or die "$!\n";
  undef $/;
  my $string = <LANG>;
  close LANG;

  my $tree = SourceHighlight::DOM::parse($string) or die "Invalid input\n";
  my $state_machine = SourceHighlight::StateMachine::state_machine($tree);
  print "<?php\n\$sh_languages['$filename'] = array(\n";
  # serialize_simple_state_machine($state_machine);
  serialize_state_machine($state_machine);
  print ");\n";
}

1;
