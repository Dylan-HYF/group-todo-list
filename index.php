<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Palendar</title>
  <link rel="stylesheet" href="css/initialize.css" />
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <main class="bg">
    <?php
    include("includes/session-check.php");
    include("includes/nav.php");
    ?>
    <section class="container">
      <aside>
        <h1>
          January 1, 2022
        </h1>
        <section>
          <div class="times">
            <div class="time">
              <span>09:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>10:00</span>
              <div class="line"></div>
            </div>
            <div class="time todo">
              <span>11:00</span>
              <div class="line"></div>
            </div>
            <div class="time todo">
              <span>12:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>13:00</span>
              <div class="line"></div>
            </div>
            <div class="time todo-2">
              <span>14:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>15:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>16:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>17:00</span>
              <div class="line"></div>
            </div>
            <div class="time">
              <span>18:00</span>
              <div class="line"></div>
            </div>

          </div>
          <a href="add-task.php">+ Create New</a>
        </section>

      </aside>
      <section id="detail">
        <div class="title">
          <h2>Group project</h2>
          <div class="buttons">
            <a href="#">edit</a>
            <a href="#">delete</a>
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
          <div class="members-container">
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
          </div>
        </div>
      </section>
    </section>
  </main>
</body>

</html>