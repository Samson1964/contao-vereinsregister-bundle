# DSB-Vereinsregister Changelog

## Version 1.1.1 (2023-11-29)

* Add: Abhängigkeit codefog/contao-haste
* Change: Toggle-Funktion durch Haste-Toggler ersetzt -> tl_vereinsregister, tl_vereinsregister_chairman, tl_vereinsregister_chronik, tl_vereinsregister_members, tl_vereinsregister_namen
* Change: Im DCA alle Bildfelder und Invisible-Feld umgebaut
* Add: Abhängigkeit schachbulle/contao-helper-bundle
* Delete: Klasse Vereinsregister -> nur eine Funktion drin, die vom ContaoHelperBundle übernommen wird
* Add: Ahängigkeit menatwork/contao-multicolumnwizard-bundle
* Delete: Sprachdatei tl_module

## Version 1.1.0 (2023-11-29)

* Change: Bundle für PHP 8 freigegeben

## Version 1.0.3 (2023-10-23)

* Change: tl_vereinsregister Felder alt,title,size,imagemargin,imageUrl,fullsize,caption,floating -> fullsize,size,floating,overwriteMeta
* Change: Übersetzungen tl_vereinsregister

## Version 1.0.2 (2020-09-28)

* Funktion pagePicker auskommentiert in Klasse Vereinsregister

## Version 1.0.1 (2019-06-27)

* Fix: composer.json falsches Bundle verlinkt

## Version 1.0.0 (2019-06-26)

* Übernahme Version 1.1.0 von Contao 3 als Conato-4-Bundle
