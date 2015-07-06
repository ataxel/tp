{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{set-block scope=root variable=subject}{'[%sitename] New collaboration item'
                                        |i18n("design/standard/notification",,
                                              hash('%sitename',ezini("SiteSettings","SiteURL")))}{/set-block}
{"This email is to inform you that a new collaboration item is awaiting your attention at %sitename.
The item can viewed by using the URL below."
 |i18n('design/standard/notification',,
       hash('%sitename',ezini("SiteSettings","SiteURL")))}
http://{ezini("SiteSettings","SiteURL")}{concat("collaboration/item/full/",$collaboration_item.id)|ezurl(no)}


{"If you do not want to continue receiving these notifications,
change your settings at:"|i18n('design/standard/notification')}
http://{ezini("SiteSettings","SiteURL")}{concat("notification/settings/")|ezurl(no)}

--
{"%sitename notification system"
 |i18n('design/standard/notification',,
       hash('%sitename',ezini("SiteSettings","SiteURL")))}