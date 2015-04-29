Whatever Grid System (WGS)
===

####WGS is a library allowing the generating of a set of OOCSS classes. Theses classes are heavily oriented toward the creation responsive webpage structures.

This library est highly customisable : gutters, widths, spaces, breakpoint names, mobile first.

It contains :

* grid classes, with ratio and **fixed widths**
* **RTL support**
* grid gutter classes, with an option for **distinct vertical/horizontal rythms**
* spacing classes
* visibility classes

Thoses classes follow the BEM convention, augmented with a new paradigm : **the "@breakpoint" sufix.**

This project fully [OOCSS](https://github.com/stubbornella/oocss/wiki) :

## Demo

https://jsfiddle.net/6x1th0n1/4/embedded/result/

## Prerequisites

* sass > 3.4 or libsass > ??? (find out)


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
    $breakpoints : (
        tablet     : 480px,
        big-tablet : 660px,
        desk       : 990px
    ),
    $gutters : 12px 16px 18px 22px,
    $fixedWidths : 200px 300px,
    $namespace: false
);
```

```html
<!-- template.html -->
<div class="grid">
    <div class="1/2@big-tablet 1/3@desk"></div>
    <div class="1/2@big-tablet 1/3@desk"></div>
    <div class="1/3@desk"></div>
</div>
<div class="grid grid--fixed@desk grid--12px grid--22px@desk">
    <div class="1/2@tablet 300px@desk"></div>
    <div class="1/2@tablet 1/1@desk"></div>
</div>
<div class="padding-top--12px padding-top--22px@desk"></div>
```

## Classes naming


``[namespace]class[__element][--modifier][@breakpoint]``

## Vocabulary

`.grid[@breakpointName]` makes an element become a grid, optionnaly starting at a breakpoint. `breakpointName` depends of the setup. Its children become `display: inline-block`.

Ex : 
```
.grid           // Always a grid
.u-grid         // Always a grid ('u-' namespace)
.grid@foo       // Grid behaviour from "foo" breakpoint
```

`.[1-12]/[1-12][@breakpoint]` represents a width. Works inside and outside a grid. `breakpointName` depends of the setup.

Ex:

```
.1/1
.1/1@foo
.1/6@bar
.u-1/6@bar // '-u' namespace
.12/12
```

`[namespace]padding[-(top|right|bottom|left|hori|vert)]--[XX][@breakpoint]` adds a padding on top/right/bottom/left of an element. `XX` is one the values defined in `$gutters` setup parameter.

Ex :

```
.padding--42           // Adds a 42px padding around the element
.padding-top--42       // Adds a 42px padding-top on the element
.padding-left--42@foo   // Adds a 42px padding-left on the element, starting at "foo" breakpoint
.padding-hori--42      // Adds a 42px horizontal padding (right + left)
.padding-hori--42@foo  // Adds a 42px horizontal padding (right + left)), starting at "foo" breakpoint
.padding-vert--0@foo   // Removes a vertical (top + bottom) by setting it a 0, starting at "foo" breakpoint
```



## Setup

Including ``_wgs.scss`` in your sass project gives you access to **two sass mixins**:

### wgsSetup()

```scss
/// @access public
/// @param {list} $fixedWidths [()] - fixed sizes to handle
/// @param {map} $breakpoints [()] - breakpoints
/// @param {list} $gutters [()] - gutters to handle
/// @param {boolean} $mobileFirst [()] - mobile first ? (or desktop first)
/// @param {string} $namespace [false] - namespace used by wgs
/// @example
///   @include wgsSetup(
///       $breakpoints : (
///           tablet     : 480px,
///           big-tablet : 660px,
///           desk       : 990px
///       ),
///       $gutters : 12px 16px 18px 22px,
///       $fixedWidths : 200px 300px
///   );
@mixin wgsSetup(
    $breakpoints  : (),
    $gutters      : (),
    $fixedWidths  : (),
    $mobileFirst  : true,
    $namespace    : false
){ /*...*/ }
```

### mq()

```scss
/// Media Query mixin
/// 
/// @access public
/// @param {string} $from [false] - Apply rules from this breakpoint name
/// @param {string} $until [false] - Apply rules until this breakpoint name
/// @param {string} $and [false] - Additional media query parameters
/// @example
///   @include mq(tablet){ color: red }; // Results depends of the mobile first approach
///   @include mq($from: tablet){ color: red };
///   @include mq($until: desktop){ color: red };
/// 
@mixin mq(
    $from: false,
    $until: false,
    $and: false
) { /*...*/ }
```

## Tribute

This project was heavily inspired by [Harry Roberts grid system](https://github.com/csswizardry/csswizardry-grids) for the grid part, and [sass-mq](https://github.com/sass-mq/sass-mq) for the modulable mq() mixin.




