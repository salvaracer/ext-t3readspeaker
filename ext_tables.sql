#
# Table structure for table 'pages'
#
#CREATE TABLE pages (
#	tx_t3readspeaker_lang varchar(255) DEFAULT '' NOT NULL,
#	tx_t3readspeaker_voice varchar(255) DEFAULT '' NOT NULL,
#);

#
# Table structure for table 'pages_language_overlay'
#
#CREATE TABLE pages_language_overlay (
#	tx_t3readspeaker_lang varchar(255) DEFAULT '' NOT NULL,
#	tx_t3readspeaker_voice varchar(255) DEFAULT '' NOT NULL,
#);

#
# Table structure for table 'pages'
#
ALTER TABLE pages ADD tx_t3readspeaker_lang varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE pages ADD tx_t3readspeaker_voice varchar(255) DEFAULT '' NOT NULL;

#
# Table structure for table 'pages_language_overlay'
#
ALTER TABLE pages_language_overlay ADD tx_t3readspeaker_lang varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE pages_language_overlay ADD tx_t3readspeaker_voice varchar(255) DEFAULT '' NOT NULL;
