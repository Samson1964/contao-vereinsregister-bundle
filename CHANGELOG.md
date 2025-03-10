# DSB-Vereinsregister Changelog

## Version 1.1.4 (2025-03-03)

* Add: DCA-Picker in tl_vereinsregister_chronik.url
* Change: tl_vereinsregister_chronik.text kein Pflichtfeld mehr

## Version 1.1.3 (2025-03-03)

* Fix: An exception occurred while executing a query: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'afterCause' at row 1 -> Callback durch Sprachvariable ersetzt. default stand auf "text"!

## Version 1.1.2 (2023-11-29)

* Fix: Syntaxfehler in composer.json

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
