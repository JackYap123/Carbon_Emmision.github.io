// Function to display confirmation message
function displayConfirmation() {
    alert("Registration successful!");
}

// Function to generate and display digital ticket
function generateTicket() {
    var eventName = document.getElementById('eventName').value;
    var eventDate = ''; // Add logic to retrieve event date
    var eventTime = ''; // Add logic to retrieve event time
    var userName = document.getElementById('userName').value;
    var userEmail = document.getElementById('userEmail').value;

    var ticketContent = "Digital Ticket\n";
    ticketContent += "Event: " + eventName + "\n";
    ticketContent += "Date: " + eventDate + "\n";
    ticketContent += "Time: " + eventTime + "\n";
    ticketContent += "Name: " + userName + "\n";
    ticketContent += "Email: " + userEmail + "\n";
    alert(ticketContent);
}
