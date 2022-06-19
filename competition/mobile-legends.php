<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Mobile Legends | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Mobile Legends";
    $competition_type= "sport";
    $competition_slug= "mobile-legends";
    $bg_logo= "logo-ml.png";
    $display_text= "no";
    $bg_logoc= "bgc-ml";
    $option_class_logo= "";
    $bg_description= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque aspernatur sequi magni enim unde. Ex deserunt architecto eum iusto officiis ea ipsam, sequi dolorem quibusdam sed necessitatibus quis voluptas sint esse praesentium corrupti error. Esse accusamus commodi soluta explicabo doloremque?";
    $comp_description= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque aspernatur sequi magni enim unde. Ex deserunt architecto eum Ex deserunt architecto eum. Eaque aspernatur sequi magni enim unde. Ex deserunt architecto eum Ex deserunt architecto eum.";
    $comp_rules= ["Lorem ipsum, dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit.",
                  "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                  "Lorem ipsum, dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit adipisicing elit."];
    $comp_date= "21-30 May 2022";
    $comp_location= "Universitas Gunadarma";
    $comp_fee= "IDR 150.000,00";
    $comp_note= "Dont cheat baby";

    require $dir."partials/competition_pages.php"
    ?>



    <?php
        require $dir."partials/copy-footer.php";
    ?>
</div>


<!-- #page -->
<a id="back-to-top" href="" class="show"><i class="flaticon-up-arrow"></i></a>


    <!-- Footer -->
    <?php 
        require $dir."partials/footer.php";
    ?>

    <script>

    </script>