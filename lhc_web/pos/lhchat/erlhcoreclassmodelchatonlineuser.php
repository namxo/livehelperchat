<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_chat_online_user";
$def->class = "erLhcoreClassModelChatOnlineUser";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['vid'] = new ezcPersistentObjectProperty();
$def->properties['vid']->columnName   = 'vid';
$def->properties['vid']->propertyName = 'vid';
$def->properties['vid']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['ip'] = new ezcPersistentObjectProperty();
$def->properties['ip']->columnName   = 'ip';
$def->properties['ip']->propertyName = 'ip';
$def->properties['ip']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['current_page'] = new ezcPersistentObjectProperty();
$def->properties['current_page']->columnName   = 'current_page';
$def->properties['current_page']->propertyName = 'current_page';
$def->properties['current_page']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['page_title'] = new ezcPersistentObjectProperty();
$def->properties['page_title']->columnName   = 'page_title';
$def->properties['page_title']->propertyName = 'page_title';
$def->properties['page_title']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['chat_id'] = new ezcPersistentObjectProperty();
$def->properties['chat_id']->columnName   = 'chat_id';
$def->properties['chat_id']->propertyName = 'chat_id';
$def->properties['chat_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['last_visit'] = new ezcPersistentObjectProperty();
$def->properties['last_visit']->columnName   = 'last_visit';
$def->properties['last_visit']->propertyName = 'last_visit';
$def->properties['last_visit']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['dep_id'] = new ezcPersistentObjectProperty();
$def->properties['dep_id']->columnName   = 'dep_id';
$def->properties['dep_id']->propertyName = 'dep_id';
$def->properties['dep_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['first_visit'] = new ezcPersistentObjectProperty();
$def->properties['first_visit']->columnName   = 'first_visit';
$def->properties['first_visit']->propertyName = 'first_visit';
$def->properties['first_visit']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// Current visit session pages count
$def->properties['pages_count'] = new ezcPersistentObjectProperty();
$def->properties['pages_count']->columnName   = 'pages_count';
$def->properties['pages_count']->propertyName = 'pages_count';
$def->properties['pages_count']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// Total pages count including previous sessions
$def->properties['tt_pages_count'] = new ezcPersistentObjectProperty();
$def->properties['tt_pages_count']->columnName   = 'tt_pages_count';
$def->properties['tt_pages_count']->propertyName = 'tt_pages_count';
$def->properties['tt_pages_count']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// How many times invitation message was assigned
$def->properties['invitation_count'] = new ezcPersistentObjectProperty();
$def->properties['invitation_count']->columnName   = 'invitation_count';
$def->properties['invitation_count']->propertyName = 'invitation_count';
$def->properties['invitation_count']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// Time on site for curent visit session
$def->properties['time_on_site'] = new ezcPersistentObjectProperty();
$def->properties['time_on_site']->columnName   = 'time_on_site';
$def->properties['time_on_site']->propertyName = 'time_on_site';
$def->properties['time_on_site']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// Total time on site including previous visits
$def->properties['tt_time_on_site'] = new ezcPersistentObjectProperty();
$def->properties['tt_time_on_site']->columnName   = 'tt_time_on_site';
$def->properties['tt_time_on_site']->propertyName = 'tt_time_on_site';
$def->properties['tt_time_on_site']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['user_agent'] = new ezcPersistentObjectProperty();
$def->properties['user_agent']->columnName   = 'user_agent';
$def->properties['user_agent']->propertyName = 'user_agent';
$def->properties['user_agent']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['user_country_code'] = new ezcPersistentObjectProperty();
$def->properties['user_country_code']->columnName   = 'user_country_code';
$def->properties['user_country_code']->propertyName = 'user_country_code';
$def->properties['user_country_code']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['user_country_name'] = new ezcPersistentObjectProperty();
$def->properties['user_country_name']->columnName   = 'user_country_name';
$def->properties['user_country_name']->propertyName = 'user_country_name';
$def->properties['user_country_name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['lat'] = new ezcPersistentObjectProperty();
$def->properties['lat']->columnName   = 'lat';
$def->properties['lat']->propertyName = 'lat';
$def->properties['lat']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['lon'] = new ezcPersistentObjectProperty();
$def->properties['lon']->columnName   = 'lon';
$def->properties['lon']->propertyName = 'lon';
$def->properties['lon']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['city'] = new ezcPersistentObjectProperty();
$def->properties['city']->columnName   = 'city';
$def->properties['city']->propertyName = 'city';
$def->properties['city']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Operator message
$def->properties['operator_message'] = new ezcPersistentObjectProperty();
$def->properties['operator_message']->columnName   = 'operator_message';
$def->properties['operator_message']->propertyName = 'operator_message';
$def->properties['operator_message']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Which user has send the message
$def->properties['operator_user_id'] = new ezcPersistentObjectProperty();
$def->properties['operator_user_id']->columnName   = 'operator_user_id';
$def->properties['operator_user_id']->propertyName = 'operator_user_id';
$def->properties['operator_user_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// This field get's filled by pro active message operator name if it's based on this
$def->properties['operator_user_proactive'] = new ezcPersistentObjectProperty();
$def->properties['operator_user_proactive']->columnName   = 'operator_user_proactive';
$def->properties['operator_user_proactive']->propertyName = 'operator_user_proactive';
$def->properties['operator_user_proactive']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Have the user seen the message and closed the window
$def->properties['message_seen'] = new ezcPersistentObjectProperty();
$def->properties['message_seen']->columnName   = 'message_seen';
$def->properties['message_seen']->propertyName = 'message_seen';
$def->properties['message_seen']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Time then message seen action accured
$def->properties['message_seen_ts'] = new ezcPersistentObjectProperty();
$def->properties['message_seen_ts']->columnName   = 'message_seen_ts';
$def->properties['message_seen_ts']->propertyName = 'message_seen_ts';
$def->properties['message_seen_ts']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['invitation_id'] = new ezcPersistentObjectProperty();
$def->properties['invitation_id']->columnName   = 'invitation_id';
$def->properties['invitation_id']->propertyName = 'invitation_id';
$def->properties['invitation_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['requires_email'] = new ezcPersistentObjectProperty();
$def->properties['requires_email']->columnName   = 'requires_email';
$def->properties['requires_email']->propertyName = 'requires_email';
$def->properties['requires_email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['identifier'] = new ezcPersistentObjectProperty();
$def->properties['identifier']->columnName   = 'identifier';
$def->properties['identifier']->propertyName = 'identifier';
$def->properties['identifier']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['referrer'] = new ezcPersistentObjectProperty();
$def->properties['referrer']->columnName   = 'referrer';
$def->properties['referrer']->propertyName = 'referrer';
$def->properties['referrer']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Total visits to site, visit counts if 30 minits has passed since last page view
$def->properties['total_visits'] = new ezcPersistentObjectProperty();
$def->properties['total_visits']->columnName   = 'total_visits';
$def->properties['total_visits']->propertyName = 'total_visits';
$def->properties['total_visits']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>