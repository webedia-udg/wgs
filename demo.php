<?php
function c(){
    $randColor = '#' . substr(md5(rand()), 0, 6);
    $contrastColor = hexdec($randColor) > 0xffffff/2 ? '#000':'#fff';
    return 'style="background:' . $randColor . ';color:' . $contrastColor . '"';
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>WGS - demo</title>
    <meta name="description" content="tests RWD"/>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
    <meta http-equiv="cleartype" content="on">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="demo.css" media="screen"/>
<body>

    <div class="wrapper">

        <h1 class="main-title">Demo</h3>

        <code>// Sample configuration

@include wgsSetup(
    $fixedWidths : 200px 300px,
    $breakpoints : (
        tablet     : 480px,
        big-tablet : 660px,
        desk       : 990px
    ),
    $gutters : 12px 16px 18px 22px
);</code>

        <h3 class="title">Example 1</h3>
        <p>Various nested grids with ratios widths</p>


        <div class="js-display-code">
            <div class="grid grid--22px">
                <div class="grid__item 1/2@tablet">
                    <div class="grid"> 
                        <div class="grid__item">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">A[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/3@big-tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">A[2]</div>
                            </div>
                        </div>
                        <div class="grid__item 2/3@big-tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">A[3]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__item 1/2@tablet">
                    <div class="grid">
                        <div class="grid__item 1/2">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">B[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">B[2]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2@tablet  1/3@big-tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">B[3]</div>
                            </div>
                        </div>
                        <div class="grid__item  1/2@tablet  1/3@big-tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">B[4]</div>
                            </div>
                        </div>
                        <div class="grid__item  1/3@big-tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">B[5]</div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="grid__item 1/3@tablet">
                    <div class="bloc bloc--50" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>

                <div class="grid__item 2/3@tablet">

                    <div class="grid grid--rev">
                        <div class="grid__item 1/2@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">D[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">D[2]</div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="grid__item">
                    <div class="grid">
                        <div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">E[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">E[2]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">E[3]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">E[4]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__item">
                    <div class="grid grid--rev@desk">
                        <div class="grid__item 1/2 1/2@tablet 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">F[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/2@tablet 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">F[2]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">F[3]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/4@desk">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">F[4]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__item">
                    <div class="grid grid--center@tablet">
                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">G[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">G[2]</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__item">
                    <div class="grid grid--right@tablet">
                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">H[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" <?php echo c() ?>>
                                <div class="bloc__content">H[2]</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <h3 class="title">Example 2</h3>

        <p>Grid without gutter</p>

        <div class="js-display-code">
            <div class="grid">
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p>Grid with 12px gutter</p>

        <div class="js-display-code">
            <div class="grid grid--12px">
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p>Grid with 22px gutter</p>

        <div class="js-display-code">
            <div class="grid grid--22px">
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p>Grid without gutter (default) and with a 22px gutter from "desk" breakpoint</p>

        <div class="js-display-code">
            <div class="grid grid--22px@desk">
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <p>Grid with 12px gutter gutter (default), and no gutter from "desk" breakpoint</p>

        <div class="js-display-code">
            <div class="grid grid--12px grid--0@desk">
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/3">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 3</h3>

        <p>2 columns grid. Default layout has 2 rows with one cell 100% wide per row.<br/>
            At "tablet" breakpoint, the layout becomes "fixed" on one row with first cell 300px wide</p>
    
        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item 300px@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 4</h3>

        <p>2 columns grid, 50% wide. First cell becomes 300px wide at "tablet" breakpoint</p>


        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item 1/2 300px@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/2 1/1@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 5</h3>

        <p>2 colonnes grid. The right one is 300px wide AND <b>visible</b> from "big-tablet" breakpoint</p>

        <div class="js-display-code">

            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 300px@big-tablet visible@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">Example 5</h3>

        <p>Kind of complicated grid : </p>

        <ul>
            <li>"base" breakpoint (default) : layout has 2 rows. Two cells 50% wide on first row, one cell 100% wide on second row</li>
            <li>"tablet" breakpoint : layout becomes "fixed" at "tablet" breakpoint, on one row. First cell is 200px wide, the 2 others share 50% of remaining space</li>
            <li>"big-tablet" breakpoint : second cell becomes 300px wide. The last cell takes all remaining space</li>
            <li>"desk" breakpoint : first cell becomes 300px wide and last cell still ocupy remaining space</li>
        </ul>


        <div class="js-display-code">
            <div class="grid grid--fixed@tablet grid--22px">
                <div class="grid__item 1/2 200px@tablet 300px@desk">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/2 300px@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 1/1 1/2@tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 6</h3>

        <p>3 cells layout. First two cells 50% wide from "tablet" breakpoint, third one 300px wide from "big-tablet" breakpoint</p>

        <div class="js-display-code">

            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item 1/2@tablet 1/1@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item 1/2@tablet 1/1@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>
                <div class="grid__item 300px@big-tablet 1/1@desk">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">C</div>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="title">Example 7</h3>

        <p>2 cells grid. First cell contains another grid with its own behaviour.<br/>
            Second cell is hidden and becomes visible and 300px wide from "big-tablet" breakpoint.</p>

        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item">
                    <div class="grid">
                        <div class="grid__item 1/2@tablet 1/1@big-tablet">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">A[1]</div>
                            </div>
                        </div>
                        <div class="grid__item 1/2@tablet 1/1@big-tablet">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">A[2]</div>
                            </div>
                        </div>
                        <div class="grid__item">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">A[3]</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item 300px@big-tablet">
                    <div class="bloc bloc--300" <?php echo c() ?>>
                        <div class="bloc__content">B</div>
                    </div>
                </div>

            </div>
        </div>


        <h3 class="title">Example 8</h3>

        <p>2 cells grid. First cell becomes 300px wide from "big-tablet" breakpoint. Second cells gets remaining space, and contains another grid with its own behaviour</p>


        <div class="js-display-code">
            <div class="grid grid--18px grid--fixed@big-tablet">
                <div class="grid__item 300px@big-tablet">
                    <div class="bloc bloc--300" <?php echo c() ?>>
                        <div class="bloc__content">A</div>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid">
                        <div class="grid__item">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">B[1]</div>
                            </div>
                        </div>
                        <div class="grid__item">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">B[2]</div>
                            </div>
                        </div>
                        <div class="grid__item">
                            <div class="bloc bloc--100" <?php echo c() ?>>
                                <div class="bloc__content">B[3]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <h3 class="title">Example 9</h3>

        <p>Kind of complicayed grid :</p>

        <ul>
            <li>base grid has 2 cells</li>
            <li>First cell contains a grid, and is 2/3 wide from "desk" breakpoint</li>
            <li>Second cell contains another grid, and is 1/3 wide from "desk breakpoint</li>
            <li>First nested grid has 2 cells, the first one 300px wide from "tablet" breakpoint. The second one gets remaining space and contains antoher grid</li>
        </ul>


        <div class="js-display-code">

            <div class="grid grid--22px">
                <div class="grid__item 2/3@desk">
                    <div class="grid grid--22px grid--fixed@tablet">
                        <div class="grid__item 300px@tablet">
                            <div class="bloc bloc--300" <?php echo c() ?>>
                                <div class="bloc__content">A</div>
                            </div>
                        </div>
                        <div class="grid__item">
                            <div class="grid">
                                <div class="grid__item">
                                    <div class="bloc bloc--150" <?php echo c() ?>>
                                        <div class="bloc__content">B[1]</div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="bloc bloc--150" <?php echo c() ?>>
                                        <div class="bloc__content">B[2]</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item 1/3@desk">
                    <div class="grid">
                        <div class="grid__item">
                            <div class="bloc bloc--150" <?php echo c() ?>>
                                <div class="bloc__content">C[1]</div>
                            </div>
                        </div>
                        <div class="grid__item">
                            <div class="bloc bloc--150" <?php echo c() ?>>
                                <div class="bloc__content">C[2]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <h3 class="title">Example 10</h3>

        <p>Some visibility classes</p>

        <div class="js-display-code">
            <div class="grid grid--18px">
                <div class="grid__item visible@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">Visible from "big-tablet" beakpoint (so hidden before)</div>
                    </div>
                </div>
                <div class="grid__item hidden@big-tablet">
                    <div class="bloc bloc--150" <?php echo c() ?>>
                        <div class="bloc__content">Hidden from "big-tablet" breakpoint (so visible before)</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(".js-display-code").each(function(i, element){
            var $this = $(this);

            var $html = $this.clone();

            $html.find(".bloc").each(function(j, element){
                $(element).replaceWith($.trim($(element).text()));
            });

            var content = $html.html();
            console.log(content);
            content = $.trim(content);
            content = content.replace(/(<div class="grid__item[^"]*">)\s+(<\/div>)/g, "$1$2");
            content = content.replace(/^\s{12,12}/gm, "");
            $("<code></code>").text(content).insertAfter($this);

        });

    </script>

</body>
</html>






