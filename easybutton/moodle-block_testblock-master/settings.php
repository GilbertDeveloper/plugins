<?php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('block_easybutton/showcourses',
                   get_string('showcourses', 'block_easybutton'),
                   get_string('showcoursesdesc', 'block_easybutton'),
                   0));
}
