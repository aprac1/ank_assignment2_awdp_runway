<?php $title = "Home"; include 'header.php'; ?>
<header class="hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <h1>Autumn Winter<br>Collection 2026</h1>
        <p class="lead">Six nights of runway shows, pop-ups and studio showcases. Pick your event and reserve a seat.</p>
        <a href="events.php" class="btn btn-ink me-2">See the events</a>
        <a href="contact.php" class="btn btn-outline-ink">Reserve a seat</a>
      </div>
      <div class="col-md-6">
        <img class="hero-img" src="images/mypfp.jpeg" alt="Model wearing the Autumn Winter collection" style="width: 100%; height: 400px; object-fit: contain; object-position: center;">
      </div>
    </div>
  </div>
</header>

<section class="container collection">
  <h2>The collection</h2>
  <div class="row g-4 mt-1">
    <?php
    $items = [
      ["Ember Coat", "Wool blend, cut long", "ember"],
      ["Slate Suit", "Soft tailoring in charcoal", "slate"],
      ["Dusk Dress", "Satin with a bias drape", "dusk"],
    ];
    foreach ($items as $it): ?>
      <div class="col-md-4">
        <img class="piece-img" src="https://picsum.photos/seed/<?php echo $it[2]; ?>/600/760" alt="<?php echo htmlspecialchars($it[0]); ?>">
        <h3><?php echo htmlspecialchars($it[0]); ?></h3>
        <p><?php echo htmlspecialchars($it[1]); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
