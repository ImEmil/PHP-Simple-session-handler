Simple-session-handler-PHP
==========================

A class that handles sessions to check whether the user is logged in or logged out

==========================================================================================================================
How do i use it?
==========================================================================================================================
To check if the user is logged in:
==========================================================================================================================
<?php
                                      if($s->isLoggedIn())
                                      {
                                        echo "Hi there, you are currently logged in";
                                      }
                                      else {
                                        echo "You are currently logged out";
                                      }
                                    ?>
                                    ==========================================================================================================================
To check if the user is logged out:
                                    <?php
                                      if($s->isLoggedOut())
                                      {
                                        echo ";
                                      }
                                      else {
                                        echo "You are currently logged out";
                                      }
                                    ?>
