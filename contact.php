<?php
$title = "Reserve a seat";
include 'config.php';

$message = "";
$ok = false;
$selected = isset($_GET['event']) ? (int)$_GET['event'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email'] ?? "");
    $event_id = (int)($_POST['event_id'] ?? 0);
    $selected = $event_id;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    } elseif ($event_id <= 0) {
        $message = "Please choose an event.";
    } else {
        $stmt = $conn->prepare("INSERT INTO registrations (email, event_id) VALUES (?, ?)");
        $stmt->bind_param("si", $email, $event_id);
        if ($stmt->execute()) {
            $ok = true;
            $message = "Your details have been received. We will get back to you as soon as possible.";
        } else {
            $message = "Could not save your request. Please try again.";
        }
        $stmt->close();
    }
}

$events = $conn->query("SELECT id, title, event_date FROM events ORDER BY event_date ASC");
include 'header.php';
?>
<section class="container page-top narrow">
  <h1>Reserve a seat</h1>
  <p class="lead">Leave your email and pick an event. We will confirm by email.</p>

  <?php if ($message): ?>
    <div class="alert <?php echo $ok ? 'alert-success' : 'alert-danger'; ?>" role="alert">
      <?php echo htmlspecialchars($message); ?>
    </div>
  <?php endif; ?>

  <?php if (!$ok): ?>
  <form method="POST" action="contact.php" class="reserve-form">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control mb-3" required
           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">

    <label for="event_id" class="form-label">Event</label>
    <select id="event_id" name="event_id" class="form-select mb-4" required>
      <option value="">Choose an event</option>
      <?php while ($events && $e = $events->fetch_assoc()): ?>
        <option value="<?php echo (int)$e['id']; ?>" <?php echo $selected == $e['id'] ? 'selected' : ''; ?>>
          <?php echo htmlspecialchars($e['title']) . " (" . date("j M", strtotime($e['event_date'])) . ")"; ?>
        </option>
      <?php endwhile; ?>
    </select>

    <button type="submit" class="btn btn-ink">Reserve my seat</button>
  </form>
  <?php endif; ?>
</section>
<?php include 'footer.php'; ?>
