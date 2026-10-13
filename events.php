<?php
$title = "Events";
include 'config.php';
include 'header.php';
$result = $conn->query("SELECT * FROM events ORDER BY event_date ASC");
?>
<section class="container page-top">
  <h1>Events</h1>
  <p class="lead">Six nights, one collection. Pick the one you want to attend.</p>
  <div class="row g-4 mt-1">
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($e = $result->fetch_assoc()): ?>
        <div class="col-sm-6 col-lg-4">
          <a class="event-tile" href="contact.php?event=<?php echo (int)$e['id']; ?>">
            <img src="<?php echo htmlspecialchars($e['image_url']); ?>" alt="<?php echo htmlspecialchars($e['title']); ?>">
            <div class="event-info">
              <h3><?php echo htmlspecialchars($e['title']); ?></h3>
              <p><?php echo date("j M Y", strtotime($e['event_date'])); ?>, <?php echo htmlspecialchars($e['venue']); ?></p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>No events yet. Import database.sql to add some.</p>
    <?php endif; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
