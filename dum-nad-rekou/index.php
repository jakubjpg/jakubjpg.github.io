<?php
get_header();
?>


<?php
?>
<html>
<div id="overlay" class="res--overlay" onclick="off(event)">
  <div class="res--menu">
    <div class="res--container">
      <svg id="close" onclick="off(event)" class="close__res" width="32" height="32" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
          fill="currentColor" />
      </svg>
      <h2> Rezervace </h2>
      <form id="contact-form" class="form--container" method="post">
        <div class="field--wrapper">
          <label class="field--title" for="first_name">Jméno</label>
          <div class="field">
            <input class="input" type="text" id="first_name" name="first_name" placeholder="Karel" autocomplete="off"
              required>
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title" for="last_name">Příjmení</label>
          <div class="field">
            <input class="input" type="text" id="last_name" name="last_name" placeholder="Novák" autocomplete="off"
              required>
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title" for="email">Email</label>
          <div class="field">
            <input class="input" type="email" id="email" name="email" placeholder="karelnovak@email.com"
              autocomplete="off" required>
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title" for="tel">Telefonní číslo</label>
          <div class="field">
            <input class="input" type="tel" id="tel" name="tel" placeholder="123456789" autocomplete="off"
              pattern="[0-9]{9}" title="Zadejte 9místné číslo" required>
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title" for="message">Počet osob, datum příjezdu a odjezdu</label>
          <div class="field">
            <textarea id="message" name="message" rows="5" cols="50"
              placeholder="Počet osob: 2, Příjezd: 01.01.2025, Odjezd: 05.01.2025" required></textarea>
          </div>
        </div>

        <div class="button__res">
          <input class="submit--input" type="submit" name="submit_contact_form" value="Odeslat">
        </div>
      </form>

      <?php
      if (isset($_SESSION['form_status'])) {
        if ($_SESSION['form_status'] == 'success') {
          echo '<p class="success-message">Thank you! Your message has been sent successfully.</p>';
        } elseif ($_SESSION['form_status'] == 'error') {
          echo '<p class="error-message">Sorry, there was an error sending your message. Please try again later.</p>';
        }
        // Clear the session status after displaying the message
        unset($_SESSION['form_status']);
      }
      ?>



    </div>
  </div>
</div>
<div class="img--container"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-obyvak.jpg');">
  <div class="overlay">
    <div class="main--heading">
      <img class="logo--img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/dumnadrekoulogo.svg"
        alt="Logo" />
      <div class="ma-10"></div>
      <h1 class="weight-200">Vila, co má duši</h1>
      <h2 class="font-size-25 weight-200">Pohodlí a pohostinnost v srdci Znojma</h2>
    </div>

    <!-- <div style="position:absolute; left: 20; bottom: 20">
          <div class="rating--box">
            <a target="_blank" href="https://www.booking.com/hotel/cz/ubytovani-ve-znojme-domecek.cs.html?aid=319857&label=ubytovani-ve-znojme-domecek-DyE%2AgJpcqg4YZt3%2AGDDJJgS705846640062%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-2205588311423%3Alp1003745%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YSoO9VWsFCsb4tJCjD5GdJk&sid=adb28d4302f620fba6a12a8091f8ca30&all_sr_blocks=1050401401_377279477_14_0_0&checkin=2025-02-03&checkout=2025-02-04&dest_id=-559571&dest_type=city&dist=0&group_adults=2&group_children=0&hapos=5&highlighted_blocks=1050401401_377279477_14_0_0&hpos=5&matching_block_id=1050401401_377279477_14_0_0&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1050401401_377279477_14_0_0__55000&srepoch=1737548501&srpvid=ab3055d6130b05d2&type=total&ucfs=1&">
              <p class="ma-10 text-white font-size-25">9,9</p>
            </a>
          </div>
        </div> -->

  </div>

</div>

<div class="container">
  <!-- <h1 style="text-decoration: underline solid black 4px; margin-bottom: 50px;"> Ubytování ve znojmě</h1> -->
  <div id="about--section" class="about--container">
    <div class="underline"></div>

    <div class="about--content">
      <div class="about--text">

        <h2>O našem ubytování</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec
          vehicula justo, nec gravida justo. Suspendisse potenti. Mauris non
          ligula a augue consectetur facilisis. Nullam feugiat, urna id congue
          convallis, purus magna fermentum nisi, sed porttitor lorem risus
        </p>
        <br>
        <p>
          orci. Ut id orci in metus elementum interdum non id arcu.
          Donec fermentum, orci a volutpat mollis, magna urna aliquam nulla,
          eget blandit sapien sem ac nisi. Quisque a ligula sed nisl sodales
          lacinia. Curabitur a est sit amet mauris tincidunt convallis.
        </p>
      </div>
      <img class="about--img" src="<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-rodinafoto.jpg"
        alt="Portrait of a person">
    </div>

  </div>
  <div class="divider"></div>
