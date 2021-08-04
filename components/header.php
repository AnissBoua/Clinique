<nav class="nav_bar">
  <div>
    <p>Clinique</p>
  </div>
  <ul class="nav_bar_list">
    <li><a href="">Home</a></li>
    <li><a href="">Animals</a></li>
    <li><a href="">Adopt</a></li>
    <li><a href="">Contact</a></li>
  </ul>
  <button onclick="" id="logbutton" class="nav_bar_button">Sign in</button>
  <script type="text/javascript">
    document.getElementById('logbutton').onclick = function(){
      location.href = "<?=ROOT_URL?>pages/signin.php";
    }
  </script>
</nav>
