# Simple PHP Cache für Contao

## Information ##

Die Cache-Klasse ist eine Anpasung für Contao. Sie basiert auf [Simple PHP Cache](https://github.com/cosenary/Simple-PHP-Cache).

## Entwickler ##

* Frank Hoppe <hoppe.berlin@googlemail.com>

## Anwendung ##

```php
<?php
    // Standardcache aktivieren, das Standardverzeichnis ist system/cache/samson
    // Die Schlüssel werden in der Standardcachedatei "default" abgelegt
    $cache = new Samson\Helper\Cache();

    // String erstellen, es sind aber beliebige Datentypen möglich - auch Objekte und Arrays
    $result = "Hallo";
    // String im Cache mit dem Schlüssel "ablage" speichern, Cachelebenszeit 3600s = 1h  
    $cache->store('ablage', $result, time()+3600);

    // Cache mit dem Schlüssel "ablage" laden
    $daten = $cache->retrieve('ablage');

    // Cache mit allen Schlüsseln laden
    $daten = $cache->retrieveAll();

    // Cache mit allen Schlüsseln und Metadaten laden
    $daten = $cache->retrieveAll(true);

    // Cache mit dem Schlüssel "ablage" löschen
    $cache->erase('ablage');

    // Cache mit allen Schlüsseln löschen
    $cache->eraseAll();

    // Cache mit den abgelaufenen Schlüsseln löschen
    $cache->eraseExpired();

    // Cache mit Schlüssel "ablage" auf Existenz prüfen und wenn vorhanden in Variable $result laden
    if($cache->isCached('ablage'))
    {
        $result = $cache->retrieve('ablage');
    }

    // Cache mit einem neuen Dateinamen 'Test' generieren
    // Die Schlüssel werden jetzt in dieser Datei verwaltet.
    $cache2 = new Samson\Helper\Cache('Test');

    // Möglich ist der Wechsel des Cachenamens auch so, ohne ein neues Objekt anzulegen
    $cache->setCache('Test');

?>
```
