<?php
/**
 * German language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 */
$lang['menu']           = 'Konfiguration';
$lang['error']          = 'Die Einstellungen wurden wegen einer fehlerhaften Eingabe nicht gespeichert.
                           <br />Bitte überprüfen sie die rot umrandeten Eingaben und speichern Sie erneut.';
$lang['updated']        = 'Einstellungen erfolgreich gespeichert.';
$lang['nochoice']       = '(keine Auswahlmöglichkeiten vorhanden)';
$lang['locked']         = 'Die Konfigurationsdatei kann nicht geändert werden, wenn dies unbeabsichtigt ist
                           <br />überprüfen Sie, dass die Dateiberechtigungen korrekt gesetzt sind.';


/* -------------------- Config Options --------------------------- */
$lang['fmode']          = 'Rechte für neue Dateien';
$lang['dmode']          = 'Rechte für neue Verzeichnisse';
$lang['lang']           = 'Sprache';
$lang['basedir']        = 'Installationsverzeichnis';
$lang['baseurl']        = 'Installationspfad (URL)';
$lang['savedir']        = 'Speicherverzeichnis';
$lang['start']          = 'Startseitenname';
$lang['title']          = 'Titel des Wikis';
$lang['template']       = 'Template';
$lang['fullpath']       = 'Im den kompletten Dateipfad im Footer anzeigen';
$lang['recent']         = 'Anzahl der Einträge in der Änderungsliste';
$lang['breadcrumbs']    = 'Anzahl der Einträge im "Krümelpfad"';
$lang['youarehere']     = 'Hierarchische Pfadnavigation verwenden';
$lang['typography']     = 'Typographische Ersetzungen';
$lang['htmlok']         = 'HTML erlauben';
$lang['phpok']          = 'PHP erlauben';
$lang['dformat']        = 'Datumsformat (Siehe PHP <a href="http://www.php.net/date">date</a> Funktion)';
$lang['signature']      = 'Signatur';
$lang['toptoclevel']    = 'Inhaltsverzeichnis bei dieser Überschriftsgröße beginnen';
$lang['maxtoclevel']    = 'Maximale Überschriftsgröße für Inhaltsverzeichnis';
$lang['maxseclevel']    = 'Abschnitte bis zu dieser Stufe einzeln editierbar machen';
$lang['camelcase']      = 'CamelCase-Verlinkungen verwenden';
$lang['deaccent']       = 'Seitennamen bereinigen';
$lang['useheading']     = 'Erste Überschrift als Seitennamen verwenden';
$lang['refcheck']       = 'Auf Verwendung beim Löschen von Media-Dateien testen';
$lang['refshow']        = 'Wieviele der Datei-Verwendungsorte zeigen';
$lang['allowdebug']     = 'Debug-Ausgaben erlauben <b>Abschalten wenn nicht benötigt!</b>';
$lang['usewordblock']   = 'Spam-Blocking benutzen';
$lang['indexdelay']     = 'Zeit bevor Suchmaschinenindexierung erlaubt ist';
$lang['relnofollow']    = 'rel="nofollow" verwenden';
$lang['mailguard']      = 'E-Mail Adressen schützen';
$lang['useacl']         = 'Zugangskontrolle verwenden';
$lang['openregister']   = 'Öffentliche Registrierung';
$lang['autopasswd']     = 'Passwort automatisch generieren';
$lang['resendpasswd']   = 'Passworterneuerung erlauben';
$lang['authtype']       = 'Autentifizierungsmechanismus';
$lang['passcrypt']      = 'Verschlüsselungsmechanismus';
$lang['defaultgroup']   = 'Standardgruppe';
$lang['superuser']      = 'Administrator';
$lang['profileconfirm'] = 'Profiländerung nur nach Passwortbestätigung';
$lang['userewrite']     = 'URL rewriting';
$lang['useslash']       = 'Schrägstrich (/) als Namensraumtrenner in URLs verwenden';
$lang['sepchar']        = 'Worttrenner für Seitennamen in URLs';
$lang['canonical']      = 'Immer Links mit vollständigen URLs erzeugen';
$lang['autoplural']     = 'Bei Links automatisch nach vorhandenen Pluralformen suchen';
$lang['usegzip']        = 'Alte Seitenversionen komprimieren';
$lang['cachetime']      = 'Maximale Cachespeicherung (Sek.)';
$lang['purgeonadd']     = 'Seitencache leeren wenn eine neue Seite angelegt wurde';
$lang['locktime']       = 'Maximales Alter für Seitensperren (Sek.)';
$lang['notify']         = 'Änderungsmitteilungen and diese E-Mail Adresse versenden';
$lang['mailfrom']       = 'Absendermail für autotmatische Mails';
$lang['gdlib']          = 'GDlib Version';
$lang['im_convert']     = 'Pfad zu Image Magicks convert Tool';
$lang['spellchecker']   = 'Rechtschreibprüfung aktivieren';
$lang['subscribers']    = 'E-Mail Abos zulassen';
$lang['compress']       = 'Javascript und Stylesheets komprimieren';
$lang['hidepages']      = 'Seiten verstecken (Regulärer Ausdruck)';
$lang['send404']        = 'Bei nicht vorhandenen Seiten mit 404 Fehlercode antworten';
$lang['sitemap']        = 'Google Sitemap erzeugen (Tage)';
$lang['rss_type']       = 'XML-Feed Format';
$lang['rss_linkto']     = 'XML-Feed verlinken auf';
$lang['target____wiki']      = 'Zielfenster für interne Links (target Attribut)';
$lang['target____interwiki'] = 'Zielfenster für InterWiki-Links (target Attribut)';
$lang['target____extern']    = 'Zielfenster für Externe Links (target Attribut)';
$lang['target____media']     = 'Zielfenster für (Bild-)Dateien (target Attribut)';
$lang['target____windows']   = 'Zielfenster für Windows Freigaben (target Attribut)';
$lang['proxy____host']  = 'Proxy-Server';
$lang['proxy____port']  = 'Proxy-Port';
$lang['proxy____user']  = 'Proxy Nutzername';
$lang['proxy____pass']  = 'Proxy Passwort';
$lang['proxy____ssl']   = 'SSL bei Verbindung zum Proxy verwenden';
$lang['safemodehack']   = 'Safemodehack verwenden';
$lang['ftp____host']    = 'FTP-Host für Safemodehack';
$lang['ftp____port']    = 'FTP-Port für Safemodehack';
$lang['ftp____user']    = 'FTP Nutzername für Safemodehack';
$lang['ftp____pass']    = 'FTP Passwort für Safemodehack';
$lang['ftp____root']    = 'FTP Wurzelverzeichnis für Safemodehack';
$lang['userewrite_o_0'] = 'keines';
$lang['userewrite_o_1'] = '.htaccess';
$lang['userewrite_o_2'] = 'DokuWiki';
$lang['deaccent_o_0']   = 'aus';
$lang['deaccent_o_1']   = 'Accente und Umlaute umwandeln';
$lang['deaccent_o_2']   = 'Umschrift';
$lang['gdlib_o_0']      = 'GD Lib nicht verfügbar';
$lang['gdlib_o_1']      = 'Version 1.x';
$lang['gdlib_o_2']      = 'Automatisch finden';
$lang['rss_type_o_rss'] = 'RSS 0.91';
$lang['rss_type_o_rss1'] = 'RSS 1.0';
$lang['rss_type_o_rss2'] = 'RSS 2.0';
$lang['rss_type_o_atom'] = 'Atom 0.3';
$lang['rss_linkto_o_diff']    = 'Änderungen zeigen';
$lang['rss_linkto_o_page']    = 'geänderte Seite';
$lang['rss_linkto_o_rev']     = 'Liste aller Änderungen';
$lang['rss_linkto_o_current'] = 'Aktuelle Seite';


