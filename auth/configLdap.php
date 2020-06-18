<?php
$config['version'] = '3.0';
$config['urlLdap'] = 'ldap://172.17.0.5:389';
$config['baseLdap'] = 'dc=paneschucos,dc=occ,dc=ues,dc=edu,dc=sv';
$config['usernameConsultaLdap'] = '';
$config['passwordConsultaLdap'] = '';
$config['baseSearch'] = 'ou=users,dc=paneschucos,dc=occ,dc=ues,dc=edu,dc=sv';
$config['columnaLdap'] = 'mail';
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

<?
