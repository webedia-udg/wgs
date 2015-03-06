Whatever Grid System (WGS)
===

####WGS is a library allowing the generating of a set of OOCSS classes. Theses classes are heavily oriented toward the creation responsive webpage structures.

This library est highly customisable : gutters, widths, spaces, breakpoint names, mobile first.

It contains :

* grid classes, with ratio and **fixed widths**.
* spacing classes
* visibility classes

Thoses classes follow the BEM convention, augmented with a new paradigm : **the "@breakpoint" sufix.**

This project fully [OOCSS](https://github.com/stubbornella/oocss/wiki) :

## Demo

https://fiddle.jshell.net/6x1th0n1/3/show/light/

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
<!-- template.html -->
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

Including ``_wgs.scss`` in your sass project gives you access to **two sass mixins**:

### wgsSetup()

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

### mq()

```scss
/// Media Query mixin
/// 
/// @access public
/// @param {string} $from [false] - Breakpoint name from witch rules sould be added
/// @param {string} $until [false] - Breakpoint name until witch rules sould be added
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




