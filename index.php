<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Palendar</title>
  <link rel="stylesheet" href="css/initialize.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/nav.css">
</head>

<body>
  <main class="bg">
    <?php
    include("includes/session-check.php");
    include("includes/nav.php");
    ?>
    <section class="container">
      <aside>
        <h1 id="today">
          January 1, 2022
        </h1>
        <section>
          <div class="times">
            <?php
            $userId = $_SESSION["userId"];
            include("includes/db-connect.php");
            $task = $pdo->prepare("SELECT * FROM `tasks` WHERE `tasks`.`userId` = $userId");
            $task->execute();
            // $row = $task->fetchAll();
            $results = $task->fetchAll(PDO::FETCH_ASSOC);
            $json = json_encode($results);
            ?>
            <p style="display: none" id="taskData"><?= $json ?></p>
            <div class="time">
              <span>09</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>10</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>11</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>12</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>13</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>14</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>15</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>16</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>17</span>:00
              <div class="line"></div>
            </div>
            <div class="time">
              <span>18</span>:00
              <div class="line"></div>
            </div>

          </div>
          <a href="add-task.php">+ Create New</a>
        </section>

      </aside>
      <section id="detail" style="display: none">
        <div class="title">
          <h2>Group project</h2>

          <div class="buttons">
            <a href="javascript:;" id="edit">edit</a>
            <a href="javascript:;" id="delete">delete</a>
          </div>
        </div>
        <hr>
        <h3>Time: 11:00 - 12:00</h3>
        <article>
          Since early 2020, there has been an increase of working remotely with the trend continuing into 2021, and
          projected to have 70% of the workforce working from home at least five days a month by 2025.1 This remote
          style of working needs productivity and communication tools so that companies and education systems can run
          smoothly. This is why we are creating a multi-user calendar application where a group of individuals can add
          their own schedules to the same calendar. This helps with organizing and managing time efficiently and reduces
          slow response times of setting up new events by waiting for replies. Currently, the calendar applications
          available end up looking cluttered or messy by overlapping events on the display by attempting to display
          every event and its details at once.
        </article>
        <h3 class="members-title">Members</h3>
        <div class="members">
          <!-- <div class="members-container">
            <div class="avatar">R</div>
            <span>Reynold</span>
          </div>
          <div class="members-container">
            <div class="avatar">D</div>
            <span>Dylan</span>
          </div>
          <div class="members-container">
            <div class="avatar">A</div>
            <span>Aly</span>
          </div>
          <div class="members-container">
            <div class="avatar">M</div>
            <span>Mimi</span>
          </div> -->
          <?php
          $groupId = $_SESSION["groupId"];
          $users = $pdo->prepare("SELECT * FROM `user-group` WHERE `user-group`.`groupId` = $groupId;");
          $users->execute();
          while ($user = $users->fetch()) {
          ?>
            <div class="members-container">
              <div class="avatar"><?= $user["username"][0] ?></div>
              <span><?= $user["username"] ?></span>
            </div>
          <?php
          }
          ?>

        </div>
      </section>
    </section>
  </main>
  <script src="js/index.js"></script>
</body>

</html>