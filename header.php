<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($title ?? "Maison Noor"); ?> | Maison Noor</title>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,500;0,700;1,500&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md site-nav">
  <div class="container">
    <a class="navbar-brand" href="index.php">Maison Noor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Menu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-end" id="nav">
      <ul class="navbar-nav gap-md-3">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Reserve a seat</a></li>
      </ul>
    </div>
  </div>
</nav>
