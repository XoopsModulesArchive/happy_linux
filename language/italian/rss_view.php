<?php
// $Id: rss_view.php,v 1.1 2007/09/29 12:32:41 ohwada Exp $

// 2007-05-12 K.OHWADA
// this is new file
// move from rssc module

//=========================================================
// Happy Linux Framework Module
// 2007-05-12 K.OHWADA
//=========================================================

// common
define('_HAPPY_LINUX_VIEW_SITE_TITLE','Titolo Sito');
define('_HAPPY_LINUX_VIEW_SITE_LINK', 'URL Sito');
define('_HAPPY_LINUX_VIEW_SITE_DESCRIPTION', 'Descrizione');
define('_HAPPY_LINUX_VIEW_SITE_PUBLISHED', 'Orario pubbl.');
define('_HAPPY_LINUX_VIEW_SITE_UPDATED',   'Orario agg.');
define('_HAPPY_LINUX_VIEW_SITE_DATE',      'Data');
define('_HAPPY_LINUX_VIEW_SITE_COPYRIGHT', 'Copyright');
define('_HAPPY_LINUX_VIEW_SITE_GENERATOR', 'Generator');
define('_HAPPY_LINUX_VIEW_SITE_CATEGORY',  'Categoria');
define('_HAPPY_LINUX_VIEW_SITE_WEBMASTER', 'Webmaster');
define('_HAPPY_LINUX_VIEW_SITE_LANGUAGE',  'Lingua');
define('_HAPPY_LINUX_VIEW_TITLE', 'Titolo');
define('_HAPPY_LINUX_VIEW_LINK',  'URL');
define('_HAPPY_LINUX_VIEW_DESCRIPTION', 'Descrizione'); 
define('_HAPPY_LINUX_VIEW_SUMMARY', 'Sommario'); 
define('_HAPPY_LINUX_VIEW_CONTENT', 'Contenuto');
define('_HAPPY_LINUX_VIEW_PUBLISHED', 'Pubblicato');
define('_HAPPY_LINUX_VIEW_UPDATED',   'Aggiornato');
define('_HAPPY_LINUX_VIEW_CREATED', 'Creato');
define('_HAPPY_LINUX_VIEW_CATEGORY',  'Categoria');
define('_HAPPY_LINUX_VIEW_RIGHTS', 'Diritti');
define('_HAPPY_LINUX_VIEW_SOURCE', 'Origine');
define('_HAPPY_LINUX_VIEW_AUTHOR_NAME', 'Nome Autore');
define('_HAPPY_LINUX_VIEW_AUTHOR_URI',  'URL Autore');
define('_HAPPY_LINUX_VIEW_AUTHOR_EMAIL','Email Autore');
define('_HAPPY_LINUX_VIEW_IMAGE_TITLE', 'Titolo Immagine');
define('_HAPPY_LINUX_VIEW_IMAGE_URL',   'URL Immagine');
define('_HAPPY_LINUX_VIEW_ENCLOSURE_URL',    'Enclosure Url');
define('_HAPPY_LINUX_VIEW_ENCLOSURE_TYPE',   'Enclosure Type');
define('_HAPPY_LINUX_VIEW_ENCLOSURE_LENGTH', 'Enclosure Length');

