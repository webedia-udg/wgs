Webedia Grid System (WGS)
===

####WGS est un système de grille responsive, avec largeurs fixes ou proportionnelles.

--- 

Ce projet est très fortement inspiré par le système de grille du framework de Harry Roberts https://github.com/csswizardry/csswizardry-grids

Ce grid system est **mobile first**, c'est à dire que les valeurs proposées par défaut s'appliquent à toutes les tailles.

Si des breakpoints sont à prendre en compte, ils sont à base de ``min-width``.

### Pré-requis

* sass > 3.4

### Installation

* git : ``git clone https://github.com/webedia-udg/wgs``
* bower : ``bower install webedia-udg/wgs``

### Utilisation

1. Inclure le fichier _wgs dans votre projet sass
2. Lancer le setup


```scss
// style.scss

// Import du WGS. Rien n'est écrit ici
@import "wgs";

// Setup du WGS. Écriture du code CSS
@include wgsSetup(
    $useFixedGrid: true,
    $fixedWidths: 300px,
    $gutter: 24px,
    $breakpoints: (
        tablet     : 480px,
        big-tablet : 660px,
        desk       : 990px
    )
);

```

```html
<!-- index.html (exemple utilisant la conf du dessus) -->
<div class="grid">
    <div class="grid__item 1/1 1/2@big-tablet 1/4@desk">
        CASE 1
    </div><!--
 --><div class="grid__item 1/1 1/2@big-tablet 1/4@desk">
        CASE 2
    </div><!--
 --><div class="grid__item 1/1 1/2@tablet 1/3@desk">
        CASE 3
    </div><!--
 --><div class="grid__item 1/1 1/2@tablet 1/3@desk">
        CASE 4
    </div>
</div>
```

### Setup

Inclure le wgs dans votre projet vous donne accès à **2 mixins** sass :

**wgsSetup**

```sass
/**
 * Ecrit les règles
 * @param list $fixedWidths (false) : les tailles fixes à prendre en compte
 * @param map $breakpoints (false) : les breakpoints à prendre en compte
 * @param string $gutter (24px) : taille de la gouttière
 * @param bool (false) : faut-il gérer les grilles à taille fixe
 */
@mixin wgsSetup(
    $fixedWidths  : false,
    $breakpoints  : false,
    $gutter       : 24px,
    $useFixedGrid : false
);
```

``fixedWidths``

Défaut à ``false`` : défini les tailles fixes disponibles. Ex : 

```scss
$fixedWidths: 300px 400px 500px;
```

``breakpoints``

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

``gutter``

Défaut à ``24px`` : taille des gouttières. Ex : 

```scss
$gutter: 24px
```

``useFixedGrid``

Défaut à ``false`` : faut-il inclure les règles liées aux tailles fixes

**mq**

```sass
/**
 * Mixin de media-query
 *
 * @param string $breakpoint : nom du breakpoint. Doit correspondre à l'un des
 *                             éléments de $breakpoints transmis à wgsSetup()
 * Ex : @include mq(desk){...}
 */
@mixin mq($breakpoint) { 
    @if map-has-key($_wgsBreakpoints, $breakpoint) {
        @media screen and (min-width: map-get($_wgsBreakpoints, $breakpoint)) {
            @content;
        }
    }
}
```

Exemple 

```sass
@include mq(desk){
    .element{
        margin: 10px;
    }
}
```

génère : 

```css
@media screen and (min-width: 990px){
    .element{
        margin: 10px;
    }
}
```


### Demo

Le fichier demo.html présente quelques exemples d'utilisation, notamment pour les grilles fixes

### Roadmap

- Documentation
- Push et pull