</div>
<div class="brown-bg">
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img class="radius-10" src="<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-znojmo-dum.jpg"
        style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img class="radius-10"
        src="<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-znojmo-pohlednadum.jpg"
        style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img class="radius-10" src="<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-obyvak.jpg"
        style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img class="radius-10" src="<?php echo get_template_directory_uri(); ?>/photos/znojmo-ubytovani-znojmo-terasa.jpg"
        style="width:100%">
      <div class="text"></div>
    </div>



    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>
  </div>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

</div>
<div class="container">
  <div class="divider"></div>
  <div class="about--container__icons">
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home.png" />
      <div class="ma-10"></div>
      <h3> Celé ubytování pro vás</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/size.png" />
      <div class="ma-10"></div>
      <h3> 206 m² velikost</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/park.png" />
      <div class="ma-10"></div>
      <h3> Parkování na místě</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/wifi-signal.png" />
      <div class="ma-10"></div>
      <h3>Wi-Fi zdarma</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/paws.png" />
      <div class="ma-10"></div>
      <h3>Domácí zvířata povolena</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/area.png" />
      <div class="ma-10"></div>
      <h3>Nekuřácké pokoje</h3>
    </div>
    <div class="icon--container hidden">
      <img class="info--icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/terrace.png" />
      <div class="ma-10"></div>
      <h3> Terasa a Balkon</h3>
    </div>
  </div>
  <div class="divider"></div>
</div>

</div>
<div class="brown-bg">
  <div class="gallery--container">

    <div class="about--gallery">
      <?php
      $gallery_dir = get_template_directory() . "/photos/gallery/";
      $gallery_uri = get_template_directory_uri() . "/photos/gallery/";

      $images = array_diff(scandir($gallery_dir), array('.', '..', '.DS_Store'));
      $images = array_values($images);

      foreach ($images as $index => $image) {
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
          echo '<img class="thumbnail" src="' . $gallery_uri . $image . '" onclick="openLightbox(' . $index . ')"/>';
        }
      }
      ?>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
      <div class="lightbox--img">
        <svg id="closeBtn" onclick="closeLightbox(event)" class="gallery__close" width="32" height="32"
          viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
            fill="currentColor" />
        </svg>

        <img class="lightbox-content" id="lightbox-img">
      </div>
      <a class="gallery--prev" onclick="changeImage(-1)">&#10094;</a>
      <a class="gallery--next" onclick="changeImage(1)">&#10095;</a>
    </div>

  </div>
</div>
<div class="container">
  <div class="divider"></div>
  <div class="plan--container">

    <div class="plan--content">
      <div class="plan--text">

        <h2> Půdorys</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec
          vehicula justo, nec gravida justo. Suspendisse potenti. Mauris non
          ligula a augue consectetur facilisis. Nullam feugiat, urna id congue
          convallis, purus magna fermentum nisi, sed porttitor lorem risus
        </p>
        <br>
        <p>
          orci. Ut id orci in metus elementum interdum non id arcu.
          Donec fermentum, orci a volutpat mollis, magna urna aliquam nulla,
          eget blandit sapien sem ac nisi. Quisque a ligula sed nisl sodales
          lacinia. Curabitur a est sit amet mauris tincidunt convallis.
        </p>
      </div>
      <img class="plan--img" src="<?php echo get_template_directory_uri(); ?>/photos/pudorys.jpg">
    </div>

  </div>

  <h2 class="mt-80"> Kde nás najdete</h2>
  <div id="map" class="lmap"></div>
  <div class="res--container">
    <h2 class="mt-80"> Rezervace </h2>
    <form id="contant--section" class="form--container" action="jakub.c@peko-studio.cz" method="post"
      enctype="text/plain">

      <div class="field--row">
        <div class="field--wrapper">
          <label class="field--title"> Jméno </label>
          <div class="field">
            <input class="input" type="text" name="name" placeholder="Karel" autocomplete="off">
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title"> Příjmení </label>
          <div class="field">
            <input class="input" type="text" name="name" placeholder="Novák" autocomplete="off">
          </div>
        </div>
      </div>

      <div class="field--row">
        <div class="field--wrapper">
          <label class="field--title"> Email </label>
          <div class="field">
            <input class="input" type="email" name="name" placeholder="karelnovak@email.com" autocomplete="off">
          </div>
        </div>

        <div class="field--wrapper">
          <label class="field--title"> Telefonní číslo </label>
          <div class="field">
            <input class="input" type="tel" name="name" placeholder="123456789" autocomplete="off">
          </div>
        </div>
      </div>

      <div class="field--row">
        <div class="field--wrapper">
          <label class="field--title"> Zpráva </label>
          <div class="field">
            <textarea id="message" name="message" rows="5" cols="50"
              placeholder="Počet osob: 2, Příjezd: 01.01.2025, Odjezd: 05.01.2025" required></textarea>
          </div>
        </div>
      </div>
      <div class="button__res">
        <input type="submit" value="Odeslat">
      </div>
    </form>
  </div>
</div>
</div>

</html>

<?php
get_footer();