// RSS
define('_HAPPY_LINUX_VIEW_RSS_SITE_TITLE', _HAPPY_LINUX_VIEW_SITE_TITLE);
define('_HAPPY_LINUX_VIEW_RSS_SITE_LINK',  _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_RSS_SITE_DESCRIPTION',   _HAPPY_LINUX_VIEW_SITE_DESCRIPTION);
define('_HAPPY_LINUX_VIEW_RSS_SITE_LASTBUILDDATE', _HAPPY_LINUX_VIEW_SITE_UPDATED);
define('_HAPPY_LINUX_VIEW_RSS_SITE_PUBDATE',       _HAPPY_LINUX_VIEW_SITE_PUBLISHED);
define('_HAPPY_LINUX_VIEW_RSS_SITE_GENERATOR', _HAPPY_LINUX_VIEW_SITE_GENERATOR);
define('_HAPPY_LINUX_VIEW_RSS_SITE_CATEGORY',  _HAPPY_LINUX_VIEW_SITE_CATEGORY);
define('_HAPPY_LINUX_VIEW_RSS_SITE_WEBMASTER', _HAPPY_LINUX_VIEW_SITE_WEBMASTER);
define('_HAPPY_LINUX_VIEW_RSS_SITE_LANGUAGE',  _HAPPY_LINUX_VIEW_SITE_LANGUAGE);
define('_HAPPY_LINUX_VIEW_RSS_SITE_COPYRIGHT', _HAPPY_LINUX_VIEW_SITE_COPYRIGHT);
define('_HAPPY_LINUX_VIEW_RSS_SITE_MANAGINGEDITOR', 'Editore sito');
define('_HAPPY_LINUX_VIEW_RSS_SITE_DOCS','Docs sito');
define('_HAPPY_LINUX_VIEW_RSS_SITE_CLOUD', 'Site Cloud');
define('_HAPPY_LINUX_VIEW_RSS_SITE_TTL', 'Site TTL');
define('_HAPPY_LINUX_VIEW_RSS_SITE_RATING', 'Votazione sito');
define('_HAPPY_LINUX_VIEW_RSS_SITE_TEXTINPUT', 'Site Text Input');
define('_HAPPY_LINUX_VIEW_RSS_SITE_SKIPHOURS', 'Site Skip Hours');
define('_HAPPY_LINUX_VIEW_RSS_SITE_SKIPDAYS',  'Site Skip Days');
define('_HAPPY_LINUX_VIEW_RSS_IMAGE_TITLE',  _HAPPY_LINUX_VIEW_IMAGE_TITLE);
define('_HAPPY_LINUX_VIEW_RSS_IMAGE_URL',    _HAPPY_LINUX_VIEW_IMAGE_URL);
define('_HAPPY_LINUX_VIEW_RSS_IMAGE_WIDTH',  'Larg. Immagine');
define('_HAPPY_LINUX_VIEW_RSS_IMAGE_HEIGHT', 'Alt. Immagine');
define('_HAPPY_LINUX_VIEW_RSS_IMAGE_LINK',  _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_RSS_TITLE',_HAPPY_LINUX_VIEW_TITLE);
define('_HAPPY_LINUX_VIEW_RSS_LINK', _HAPPY_LINUX_VIEW_LINK);
define('_HAPPY_LINUX_VIEW_RSS_DESCRIPTION', _HAPPY_LINUX_VIEW_DESCRIPTION); 
define('_HAPPY_LINUX_VIEW_RSS_PUBDATE',  _HAPPY_LINUX_VIEW_PUBLISHED);
define('_HAPPY_LINUX_VIEW_RSS_CATEGORY', _HAPPY_LINUX_VIEW_CATEGORY);
define('_HAPPY_LINUX_VIEW_RSS_SOURCE',   _HAPPY_LINUX_VIEW_SOURCE);
define('_HAPPY_LINUX_VIEW_RSS_GUID',   'RSS guid');
define('_HAPPY_LINUX_VIEW_RSS_AUTHOR', 'Autore');
define('_HAPPY_LINUX_VIEW_RSS_COMMENTS','Commenti');
define('_HAPPY_LINUX_VIEW_RSS_ENCLOSURE', 'Enclosure');

// RDF
define('_HAPPY_LINUX_VIEW_RDF_SITE_TITLE', _HAPPY_LINUX_VIEW_SITE_TITLE);
define('_HAPPY_LINUX_VIEW_RDF_SITE_LINK',  _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_RDF_SITE_DESCRIPTION', _HAPPY_LINUX_VIEW_SITE_DESCRIPTION);
define('_HAPPY_LINUX_VIEW_RDF_SITE_PUBLISHER',   _HAPPY_LINUX_VIEW_SITE_WEBMASTER);
define('_HAPPY_LINUX_VIEW_RDF_SITE_RIGHT', _HAPPY_LINUX_VIEW_SITE_COPYRIGHT);
define('_HAPPY_LINUX_VIEW_RDF_SITE_DATE',  _HAPPY_LINUX_VIEW_SITE_PUBLISHED );
define('_HAPPY_LINUX_VIEW_RDF_SITE_TEXTINPUT', 'Site Text Input');
define('_HAPPY_LINUX_VIEW_RDF_SITE_IMAGE',  'Immagine sito ');
define('_HAPPY_LINUX_VIEW_RDF_IMAGE_TITLE', _HAPPY_LINUX_VIEW_IMAGE_TITLE);
define('_HAPPY_LINUX_VIEW_RDF_IMAGE_URL',   _HAPPY_LINUX_VIEW_IMAGE_URL);
define('_HAPPY_LINUX_VIEW_RDF_IMAGE_LINK',  _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_RDF_TITLE',_HAPPY_LINUX_VIEW_TITLE);
define('_HAPPY_LINUX_VIEW_RDF_LINK', _HAPPY_LINUX_VIEW_LINK);
define('_HAPPY_LINUX_VIEW_RDF_DESCRIPTION', _HAPPY_LINUX_VIEW_DESCRIPTION); 
define('_HAPPY_LINUX_VIEW_RDF_TEXTINPUT', 'Text Input');

// ATOM
define('_HAPPY_LINUX_VIEW_ATOM_SITE_TITLE', _HAPPY_LINUX_VIEW_SITE_TITLE);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_LINK',  _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_PUBLISHED', _HAPPY_LINUX_VIEW_SITE_PUBLISHED);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_UPDATED',   _HAPPY_LINUX_VIEW_SITE_UPDATED);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_RIGHTS',    _HAPPY_LINUX_VIEW_SITE_COPYRIGHT);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_GENERATOR', _HAPPY_LINUX_VIEW_SITE_GENERATOR);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_CATEGORY',  _HAPPY_LINUX_VIEW_SITE_CATEGORY);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_LINK_ALTERNATE', _HAPPY_LINUX_VIEW_SITE_LINK);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_LINK_SELF', 'ATOM Self URL');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_ID','Site ID');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_CONTRIBUTOR','Contributore sito');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_SUBTITLE','Sottotitolo sito');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_ICON', 'Icona sito');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_LOGO', 'Logo sito');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_SOURCE', 'Origine sito');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_AUTHOR_NAME', _HAPPY_LINUX_VIEW_SITE_WEBMASTER);
define('_HAPPY_LINUX_VIEW_ATOM_SITE_AUTHOR_URI',  'Webmaster URL');
define('_HAPPY_LINUX_VIEW_ATOM_SITE_AUTHOR_EMAIL','Webmaster Email');
define('_HAPPY_LINUX_VIEW_ATOM_TITLE', _HAPPY_LINUX_VIEW_TITLE);
define('_HAPPY_LINUX_VIEW_ATOM_LINK',  _HAPPY_LINUX_VIEW_LINK);
define('_HAPPY_LINUX_VIEW_ATOM_PUBLISHED', _HAPPY_LINUX_VIEW_PUBLISHED);
define('_HAPPY_LINUX_VIEW_ATOM_UPDATED',   _HAPPY_LINUX_VIEW_UPDATED);
define('_HAPPY_LINUX_VIEW_ATOM_SUMMARY',  _HAPPY_LINUX_VIEW_SUMMARY); 
define('_HAPPY_LINUX_VIEW_ATOM_CONTENT',  _HAPPY_LINUX_VIEW_CONTENT);
define('_HAPPY_LINUX_VIEW_ATOM_CATEGORY', _HAPPY_LINUX_VIEW_CATEGORY);
define('_HAPPY_LINUX_VIEW_ATOM_RIGHTS',   _HAPPY_LINUX_VIEW_RIGHTS);
define('_HAPPY_LINUX_VIEW_ATOM_SOURCE',   _HAPPY_LINUX_VIEW_SOURCE);
define('_HAPPY_LINUX_VIEW_ATOM_ID','ATOM id');
define('_HAPPY_LINUX_VIEW_ATOM_CONTRIBUTOR','Contributore');
define('_HAPPY_LINUX_VIEW_ATOM_AUTHOR_NAME', _HAPPY_LINUX_VIEW_AUTHOR_NAME);
define('_HAPPY_LINUX_VIEW_ATOM_AUTHOR_URI',  _HAPPY_LINUX_VIEW_AUTHOR_URI);
define('_HAPPY_LINUX_VIEW_ATOM_AUTHOR_EMAIL',_HAPPY_LINUX_VIEW_AUTHOR_EMAIL);
define('_HAPPY_LINUX_VIEW_ATOM_CONTRIBUTOR_NAME', 'Contributore');
define('_HAPPY_LINUX_VIEW_ATOM_CONTRIBUTOR_URI',  'URL Contributore');
define('_HAPPY_LINUX_VIEW_ATOM_CONTRIBUTOR_EMAIL','Email Contributore');

