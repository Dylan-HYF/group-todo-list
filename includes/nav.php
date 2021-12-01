<header>
  <nav>
    <img src="images/logo.png" alt="logo" id="logo">
    <ul>
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="group.php">Groups</a></li>
    </ul>
    <div class="username">
      <?php
      session_start();
      if (isset($_SESSION["username"])) {
        echo ("<span>Hi " . $_SESSION["username"] . "!</span>");
      } else {
        echo ("<span>Hi username!</span>");
      }
      ?>
      <a href="javascript:;">
        <div class="avatar" style="background-color: <?= $_SESSION["color"] ?>" id="profile">
          <?php
          echo ($_SESSION["username"][0]);
          ?>
        </div>
      </a>
    </div>
    <div class="dropdown-content">
      <div class="arrow-up"></div>
      <ul class="option">
        <!-- <li><a href="userProfile.php">Profile</a></li> -->
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </div>
  </nav>

</header>
<script>
  const profile = document.querySelector('#profile')
  const dropdown = document.querySelector('.dropdown-content')
  let flag = true
  // for profile menu
  document.addEventListener('click', e => {
    if (e.target.id === 'profile' && flag) {
      // console.log(1)
      dropdown.setAttribute('class', 'dropdown-content show')
      flag = false
    } else {
      // console.log(2)
      dropdown.setAttribute('class', 'dropdown-content')
      if (!flag) {
        flag = true
      }
    }
  })
</script>