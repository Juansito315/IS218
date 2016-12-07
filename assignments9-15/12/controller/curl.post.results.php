<?php

if ($_POST['email']):
    print_r('From post::Hey '.$_POST['email'].' your password is '.md5($_POST['password']).' lol!  its encrypted');
endif;