// Dublin Core
define('_HAPPY_LINUX_VIEW_DC_TITLE',_HAPPY_LINUX_VIEW_TITLE);
define('_HAPPY_LINUX_VIEW_DC_DESCRIPTION', _HAPPY_LINUX_VIEW_DESCRIPTION); 
define('_HAPPY_LINUX_VIEW_DC_RIGHTS', _HAPPY_LINUX_VIEW_RIGHTS);
define('_HAPPY_LINUX_VIEW_DC_PUBLISHER', 'Publisher');
define('_HAPPY_LINUX_VIEW_DC_CREATOR', 'Creatore');
define('_HAPPY_LINUX_VIEW_DC_DATE', 'Data');
define('_HAPPY_LINUX_VIEW_DC_FORMAT', 'Formato');
define('_HAPPY_LINUX_VIEW_DC_RELATION', 'Relazione');
define('_HAPPY_LINUX_VIEW_DC_IDENTIFIER', 'Identificatore');
define('_HAPPY_LINUX_VIEW_DC_COVERAGE', 'Copertura');
define('_HAPPY_LINUX_VIEW_DC_AUDIENCE', 'Audience');
define('_HAPPY_LINUX_VIEW_DC_SUBJECT', 'Oggetto');
define('_HAPPY_LINUX_VIEW_CONTENT_ENCODED', _HAPPY_LINUX_VIEW_CONTENT);

// require / option
define('_HAPPY_LINUX_VIEW_SITE_TAG','Tag sito');
define('_HAPPY_LINUX_VIEW_SITE_LOGO','Immagine logo sito');
define('_HAPPY_LINUX_VIEW_RSS_ATOM_REQUIRE', 'Richiesto per RSS/ATOM');
define('_HAPPY_LINUX_VIEW_RSS_REQUIRE','Richiesto per RSS');
define('_HAPPY_LINUX_VIEW_ATOM_REQUIRE','Richiesto per ATOM');
define('_HAPPY_LINUX_VIEW_OPTION','Opzione');
define('_HAPPY_LINUX_VIEW_IMAGE_TOO_BIG','Dimensione immagine maggiore della specifica');
define('_HAPPY_LINUX_VIEW_IMAGE_MAX',    'Dimensione max. immagine');

?>