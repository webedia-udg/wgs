Webedia Grid System (WGS)
===

####WGS est un système de grille responsive, avec largeurs fixes ou proportionnelles.

--- 

Ce projet est très fortement inspiré par le système de grille du framework inuit.css

http://csswizardry.com/csswizardry-grids/

### Installation


```git clone https://github.com/webedia-udg/wgs```

### Utilisation


```scss
// style.scss
$useFixedGrid: true;
$fixedWidths: 300px;
$breakpoints: (
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


