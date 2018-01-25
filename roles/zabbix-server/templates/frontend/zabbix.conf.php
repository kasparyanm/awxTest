<?php
//{{ ansible_managed }}
// Zabbix GUI configuration file
global $DB;

$DB['TYPE']     = 'POSTGRESQL';
$DB['SERVER']   = '{{ zabbix_server_dbhost }}';
$DB['PORT']     = '{{ zabbix_server_dbport }}';
$DB['DATABASE'] = '{{ zabbix_server_dbname }}';
$DB['USER']     = '{{ zabbix_server_dbuser }}';
$DB['PASSWORD'] = '{{ zabbix_server_dbpassword }}';

// SCHEMA is relevant only for IBM_DB2 database
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '{{ zabbix_server_host }}';
$ZBX_SERVER_PORT = '{{ zabbix_server_port }}';
$ZBX_SERVER_NAME = '{{ zabbix_server_name }}';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;

?>