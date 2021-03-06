<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>WGS - demo</title>
    <meta name="description" content="tests RWD"/>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
    <meta http-equiv="cleartype" content="on">

    <style>
        <?php include "demo.css" ?>
    </style>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="demo.css" media="screen"/>
<body>

    <div class="wrapper">

        <h1 class="main-title">WGS Demo</h3>

        <h2 class="secondary-title">WGS is a library allowing the generating of a set of OOCSS classes. Theses classes are heavily oriented toward the creation responsive webpage structures.</h2>
        <p>Source code available on <a href="https://github.com/webedia-udg/wgs">github</a></p>

        <code>@import "wgs";

// Sample configuration:
// [1] Enable the use of three named breakpoints.
//     The first one starts at 480px, and is named "tablet".
//     The second one starts at 660px and is named "tablet". Guess the third one :)
// [2] Enable the use of gutters widths and spacings classes, with breakpoint sufixes:
//     .grid--12px, .grid--22px@desk, .padding--12px, .padding-top--22px@desk...
// [3] Enable the use of 200px and 300px fixed widths. We can use .200px and .300px classes,
//     with sufixes provided in $breakpoints parameter: .200px@tablet, 300px@desk...
// [4] No namespace. Could have been 'u-' or "myNamespace"
// [5] Left to right direction
// [6] parent class to handle when the direction needs to be flipped
@include wgsSetup(
    $breakpoints : (                // [1]
        tablet     : 480px,
        big-tablet : 660px,
        desk       : 990px
    ),
    $gutters : 12px 16px 18px 22px, // [2]
    $fixedWidths : 200px 300px,     // [3]
    $namespace : false              // [4]
    $direction: 'ltr',              // [5]
    $directionRevClass: 'arabic'    // [6]
);</code>

        <h3 class="title">Example 1: ratios widths</h3>
        <p class="third-title">Various nested grids with ratios widths:</p>


        <div class="js-display-code">
            <div class="grid grid--22px">
                <div class="1/2@tablet">
                    <div class="grid"> 
                        <div>
                            <div class="bloc bloc--50">
                                <div class="bloc__content">A[1]</div>
                            </div>
                        </div>
                        <div class="1/3@big-tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">A[2]</div>
                            </div>
                        </div>
                        <div class="2/3@big-tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">A[3]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="1/2@tablet">
                    <div class="grid">
                        <div class="1/2">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">B[1]</div>
                            </div>
                        </div>
                        <div class="1/2">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">B[2]</div>
                            </div>
                        </div>
                        <div class="1/2@tablet 1/3@big-tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">B[3]</div>
                            </div>
                        </div>
                        <div class="1/2@tablet 1/3@big-tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">B[4]</div>
                            </div>
                        </div>
                        <div class="1/3@big-tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">B[5]</div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="1/3@tablet">
                    <div class="bloc bloc--50">
                        <div class="bloc__content">C</div>
                    </div>
                </div>

                <div class="2/3@tablet">

                    <div class="grid grid--rev">
                        <div class="1/2@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">D[1]</div>
                            </div>
                        </div>
                        <div class="1/2@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">D[2]</div>
                            </div>
                        </div>

                    </div>

                </div>

                <div>
                    <div class="grid">
                        <div class="1/2 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">E[1]</div>
                            </div>
                        </div>
                        <div class="1/2 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">E[2]</div>
                            </div>
                        </div>
                        <div class="1/2 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">E[3]</div>
                            </div>
                        </div>
                        <div class="1/2 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">E[4]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid grid--rev@desk">
                        <div class="1/2 1/2@tablet 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">F[1]</div>
                            </div>
                        </div>
                        <div class="1/2 1/2@tablet 1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">F[2]</div>
                            </div>
                        </div>
                        <div class="1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">F[3]</div>
                            </div>
                        </div>
                        <div class="1/4@desk">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">F[4]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid grid--center@tablet">
                        <div class="1/2 1/3@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">G[1]</div>
                            </div>
                        </div>
                        <div class="1/2 1/3@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">G[2]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid grid--right@tablet">
                        <div class="1/2 1/3@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">H[1]</div>
                            </div>
                        </div>
                        <div class="1/2 1/3@tablet">
                            <div class="bloc bloc--50">
                                <div class="bloc__content">H[2]</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <h3 class="title">Example 2: gutters</h3>

        <p class="third-title">Grid without gutter:</p>

        <div class="js-display-code">
            <div class="grid">
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="third-title">Grid with 12px gutter:</p>

        <div class="js-display-code">
            <div class="grid grid--12px">
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="third-title">Grid with 22px gutter:</p>

        <div class="js-display-code">
            <div class="grid grid--22px">
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="third-title">Grid without gutter (default) and with a 22px gutter from "desk" breakpoint:</p>

        <div class="js-display-code">
            <div class="grid grid--22px@desk">
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="third-title">Grid with 12px gutter gutter (default), and no gutter from "desk" breakpoint:</p>

        <div class="js-display-code">
            <div class="grid grid--12px grid--0@desk">
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/3">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 3: grid example with fixed width cell</h3>

        <p class="third-title">2 columns grid. Default layout has 2 rows with one cell 100% wide per row.<br/>
            At "tablet" breakpoint, the layout becomes "fixed" on one row with first cell 300px wide:</p>
    
        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="300px@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div>
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 4: grid example with fixed width cell</h3>

        <p class="third-title">2 columns grid, 50% wide. First cell becomes 300px wide at "tablet" breakpoint:</p>


        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="1/2 300px@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/2 1/1@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 5: grid example with fixed width cell and visibility class</h3>

        <p class="third-title">2 colonnes grid. The right one is 300px wide AND <b>visible</b> from "big-tablet" breakpoint:</p>

        <div class="js-display-code">

            <div class="grid grid--18px grid--fixed@big-tablet">
                <div>
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="300px@big-tablet visible@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 5: kind of complicated grid</h3>

        <ul>
            <li>"base" breakpoint (default) : layout has 2 rows. Two cells 50% wide on first row, one cell 100% wide on second row</li>
            <li>"tablet" breakpoint : layout becomes "fixed" at "tablet" breakpoint, on one row. First cell is 200px wide, the 2 others share 50% of remaining space</li>
            <li>"big-tablet" breakpoint : second cell becomes 300px wide. The last cell takes all remaining space</li>
            <li>"desk" breakpoint : first cell becomes 300px wide and last cell still ocupy remaining space</li>
        </ul>


        <div class="js-display-code">
            <div class="grid grid--fixed@tablet grid--22px">
                <div class="1/2 200px@tablet 300px@desk">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/2 300px@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="1/1 1/2@tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 6: another grid with fixed width</h3>

        <p class="third-title">3 cells layout. First two cells 50% wide from "tablet" breakpoint, third one 300px wide from "big-tablet" breakpoint:</p>

        <div class="js-display-code">

            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="1/2@tablet 1/1@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="1/2@tablet 1/1@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="300px@big-tablet 1/1@desk">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 7: nested grids</h3>

        <p class="third-title">2 cells grid. First cell contains another grid with its own behaviour.<br/>
            Second cell is hidden and becomes visible and 300px wide from "big-tablet" breakpoint:</p>

        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div>
                    <div class="grid">
                        <div class="1/2@tablet 1/1@big-tablet">
                            <div class="bloc bloc--100">
                                <div class="bloc__content">A[1]</div>
                            </div>
                        </div>
                        <div class="1/2@tablet 1/1@big-tablet">
                            <div class="bloc bloc--100">
                                <div class="bloc__content">A[2]</div>
                            </div>
                        </div>
                        <div>
                            <div class="bloc bloc--100">
                                <div class="bloc__content">A[3]</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="300px@big-tablet">
                    <div class="bloc bloc--300">
                        <div class="bloc__content">B</div>
                    </div>
                </div>

            </div>
        </div>


        <h3 class="title">Example 8: another nester grid</h3>

        <p class="third-title">2 cells grid. First cell becomes 300px wide from "big-tablet" breakpoint. Second cells gets remaining space, and contains another grid with its own behaviour:</p>


        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="300px@big-tablet">
                    <div class="bloc bloc--300">
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div>
                    <div class="grid">
                        <div>
                            <div class="bloc bloc--100">
                                <div class="bloc__content">B[1]</div>
                            </div>
                        </div>
                        <div>
                            <div class="bloc bloc--100">
                                <div class="bloc__content">B[2]</div>
                            </div>
                        </div>
                        <div>
                            <div class="bloc bloc--100">
                                <div class="bloc__content">B[3]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <h3 class="title">Example 9: complicated nested grid</h3>

        <ul>
            <li>base grid has 2 cells</li>
            <li>First cell contains a grid, and is 2/3 wide from "desk" breakpoint</li>
            <li>Second cell contains another grid, and is 1/3 wide from "desk breakpoint</li>
            <li>First nested grid has 2 cells, the first one 300px wide from "tablet" breakpoint. The second one gets remaining space and contains antoher grid</li>
        </ul>


        <div class="js-display-code">

            <div class="grid grid--22px">
                <div class="2/3@desk">
                    <div class="grid grid--22px grid--fixed@tablet">
                        <div class="300px@tablet">
                            <div class="bloc bloc--300">
                                <div class="bloc__content">A</div>
                            </div>
                        </div>
                        <div>
                            <div class="grid">
                                <div>
                                    <div class="bloc bloc--150">
                                        <div class="bloc__content">B[1]</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="bloc bloc--150">
                                        <div class="bloc__content">B[2]</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="1/3@desk">
                    <div class="grid">
                        <div>
                            <div class="bloc bloc--150">
                                <div class="bloc__content">C[1]</div>
                            </div>
                        </div>
                        <div>
                            <div class="bloc bloc--150">
                                <div class="bloc__content">C[2]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 10: Distinct vertical and horizontal rythme</h3>

        <p class="third-title">Grid with 18px vertical gutter:</p>
        <div class="js-display-code">
            <div class="grid grid--18px-vert">
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">A</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">B</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">C</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">D</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">E</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">F</div></div></div>
            </div>
        </div>

        <p class="third-title">Grid with 18px horizontal gutter:</p>
        <div class="js-display-code">
            <div class="grid grid--18px-hori">
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">A</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">B</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">C</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">D</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">E</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">F</div></div></div>
            </div>
        </div>

        <p class="third-title">Grid with 12px horizontal gutter and 22px vertical gutter:</p>
        <div class="js-display-code">
            <div class="grid grid--12px-hori grid--22px-vert">
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">A</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">B</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">C</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">D</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">E</div></div></div>
                <div class="1/3"><div class="bloc bloc--150"><div class="bloc__content">F</div></div></div>
            </div>
        </div>


        <h3 class="title">Example 10: visibility classes</h3>

        <div class="js-display-code">
            <div class="grid grid--18px">
                <div class="visible@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">Visible from "big-tablet" beakpoint (so hidden before)</div>
                    </div>
                </div>
                <div class="hidden@big-tablet">
                    <div class="bloc bloc--150">
                        <div class="bloc__content">Hidden from "big-tablet" breakpoint (so visible before)</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <script>

        // Returns true/false id a color is dark or not
        function isDarkColor(color){
            var r = (color >> 16) & 0xff;  // extract red
            var g = (color >>  8) & 0xff;  // extract green
            var b = (color >>  0) & 0xff;  // extract blue

            var luma = 0.2126 * r + 0.7152 * g + 0.0722 * b; // per ITU-R BT.709

            return luma < 100;

        }

        // Random colors for .bloc (better reading)
        var $bloc = document.querySelectorAll(".bloc");
        Array.prototype.forEach.call($bloc, function(element, i){
            var randomColor     = Math.round(Math.random() * 0xFFFFFF);
            var textColor       = isDarkColor(randomColor) ? '#ffffff' : '#000000';
            var backgroundColor = '#' + randomColor.toString(16);

            element.style.backgroundColor = backgroundColor;
            element.style.color = textColor;  

        });

        // Display source code after each example
        var $jsDisplayCode = document.querySelectorAll(".js-display-code");
        Array.prototype.forEach.call($jsDisplayCode, function(element, i){

            var $html = element.cloneNode(true);

            Array.prototype.forEach.call($html.querySelectorAll(".bloc"), function(element, j){
                element.parentNode.innerHTML = element.textContent.trim();
            });

            var content = $html.innerHTML;
            content = content.trim();
            //content = content.replace(/(<div class="grid__item[^"]*">)\s+(<\/div>)/g, "$1$2");
            content = content.replace(/^\s{12,12}/gm, "");
            var $code = document.createElement("code");
            $code.textContent = content;
            element.insertAdjacentHTML('afterend', $code.outerHTML);

        });


        var cssRules = document.querySelector("head style").textContent;

        var breakpoints = [{
            value: 480,
            label: "Small tablet"
        }, {
            value: 660,
            label: "Big tablet"
        }, {
            value: 990,
            label: "Desktop"
        }];

        // Displays "breakpoint min-with: xxx"
        function getWrapperWidth($wrapper) {
            var width = $wrapper.offsetWidth;
            var i = breakpoints.length-1;
            while(breakpoints[i] && width<breakpoints[i].value){
                i--;
            }

            if (i<0){
                return 'Default style (no breakpoint)';
            }
            else{
                return breakpoints[i].label + " breakpoint (min-width: " + breakpoints[i].value + "px)";
            }
            
        }

        // Generate fake iframes with resize handles
        Array.prototype.forEach.call($jsDisplayCode, function(element, i){

            var $wrapper    = document.createElement('div');
            var $handle     = document.createElement('div');

            $wrapper.className  = "iframe-wrapper";
            $handle.className   = "iframe-wrapper__handle";

            element.parentNode.insertBefore($wrapper, element);
            $wrapper.appendChild(element);
            $wrapper.appendChild($handle);
            
            var content = '<style>' + cssRules + '</style>' + element.innerHTML;

            element.insertAdjacentHTML('afterend', '<iframe frameborder="0"></iframe>');
            
            var $iframe =  $wrapper.querySelector('iframe');
            $iframe.contentWindow.document.write(content);
            element.parentNode.removeChild(element);

            setTimeout(function(){
                $wrapper.style.height = $iframe.contentWindow.document.body.offsetHeight + 10 + 'px';
            },1000);

            $handle.setAttribute('data-width', getWrapperWidth($wrapper));
            $handle.addEventListener("mousedown", function(e){
                startX = e.clientX;
                startWidth = parseInt(document.defaultView.getComputedStyle($wrapper).width, 10);
                document.addEventListener('mousemove', doDrag);
                document.addEventListener('mouseup', stopDrag);
            });

            function doDrag(e) {
                var width = startWidth + e.clientX - startX;

                for(var i = 0, length = breakpoints.length; i < length; i++) {                
                    if (Math.abs(width - breakpoints[i]) < 10) {
                        width = breakpoints[i];
                    }
                }
               $handle.setAttribute('data-width', getWrapperWidth($wrapper));
               $wrapper.style.width = width + 'px';
            }

            function stopDrag(e) {
                document.removeEventListener('mousemove', doDrag);
                document.removeEventListener('mouseup', stopDrag);
            }
        });

    </script>

</body>
</html>






