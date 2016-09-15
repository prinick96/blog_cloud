<?php include 'inc/header.php' ?>
  <body>

    <?php include 'inc/topnav.php' ?>

    <section class="container">

      <section class="entrada text-center">
         <h1 class="white">Título de la entrada por aquí en grande</h1>
        <p class="lead">28 octubre 2016, por <a class="title-entrada-link" href="#">Admin</a>, en <a href="#" class="title-entrada-link">Sin Categoría</a></p>
      </section>

      <div class="cuerpo">

        <article id="contenido-entrada">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non elementum odio. Nulla quis nibh sit amet
             nunc iaculis pretium finibus nec neque. Aliquam eu urna tincidunt, tincidunt justo sed, tincidunt augue.
             Phasellus id sagittis sem. Nulla congue molestie lorem, quis porta ex placerat et. Suspendisse laoreet
             erat hendrerit neque maximus congue. Ut suscipit hendrerit nulla sed ultrices. Suspendisse suscipit arcu
             id elit ultricies fringilla. Quisque consectetur neque gravida, volutpat libero nec, blandit nisi.
             Morbi dapibus sed quam vitae sodales. Nullam ullamcorper vestibulum dui quis molestie. Integer cursus
             est ac nisi vehicula, ut tempor quam sagittis. Duis eu libero vel nisi laoreet lobortis id eget augue.
             Maecenas auctor fermentum nulla in auctor. Donec laoreet tempor felis, id laoreet sem molestie vel.</p>

          <p>Nunc euismod ligula blandit, dapibus nibh in, mattis orci. Vestibulum imperdiet, sapien id eleifend feugiat,
            ligula turpis placerat tortor, non vehicula leo elit at mi. Donec a tortor egestas, venenatis diam sed,
            aliquet erat. Aenean elementum augue ac mi aliquam tempor. Aliquam erat volutpat. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Nunc vel augue interdum, porta elit id, ultricies mauris. Donec vulputate nunc
            dignissim enim vulputate commodo. Suspendisse at mi vel magna consequat faucibus in sit amet erat. Ut efficitur
            risus purus, nec ultrices sem gravida sed. Morbi porttitor at est a faucibus. Cras et purus sem. Vestibulum non
            efficitur dui, vitae feugiat velit. Nam in enim sem. Proin lobortis quis ex a vehicula. Cras finibus euismod ultrices.</p>

            <hr />
        </article>

        <section id="compartir_entrada">
          <h4>Compartir</h4>
          <a href="#" class="search_button"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="#" class="search_button"><i class="fa fa-twitter"></i> Twitter</a>
          <a href="#" class="search_button"><i class="fa fa-google-plus"></i> Google+</a>
        </section>

        <section id="tags">
          <h4>Etiquetas</h4>
          <?php for($i = 0; $i <= 12; $i++): ?>
          <a href="#" rel="tag">Tag <?= $i ?></a>
          <?php endfor ?>
        </section>

        <section id="comentarios">
          <div id="disqus_thread"></div>
        </section>
        
      </div>
    </section>

    <?php include 'inc/footer.php' ?>
    <script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//blog-framework.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Por favor activa javascript para poder <a href="https://disqus.com/?ref_noscript">comentar.</a></noscript>
    <script id="dsq-count-scr" src="//blog-framework.disqus.com/count.js" async></script>
  </body>
</html>
