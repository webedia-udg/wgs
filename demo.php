<?php
function c(){
    return '#' . substr(md5(rand()), 0, 6);
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

    <link rel="stylesheet" href="demo.css" media="screen"/>
</head>

<body>

    <div class="wrapper">

        <h2>Note sur la nomenclature</h2>
        <p>
            .tablet => à partir de 480px<br/>
            .big-tablet => à partir de 660px<br/>
            .desk => à partir de 990px
        </p>

        <p>Les valeurs et les noms sont configurables. ici :</p>

        <code>
            $useFixedGrid: true;<br/>
            $fixedWidths: 300px;<br/>
            $breakpoints: (<br/>
                tablet     : 480px,<br/>
                big-tablet : 660px,<br/>
                desk       : 990px<br/>
            );<br/>
        </code>

        <div class="grid">

                <div class="grid__item 1/2@tablet">

                    <div class="grid"> 
                        <div class="grid__item">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">A[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/3@big-tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">A[2]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 2/3@big-tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">A[3]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item 1/2@tablet">
                
                    <div class="grid">

                        <div class="grid__item 1/2">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">B[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">B[2]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2@tablet  1/3@big-tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">B[3]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item  1/2@tablet  1/3@big-tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">B[4]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item  1/3@big-tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">B[5]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item 1/3 1/2@tablet">
                    <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                        <div class="bloc__content">C</div>
                    </div>
                </div><!--

             --><div class="grid__item 2/3 1/2@tablet">

                    <div class="grid  grid--rev">

                        <div class="grid__item 1/2@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">D[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">D[2]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item">

                    <div class="grid  grid--full">

                        <div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">E[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">E[2]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">E[3]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">E[4]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item">

                    <div class="grid grid--rev@desk grid--full">

                        <div class="grid__item 1/2 1/4@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">F[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/4@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">F[2]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">F[3]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/4@desk">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">F[4]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item">

                    <div class="grid grid--center@tablet">

                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">G[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">G[2]</div>
                            </div>
                        </div>

                    </div>

                </div><!--

             --><div class="grid__item">

                    <div class="grid grid--right@tablet">

                        <div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">H[1]</div>
                            </div>
                        </div><!--

                     --><div class="grid__item 1/2 1/3@tablet">
                            <div class="bloc bloc--50" style="background-color: <?php echo c() ?>">
                                <div class="bloc__content">H[2]</div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        <h3>4 colonnes en desk, 2 en tablette, 1 en mobile</h3>
    
        <div class="grid">
            <div class="grid__item 1/2@tablet 1/4@desk">
                <div class="bloc bloc--150">
                    <div 1/2@class="bloc__content">.tablet 1/4@.desk</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2@tablet 1/4@desk">
                <div class="bloc bloc--150">
                    <div 1/2@class="bloc__content">.tablet 1/4@.desk</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2 1/4@desk">
                <div class="bloc bloc--150">
                    <div class="bloc__content">.1/2 1/4@.desk</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2 1/4@desk">
                <div class="bloc bloc--150">
                    <div class="bloc__content">.1/2 1/4@.desk</div>
                </div>
            </div>
        </div>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--150">
                    <div class="bloc__content">.big-tablet-300px</div>
                </div>
            </div><!--
         --><div class="grid__item">
                <div class="bloc bloc--150">
                    <div class="bloc__content"></div>
                </div>
            </div>
        </div>

        <h3>2 colonnes, celle de gauche fixe à 300px à partir de 660px</h3>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--150">
                    <div class="bloc__content">.big-tablet-300px</div>
                </div>
            </div><!--
         --><div class="grid__item">
                <div class="bloc bloc--150">
                    <div class="bloc__content"></div>
                </div>
            </div>
        </div>

        <hr/>

        <h3>2 colonnes, celle de droite fixe à 300px ET <b>visible</b> à partir de 660px</h3>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item">
                <div class="bloc bloc--150">
                    <div class="bloc__content"></div>
                </div>
            </div><!--
         --><div class="grid__item 300px@big-tablet visible@big-tablet">
                <div class="bloc bloc--150">
                    <div class="bloc__content">.big-tablet-visible .big-tablet-300px</div>
                </div>
            </div>
        </div>

        <hr/>

        <h3>3 cases. Les 2 premières à 50% entre 480px et 660px; la 3eme fixe à partir 660px</h3>

        <div class="grid grid--fixed@desk">
            <div class="grid__item 1/2@tablet 1/1@desk">
                <div class="bloc bloc--150">
                    <div 1/2@class="bloc__content">.tablet 1/1@.desk</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2@tablet desk-300px">
                <div class="bloc bloc--150">
                    <div 1/2@class="bloc__content">tablet desk-300px</div>
                </div>
            </div><!--
         --><div class="grid__item 1/1@desk">
                <div class="bloc bloc--150">
                    <div class="bloc__content"></div>
                </div>
            </div>
        </div>

        <hr/>


        <div class="grid grid--fixed@big-tablet">

            <div class="grid__item">
                <div class="grid">
                    <div class="grid__item 1/2@tablet 1/1@big-tablet">
                        <div class="bloc bloc--150">
                            <div 1/2@class="bloc__content">.tablet 1/1@.big-tablet</div>
                        </div>
                    </div><!--
                 --><div class="grid__item 1/2@tablet 1/1@big-tablet">
                        <div class="bloc bloc--150">
                            <div 1/2@class="bloc__content">.tablet 1/1@.big-tablet</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--150">
                            <div class="bloc__content"></div>
                        </div>
                    </div>
                </div>

            </div><!--
         --><div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--600">
                    <div class="bloc__content">.big-tablet-300px</div>
                </div>
            </div>

        </div>

        <hr/>

        <div class="grid grid--fixed@big-tablet">


            <div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--600">
                    <div class="bloc__content">.big-tablet-300px</div>
                </div>
            </div><!--
         --><div class="grid__item">
                <div class="grid">
                    <div class="grid__item">
                        <div class="bloc bloc--150">
                            <div class="bloc__content"></div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--150">
                            <div class="bloc__content"></div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--150">
                            <div class="bloc__content"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr/>

        <div class="grid">
            <div class="grid__item 2/3@desk">

                <div class="grid grid--fixed@tablet">

                    <div class="grid__item 300px@tablet">
                        <div class="bloc bloc--600">
                            <div class="bloc__content"></div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="grid">
                            <div class="grid__item">
                                <div class="bloc bloc--300">
                                    <div class="bloc__content"></div>
                                </div>
                            </div><!--
                         --><div class="grid__item">
                                <div class="bloc bloc--300">
                                    <div class="bloc__content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!--
         --><div class="grid__item 1/3@desk">
                <div class="grid">
                    <div class="grid__item">
                        <div class="bloc bloc--300">
                            <div class="bloc__content"></div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--300">
                            <div class="bloc__content"></div>
                        </div>
                    </div>
                </div>

            </div>



        </div>


        <div class="hidden visible@tablet">
            caché en mobile, visible à partir de tablette"
        </div>
        <div class="desk-hidden">
            caché en desktop
        </div>
        <div class="hidden@tablet">
            caché en tablette
        </div>

    </div>

</body>
</html>






