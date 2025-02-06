<html>
<head>
   <?php wp_head(); ?>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
   <header class="site-header">
      <a href="index.php">
         <div class="logo--container">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Logo.svg" alt="Logo" />
         <p style="margin-left: 10px; font-size: 20px;">Dům Nad Řekou</p>
         </div>
         </a>
         <div class="links--container">
         <div class="rating--box">
          <a target="_blank" href="https://www.booking.com/hotel/cz/ubytovani-ve-znojme-domecek.cs.html?aid=319857&label=ubytovani-ve-znojme-domecek-DyE%2AgJpcqg4YZt3%2AGDDJJgS705846640062%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-2205588311423%3Alp1003745%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YSoO9VWsFCsb4tJCjD5GdJk&sid=adb28d4302f620fba6a12a8091f8ca30&all_sr_blocks=1050401401_377279477_14_0_0&checkin=2025-02-03&checkout=2025-02-04&dest_id=-559571&dest_type=city&dist=0&group_adults=2&group_children=0&hapos=5&highlighted_blocks=1050401401_377279477_14_0_0&hpos=5&matching_block_id=1050401401_377279477_14_0_0&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1050401401_377279477_14_0_0__55000&srepoch=1737548501&srpvid=ab3055d6130b05d2&type=total&ucfs=1&">
           <p class="ma-10 text-white font-size-25">9,9</p>
          </a>
         </div>
            <a class="ma-10 underlineanim" href="">Akce v okolí</a>
            <a class="ma-10 underlineanim" href="#about--section">O Nás</a>
            <a class="ma-10 underlineanim" href="#contant--section">Kontakt</a>
            <button class="button button__header" type="button" onclick="on()">Rezervace</button>
         </div>
   </header>