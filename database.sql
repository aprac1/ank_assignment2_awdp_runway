CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(120) NOT NULL,
    event_date DATE NOT NULL,
    venue VARCHAR(120) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL,
    event_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (event_id) REFERENCES events(id)
);

INSERT INTO events (title, event_date, venue, image_url) VALUES
('Opening Night Runway', '2026-11-05', 'Grand Hall', 'https://picsum.photos/seed/ev1/700/700'),
('Street Style Showcase', '2026-11-07', 'Old Mill Courtyard', 'https://picsum.photos/seed/ev2/700/700'),
('Bridal Couture Evening', '2026-11-10', 'Riverfront Pavilion', 'https://picsum.photos/seed/ev3/700/700'),
('Emerging Designers Pop-up', '2026-11-12', 'Studio 9', 'https://picsum.photos/seed/ev4/700/700'),
('Menswear Tailoring Night', '2026-11-14', 'City Gallery', 'https://picsum.photos/seed/ev5/700/700'),
('Closing Gala', '2026-11-16', 'Rooftop Terrace', 'https://picsum.photos/seed/ev6/700/700');
