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

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="demo.css" media="screen"/>
<body>

    <div class="wrapper">

        <h1 class="main-title">Démonstration</h3>

        <code>// Configuration

@include wgsSetup(
    $fixedWidths : 200px 300px,
    $gutter      : 12px,
    $breakpoints : (
        tablet     : 480px 16px,
        big-tablet : 660px 20px,
        desk       : 990px 24px
    )
);</code>

        <p><b>note :</b> Les .grid__item ne doivent avoir aucun espace entre eux, ou alors des espaces commentaires (méthode utilisée ici). Ce façon de faire est due à l'affichage en display-block de ces éléments.</p>


        <h3 class="title">Grilles imbriquées avec ratios</h3>

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


        <code>&lt;div class="grid">

    &lt;div class="grid__item 1/2@tablet">

        &lt;div class="grid"> 
            &lt;div class="grid__item">&lt;/div>
            &lt;div class="grid__item 1/3@big-tablet">&lt;/div>
            &lt;div class="grid__item 2/3@big-tablet">&lt;/div>
        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item 1/2@tablet">
    
        &lt;div class="grid">
            &lt;div class="grid__item 1/2">&lt;/div>
            &lt;div class="grid__item 1/2">&lt;/div>
            &lt;div class="grid__item 1/2@tablet 1/3@big-tablet">&lt;/div>
            &lt;div class="grid__item 1/2@tablet 1/3@big-tablet">&lt;/div>
            &lt;div class="grid__item 1/3@big-tablet">&lt;/div>

        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item 1/3 1/2@tablet">&lt;/div>

    &lt;div class="grid__item 2/3 1/2@tablet">

        &lt;div class="grid  grid--rev">
            &lt;div class="grid__item 1/2@tablet">&lt;/div>
            &lt;div class="grid__item 1/2@tablet">&lt;/div>
        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item">

        &lt;div class="grid  grid--full">
            &lt;div class="grid__item 1/2 1/4@desk">&lt;/div>
            &lt;div class="grid__item 1/2 1/4@desk">&lt;/div>
            &lt;div class="grid__item 1/2 1/4@desk">&lt;/div>
            &lt;div class="grid__item 1/2 1/4@desk">&lt;/div>
        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item">

        &lt;div class="grid grid--rev@desk grid--full">
            &lt;div class="grid__item 1/2 1/4@tablet">&lt;/div>
            &lt;div class="grid__item 1/2 1/4@tablet">&lt;/div>
            &lt;div class="grid__item 1/4@desk">&lt;/div>
            &lt;div class="grid__item 1/4@desk">&lt;/div>
        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item">

        &lt;div class="grid grid--center@tablet">
            &lt;div class="grid__item 1/2 1/3@tablet">&lt;/div>
            &lt;div class="grid__item 1/2 1/3@tablet">&lt;/div>
        &lt;/div>

    &lt;/div>

    &lt;div class="grid__item">

        &lt;div class="grid grid--right@tablet">
            &lt;div class="grid__item 1/2 1/3@tablet">&lt;/div>
            &lt;div class="grid__item 1/2 1/3@tablet">&lt;/div>
        &lt;/div>

    &lt;/div>

&lt;/div></code>



        <h3 class="title">Grille 2 colonnes en grande tablette, dont celle de gauche fixe à 300px</h3>
    
        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">A[1]</div>
                </div>

            </div><!--
         --><div class="grid__item">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">A[2]</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item 300px@big-tablet">&lt;/div>
    &lt;div class="grid__item">&lt;/div>
&lt;/div></code>

        <h3 class="title">Grille 3 colonnes en grande tablette, dont celles de gauche fixes à 200px et 300px</h3>

        <div class="grid grid--fixed@tablet">
            <div class="grid__item 200px@tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">A[1]</div>
                </div>

            </div><!--
         --><div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">A[1]</div>
                </div>

            </div><!--
         --><div class="grid__item">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">A[2]</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@tablet">
    &lt;div class="grid__item 200px@tablet">&lt;/div>
    &lt;div class="grid__item 300px@big-tablet">&lt;/div>
    &lt;div class="grid__item">&lt;/div>
&lt;/div></code>

        <h3 class="title">Grille 2 colonnes, dont celle de gauche fixe à 300px en grande tablette</h3>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item 1/2 300px@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">B[1]</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2 1/1@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">B[2]</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item 1/2 300px@big-tablet">&lt;/div>
    &lt;div class="grid__item 1/2 1/1@big-tablet">&lt;/div>
&lt;/div></code>

        <h3 class="title">2 colonnes, celle de droite fixe à 300px ET <b>visible</b> à partir de grande tablette</h3>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">C[1]</div>
                </div>
            </div><!--
         --><div class="grid__item 300px@big-tablet visible@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">C[2]</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item">&lt;/div>
    &lt;div class="grid__item 300px@big-tablet visible@big-tablet">&lt;/div>
