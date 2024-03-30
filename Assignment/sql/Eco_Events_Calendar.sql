-- Create database for Eco Events Calendar
CREATE DATABASE IF NOT EXISTS `eco_events_calendar`;

-- Use the Eco Events Calendar database
USE `eco_events_calendar`;

-- Create events table for Eco Events Calendar
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Insert sample data into the events table for Eco Events Calendar
INSERT INTO `events` (`title`, `description`, `date`, `time`, `location`, `organizer`) VALUES
('Tree Planting Event', 'Join us in planting trees to help the environment and beautify our community.', '2024-04-15', '10:00:00', 'City Park', 'Green Earth Society'),
('Sustainable Living Workshop', 'Learn about sustainable living practices and how you can reduce your carbon footprint.', '2024-04-20', '14:00:00', 'Community Center', 'Eco-Friendly Living Association'),
('Recycling Drive', 'Bring your recyclable materials and contribute to reducing waste in our city.', '2024-05-05', '09:00:00', 'City Recycling Center', 'Green Initiatives Group');
