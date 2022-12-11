---
title: Il file xra.php
description: Il file xra.php
extends: _layouts.documentation
section: content
---

# Il file xra.php {#il-file-xra}

Il file xra è uno dei file fondamentali. Ogni configurazione ne deve avere uno. 

Esempio:

```php
return [
    'adm_theme' => 'AdminLTE',
    'main_module' => 'Blog',
    'primary_lang' => 'it',
    'pub_theme' => 'DirectoryBs5',
];
```
il parametro **main_module** determina quale sia il modulo principale che il progetto utilizza.

Il parametro **adm_theme** determina quale tra i temi installati nella base, nella cartella laravel/Themes, viene utilizzata per il backand/amministrazione.

Il parametro **pub_theme** determina quale tra i temi installati nella base, viene utilizzata per il frontend.

Il parametro **primary_lang** determina la lingua di default utilizzata nel progetto.


