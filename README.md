Webedia Grid System (WGS)
===

####WGS est un système de grille responsive, avec largeurs fixes ou proportionnelles.

--- 

Ce projet est très fortement inspiré par le système de grille du framework inuit.css.

Ce projet est "mobile first", c'est à dire que les breakpoints sont à base de "min-width" (pas de max-width donc)

http://csswizardry.com/csswizardry-grids/

### Installation


```git clone https://github.com/webedia-udg/wgs```

### Options

Les options sont des variables qui doivent être initialisées **avant** d'inclure le fichier ``_wgs.scss`` dans votre fichier.

**fixedWidths**

Défaut à ``false`` : défini les tailles fixes disponibles. Ex : 

```scss
$fixedWidths: 300px 400px 500px;
```

**breakpoints**

Défaut à ``false`` : définit les breakpoints utilisables, tout en leur associant  un nom "humain". Ex :

```scss
// 3 breakpoints
$breakpoints: (
    tablet     : 480px,
    big-tablet : 660px,
    desk       : 990px
);

// 1 breakpoint
$breakpoints: (
    desktop: 990px
);
```

**gutter**

Défaut à ``24px`` : taille des gouttières. Ex : 

```scss
$gutter: 24px
```

**useFixedGrid**

Défaut à ``false`` : faut-il inclure les règles liées aux tailles fixes

### Utilisation


```scss
// style.scss

// Options utilisées par wgs_.scss
$useFixedGrid: true; // Faut-il inclure les règles dédiées aux tailles fixes
$fixedWidths: 300px; // Quelles tailles fixes faut-il prendre en compte ?
$breakpoints: (      // Quels breakpoints ? (noms et tailles minimales)
    tablet     : 480px,
    big-tablet : 660px,
    desk       : 990px
);


// Import du WGS
@import "wgs";
```

```html
<!-- index.html -->
<div class="grid big-tablet-grid--fixed">
    <div class="grid__item big-tablet-300px">
        <div class="bloc bloc--150">
            <div class="bloc__content">Fixe 300px a partir de grosse tablette</div>
        </div>
    </div><!--
 --><div class="grid__item">
        <div class="bloc bloc--150">
            <div class="bloc__content">Variable</div>
        </div>
    </div>
</div>
```

### Roadmap

- Documentation
- Push et pull


