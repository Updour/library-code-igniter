<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        {meta}

       
    <title>{judul}</title>

     {css} 

    </head>
    <body bgcolor= "f5f5dc">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	{nav}

        <!--Home page style-->
            {header}   
             <section id="about" class="sections">

            <div class="heading-content text-center">

                <h3>Know About Us</h3>
            </div></section>

                {flash} 

          <?php echo $this->session->userdata('nama')?>

              {konten}
    <!--Footer-->
    {footer}

    {js}
</body>
</html>
