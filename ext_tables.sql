CREATE TABLE tt_content (
    tx_site_template_primary_label varchar(255) DEFAULT '' NOT NULL,
    tx_site_template_primary_link varchar(1024) DEFAULT '' NOT NULL,
    tx_site_template_secondary_label varchar(255) DEFAULT '' NOT NULL,
    tx_site_template_secondary_link varchar(1024) DEFAULT '' NOT NULL,
    tx_site_template_highlight_items text,
    tx_site_template_announcement_icon varchar(32) DEFAULT '' NOT NULL
);
