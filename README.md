Whatever Grid System (WGS)
===

####WGS is a library allowing the generation of a set of OOCSS classes. Theses classes are heavily oriented toward the creation responsive webpage structures.

It contains :

* grid classes, with ratio and **fixed widths**.
* spacing classes
* visibility classes

Thoses classes follow the BEM convention, augmented with a new paradigm : **the "@breakpoint" sufix.**

This system est highly customisable : gutters, widths, spaces, breakpoint names.

--- 

This project fully [OOCSS](https://github.com/stubbornella/oocss/wiki) :

* Separate structure and skin
* Separate container and content

This grid system has a **mobile first** approach. It means you create base structures, and improve them when the screen size grows.

## Prerequisites

* sass > 3.4

## Installation

* git : ``git clone https://github.com/webedia-udg/wgs``
* bower : ``bower install webedia-udg/wgs``

## Usage

```scss
// your-file.scss

// Import the library
@import "wgs";

// Setup and write classes
@include wgsSetup(
    $fixedWidths : 200px 300px,
    $breakpoints : (
        tablet     : 480px,
        big-tablet : 660px,
        desk       : 990px
    ),
    $gutters : 12px 16px 18px 22px
);

```

```html
<!-- index.html (exemple utilisant la conf du dessus) -->
<div class="grid">
    <div class="grid__item 1/2@big-tablet 1/3@desk"></div>
    <div class="grid__item 1/2@big-tablet 1/3@desk"></div>
    <div class="grid__item 1/3@desk"></div>
</div>
<div class="grid grid--fixed@desk grid--12px grid--22px@desk">
    <div class="grid__item 1/2@tablet 300px@desk"></div>
    <div class="grid__item 1/2@tablet 1/1@desk"></div>
</div>
<div class="padding-top--12px padding-top--22px@desk"></div>
```

## Classes naming


``class[__element][--modifier][@breakpoint]``

Ex :

```
.1/3
.1/3@desk
.300px@tablet
.grid
.grid__item
.grid--fixed@tablet
.padding--22px
.padding--22px@desk
.padding--0@desk
.padding-top--22px
.padding-top--0@desk
```

## Setup

Including _wgs.scss in your sass project gives you access to **two sass mixins**:

### wgsSetup

```scss
/// @access public
/// @param {list} $fixedWidths [()] - fixed sizes to handle
/// @param {map} $breakpoints [()] - breakpoints
/// @param {list} $gutters [()] - gutters to handle
/// @param {boolean} $mobileFirst [()] - mobile first ? (or desktop first)
/// @example
///   @include wgsSetup(
///       $fixedWidths : 200px 300px,
///       $breakpoints : (
///           tablet     : 480px,
///           big-tablet : 660px,
///           desk       : 990px
///       ),
///       $gutters : 12px 16px 18px 22px
///   );
@mixin wgsSetup(
    $fixedWidths  : (),
    $breakpoints  : (),
    $gutters      : (),
    $mobileFirst  : true
){ /*...*/ }
```

### wgsSetup

```scss
/// @access public
/// @param {string} $breakpoint - Breakpoint name. Must match one of wgsSetup() $breakpoints param
/// @example
///   .selector{
///       color: pink;
///       @include mq(tablet)  { color: blue; }
///       @include mq(desktop) { color: red;  }
///   }
@mixin mq($breakpointName){ /*...*/ }

```

## Tribute

This project was heavily inspired by [Harry Roberts grid system](https://github.com/csswizardry/csswizardry-grids)



## Demo

Le fichier demo.php présente quelques exemples d'utilisation, notamment pour les grilles fixes

## Roadmap

- Documentation
- Push et pull


