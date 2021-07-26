<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="shortcut icon" type="image/png" href="img/algisLogo.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,100;1,300;1,400;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animation.css" />
    <title>Algis Simkaitis Personal Site</title>
  </head>
  <body>
    <div class="wallpaper"></div>
    <div class="header">
      <div class="headerInner">
        <div class="top-left"></div>
        <div class="top-center">
          <a href="index.php" class="headerLink"
            ><img
              src="img/algisLogo.png"
              class="headerLogo"
              alt="AlgisSimkaitisLogo"
          /></a>
        </div>
        <div class="top-right"></div>
      </div>
    </div>
    <div class="bio">
      <div class="bioInner">
        <div class="bioText">
          <h2 class="bioHeader">My Biography</h2>
          <p class="bioSpan">
            Hi I'm Jounior Web Developer and my name is Algis Simkaitis. I
            recently ended my courses and wanted to show world wat I'm capible
            for. If you got time you could check my Website and contant me if
            you wantedto work with me.
          </p>
          <img
            class="bioPhoto"
            src="img/algisSunglases.jpeg"
            alt="AlgisPhoto"
          />
        </div>
      </div>
    </div>
    <h2 class="bootHeader">My Bootcamp experience</h2>
    <div class="experience">
      <div class="experienceInner">
        <img class="expImg" src="img/html.svg" alt="" />
        <h3 class="expHeader">HTML</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          repellat dolorem nobis totam a tenetur pariatur? Accusantium, commodi
          culpa! Laborum vitae ullam, harum ducimus quam optio beatae magnam
          fugit. Inventore?
        </p>
      </div>
      <div class="experienceInner">
        <img class="expImg" src="img/css.svg" alt="" />
        <h3 class="expHeader">CSS</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          repellat dolorem nobis totam a tenetur pariatur? Accusantium, commodi
          culpa! Laborum vitae ullam, harum ducimus quam optio beatae magnam
          fugit. Inventore?
        </p>
      </div>
      <div class="experienceInner">
        <img class="expImg" src="img/js.svg" alt="" />
        <h3 class="expHeader">JavaScript</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          repellat dolorem nobis totam a tenetur pariatur? Accusantium, commodi
          culpa! Laborum vitae ullam, harum ducimus quam optio beatae magnam
          fugit. Inventore?
        </p>
      </div>
      <div class="experienceInner">
        <img class="expImg" src="img/php.svg" alt="" />
        <h3 class="expHeader">PHP</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          repellat dolorem nobis totam a tenetur pariatur? Accusantium, commodi
          culpa! Laborum vitae ullam, harum ducimus quam optio beatae magnam
          fugit. Inventore?
        </p>
      </div>
      <div class="experienceInner">
        <img class="expImg" src="img/my.svg" alt="" />
        <h3 class="expHeader">MySQL</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          repellat dolorem nobis totam a tenetur pariatur? Accusantium, commodi
          culpa! Laborum vitae ullam, harum ducimus quam optio beatae magnam
          fugit. Inventore?
        </p>
      </div>
    </div>

    <h2 class="hobyHeader">My Hobbies</h2>

    <div class="hobbyGalery">
      <section id="photo-wall">
        <ul>
          <li>
            <a class="hobbyLink" href="#">
              <img src="img/meditation.jpeg" class="hobbyGal alt="meditationHobby">
              <h3 class="hobbyHead">Meditation</h3>
            </a>
          </li>
          <li>
            <a class="hobbyLink" href="#">
              <img src="img/traveling.jpg" class="hobbyGal alt="travelingHobby">
              <h3 class="hobbyHead">Traveling & Exloring</h3>
            </a>
          </li>
          <li>
            <a class="hobbyLink" href="#">
              <img src="img/athletic.jpeg" class="hobbyGal alt="AthleticHobby">
              <h3 class="hobbyHead">Sports activities</h3>
            </a>
          </li>
          <li>
            <a class="hobbyLink" href="#">
              <img src="img/gaming.jpeg" class="hobbyGal" alt="gamingHobby" />
              <h3 class="hobbyHead">Gaming</h3>
            </a>
          </li>
        </ul>
      </section>
    </div>

    <h2 class="contactHeader">Contact Me</h2>
    <div class="contact">
      <a href="mailto:algis.simkaitis@gmail.com" class="button">Write Email</a>
      
    </div>
    <ul class="social">
      <li>
         <a href="https://github.com/jokertv95">
      <i class="fab fa-github"></i>
        </a>
        </li>
         <li>
        <a href="https://www.linkedin.com/in/algis-simkaitis-534a95213/">
      <i class="fab fa-linkedin"></i>
        </a> </li>
        </ul>

    <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "DB.php";
$db = new DB();
$comment_obj = $db->makeTableObject('comments');

if (array_key_exists('remove', $_GET)) {
    $comment_obj->remove($_GET['remove']);
}
elseif (
    array_key_exists('message', $_POST) &&
    array_key_exists('name', $_POST)
) {
    $comment_obj->addEntry([
        'name' => $_POST['name'],
        'message' => $_POST['message']
    ]);
}
$comments = &$comment_obj->getTable();

?>

<div id="app">
    <section class="comments">
        <h1>Comments</h1>
        <form class="comments__form" action="/CVRiga/" method="post">
            <div class="form_block">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="form_block">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="7"></textarea>
            </div>
            <button class="button" type="submit">Submit</button>
        </form>

        <div class="comments__entries">
            <?php ksort($comments); ?>
            <?php foreach ($comments as $id => $comment): ?>
                <div class="comment" data-id="<?= $id; ?>">
                    <?php $d = new DateTime(@$comment['time']); ?>
                    <span class="name"><?=@$comment['name']; ?></span>
                    <span class="time"><?=$d->format('d.m.Y H:i'); ?></span>
                    <pre><?=@$comment['message']; ?></pre>
                    <a class="remove" href="?remove=<?= $id; ?>">x</a>
                    <a class="update" href="update.php?id=<?= $id; ?>">edit</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
<script src="https://kit.fontawesome.com/fb3f502e54.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
