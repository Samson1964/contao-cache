# Simple PHP Cache f�r Contao

## Information ##

Die Cache-Klasse ist eine Anpasung f�r Contao. Sie basiert auf [Simple PHP Cache](https://github.com/cosenary/Simple-PHP-Cache).

## Entwickler ##

* Frank Hoppe <hoppe.berlin@googlemail.com>

## Anwendung ##

```php
<?php
    // Standardcache aktivieren, das Standardverzeichnis ist system/cache/samson
    // Die Schl�ssel werden in der Standardcachedatei "default" abgelegt
    $cache = new Samson\Helper\Cache();

    // String erstellen, es sind aber beliebige Datentypen m�glich - auch Objekte und Arrays
    $result = "Hallo";
    // String im Cache mit dem Schl�ssel "ablage" speichern, Cachelebenszeit 3600s = 1h  
    $cache->store('ablage', $result, time()+3600);

    // Cache mit dem Schl�ssel "ablage" laden
    $daten = $cache->retrieve('ablage');

    // Cache mit allen Schl�sseln laden
    $daten = $cache->retrieveAll();

    // Cache mit allen Schl�sseln und Metadaten laden
    $daten = $cache->retrieveAll(true);

    // Cache mit dem Schl�ssel "ablage" l�schen
    $cache->erase('ablage');

    // Cache mit allen Schl�sseln l�schen
    $cache->eraseAll();

    // Cache mit den abgelaufenen Schl�sseln l�schen
    $cache->eraseExpired();

    // Cache mit Schl�ssel "ablage" auf Existenz pr�fen und wenn vorhanden in Variable $result laden
    if($cache->isCached('ablage'))
    {
        $result = $cache->retrieve('ablage');
    }

    // Cache mit einem neuen Dateinamen 'Test' generieren
    // Die Schl�ssel werden jetzt in dieser Datei verwaltet.
    $cache2 = new Samson\Helper\Cache('Test');

    // M�glich ist der Wechsel des Cachenamens auch so, ohne ein neues Objekt anzulegen
    $cache->setCache('Test');

?>
```
