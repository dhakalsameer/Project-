document.addEventListener('DOMContentLoaded', function() {
    // Fetch user information from the server using AJAX or any other method
    // For simplicity, let's assume user data is available in a global variable 'userData'
    const userData = {
        name: 'John Doe',
        gender: 'Male',
        address: '123 Main Street, Cityville',
        phone: '555-1234',
        email: 'john.doe@example.com',
    };

    displayUserInfo(userData);
});

function displayUserInfo(user) {
    const userInfoContainer = document.getElementById('user-info');
    userInfoContainer.innerHTML = `
        <h2>Your Profile Information:</h2>
        <ul>
            <li><strong>Name:</strong> ${user.name}</li>
            <li><strong>Gender:</strong> ${user.gender}</li>
            <li><strong>Address:</strong> ${user.address}</li>
            <li><strong>Phone:</strong> ${user.phone}</li>
            <li><strong>Email:</strong> ${user.email}</li>
        </ul>
    `;
}

function bookNow() {
    // Replace this with your booking logic
    alert("Booking Successful! We'll contact you shortly.");
}

function logout() {
    // Redirect to the logout page or perform logout operations
    window.location.href = 'index.php';
}
