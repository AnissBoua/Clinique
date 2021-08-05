<nav class="nav_bar">
  <div class="nav_bar_logo">
    <img class="nav_bar_logo_img" src="<?= ROOT_URL ?>media/logo/panda.svg" alt="">
    <p><a href="<?= ROOT_URL ?>index.php">AnimalCare</a></p>
  </div>
  <ul class="nav_bar_list">
    <li><a href="">Home</a></li>
    <li><a href="">Animals</a></li>
    <li><a href="">Adopt</a></li>
    <li><a href="">Contact</a></li>
  </ul>
  <button onclick="" id="logbutton" class="nav_bar_button">Log in</button>
  <script type="text/javascript">
    document.getElementById('logbutton').onclick = function() {
      location.href = "<?= ROOT_URL ?>pages/login.php";
    }
  </script>
</nav>