&lt;/div></code>

        <h3 class="title">3 cases. Les 2 premières à 50% à partir de tablette, la 3eme fixe à partir de grande tablette</h3>

        <div class="grid grid--fixed@big-tablet">
            <div class="grid__item 1/2@tablet 1/1@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">D[1]</div>
                </div>
            </div><!--
         --><div class="grid__item 1/2@tablet 1/1@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">D[2]</div>
                </div>
            </div><!--
         --><div class="grid__item 1/1@desk 300px@big-tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">D[3]</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item 1/2@tablet 1/1@big-tablet">&lt;/div>
    &lt;div class="grid__item 1/2@tablet 1/1@big-tablet">&lt;/div>
    &lt;div class="grid__item 1/1@desk 300px@big-tablet">&lt;/div>
&lt;/div></code>

        <h3 class="title">1ère colonne fluide, avec grid imbriquée, la 2eme fixe à 300px à partir de grande tablette</h3>

        <div class="grid grid--fixed@big-tablet">

            <div class="grid__item">
                <div class="grid">
                    <div class="grid__item 1/2@tablet 1/1@big-tablet">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">E[1]</div>
                        </div>
                    </div><!--
                 --><div class="grid__item 1/2@tablet 1/1@big-tablet">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">E[2]</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">E[3]</div>
                        </div>
                    </div>
                </div>

            </div><!--
         --><div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--300" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">F</div>
                </div>
            </div>

        </div>


        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item">
        &lt;div class="grid">
            &lt;div class="grid__item 1/2@tablet 1/1@big-tablet">&lt;/div>
            &lt;div class="grid__item 1/2@tablet 1/1@big-tablet">&lt;/div>
            &lt;div class="grid__item">&lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="grid__item 300px@big-tablet">&lt;/div>
&lt;/div></code>

        <h3 class="title">2ème colonne fixe à 300px à partir de grande tablette, 2ème colonne fluide avec grid imbriquée</h3>

        <div class="grid grid--fixed@big-tablet">

            <div class="grid__item 300px@big-tablet">
                <div class="bloc bloc--300" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">G</div>
                </div>
            </div><!--
         --><div class="grid__item">
                <div class="grid">
                    <div class="grid__item">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">H[1]</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">H[2]</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--100" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">H[3]</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <code>&lt;div class="grid grid--fixed@big-tablet">
    &lt;div class="grid__item 300px@big-tablet">&lt;/div>
    &lt;div class="grid__item">
        &lt;div class="grid">
            &lt;div class="grid__item">&lt;/div>
            &lt;div class="grid__item">&lt;/div>
            &lt;div class="grid__item">&lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code>

        <h3 class="title">Layout un peu compliqué, avec 1 colonne fixe, et 3ème colonne passant en dessous en petit écran</h3>


        <div class="grid">
            <div class="grid__item 2/3@desk">

                <div class="grid grid--fixed@tablet">

                    <div class="grid__item 300px@tablet">
                        <div class="bloc bloc--300" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">I</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="grid">
                            <div class="grid__item">
                                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                                    <div class="bloc__content">J[1]</div>
                                </div>
                            </div><!--
                         --><div class="grid__item">
                                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                                    <div class="bloc__content">J[2]</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!--
         --><div class="grid__item 1/3@desk">
                <div class="grid">
                    <div class="grid__item">
                        <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">K[1]</div>
                        </div>
                    </div><!--
                 --><div class="grid__item">
                        <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                            <div class="bloc__content">K[2]</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <code>&lt;div class="grid">
    &lt;div class="grid__item 2/3@desk">
        &lt;div class="grid grid--fixed@tablet">
            &lt;div class="grid__item 300px@tablet">&lt;/div>
            &lt;div class="grid__item">
                
                &lt;div class="grid">
                    &lt;div class="grid__item">&lt;/div>
                    &lt;div class="grid__item">&lt;/div>
                &lt;/div>

            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="grid__item 1/3@desk">
        &lt;div class="grid">
            &lt;div class="grid__item">&lt;/div>
            &lt;div class="grid__item">&lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code>


        <h3 class="title">Élements cachés en fonction du breakpoint</h3>

        <div class="grid">
            <div class="grid__item 1/3 visible@tablet">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">caché en mobile, visible à partir de tablette"</div>
                </div>
            </div><!--
         --><div class="grid__item 1/3 hidden@desk">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">caché en desktop</div>
                </div>
            </div><!--
         --><div class="grid__item 1/3 visible@desk">
                <div class="bloc bloc--150" style="background-color: <?php echo c() ?>">
                    <div class="bloc__content">Visible à partir dedesktop</div>
                </div>
            </div>
        </div>

        <code>&lt;div class="grid">
    &lt;div class="grid__item 1/3 visible@tablet">&lt;/div>
    &lt;div class="grid__item 1/3 hidden@desk">&lt;/div>
    &lt;div class="grid__item 1/3 visible@desk">&lt;/div>
&lt;/div></code>


    </div>

</body>
</html>






