<?php /* Template Name: Conferencia */ ?>
<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="center" width="100%">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/conference.png" alt="Conferencia" width="70%" >
            <h1 id="csc-title" class="font-lato">Computer Science<br>Education Conference</h1>
            <p id="p-text" class="font-lato">
                Enseñar Ciencia de la Computación desde la escuela se ha convertido en algo fundamental, darle la oportunidad a niños de aprender y aplicar esta disciplina es sin lugar a dudas algo que va a ayudar en su desarrollo futuro.
<br>
Como parte de estos esfuerzos por llevar esta educación a más escuelas de Perú y Latinoamérica, es que diversas organizaciones unimos esfuerzos a fin de crear una espacio de difusión y discusión para que los diferentes actores involucrados en la formación de una persona, puedan tomar acciones a fin de llevar esta enseñanza a más lugares.
<br>
                <br>
¿Qué ocurriría si le damos la oportunidad para que 50,000 niños peruanos tengan las herramientas para mejorar el mundo?

            </p>
            <a href="/cs-conferencia">
                <button id="btn-saber" class="boton">
                    SABER MÁS
                </button>
            </a>
            
        </div>
        <?php include("footer.php"); ?>

    </body>
</html>


<style>
    #csc-title{
        font-size:50pt;
        font-weight:bold;
        margin-top: 35pt;
    }

    #p-text{
        margin-top: 100px;
        padding-left: 15% ;
        padding-right: 15% ;
        font-size: 16pt;    
    }

    #btn-saber{
        margin-top: 60px;
        margin-bottom: 60px;
    }



    @media screen and (max-width: 600px) {
        #csc-title{
            font-size:20pt;
            font-weight:bold;
            margin-top:25pt;
        }


        #p-text{
            margin-top: 30px;
            padding-left: 15% ;
            padding-right: 15% ;
            font-size: 13pt;    
        }


        #btn-saber{
           margin-top: 10px;
           margin-bottom: 30px;
        }


    }

</style>
