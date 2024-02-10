
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <style>
      .error{
        color: red;
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-container">
       <form id="signup-form" action="datastore.php" class="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
        <h2>Sign Up</h2>
        <input type="text" id="first_name" placeholder="First Name" name="first_name" required>
        <span class="error" id="firstNameError"></span>

        <input type="text" id="last_name" placeholder="Last Name" name="last_name" required>
        <span class="error" id="lastNameError"></span>

        <select id="gender" name="gender" required>
          <option value="" disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <span class="error" id="genderError"></span>

        <select id="weight" name="weight" required>
          <option value="" disabled selected>Weight</option>
          <option value="Gain">Gain</option>
          <option value="Loss">Loss</option>
        </select>
        <span class="error" id="weightError"></span>


        <input type="text" id="address" placeholder="Address" name="address" required>
        <span class="error" id="addressError"></span>

        <input type="email" id="email" placeholder="Email" name="email" required>
        <span class="error" id="emailError"></span>

        
        <input type="tel" id="phone" name="phone" placeholder="phone">
        <span class="error" id="phoneError"></span>

        <input type="password" id="password" placeholder="Password" name="password" minlength="8" maxlength="8" required>
        <span class="error" id="passwordError"></span>

        <input type="password" id="rePassword" placeholder="Confirm Password" name="rePassword" minlength="8" maxlength="8" required>
        <span class="error" id="rePasswordError"></span>

        <input type="submit" value="Sign Up">
      </form>
    </div>
  </div>

  <script>
    function validateForm() {
        // Fetch values from input fields
        const firstName = document.getElementById('first_name').value;
        const lastName = document.getElementById('last_name').value;
        const gender = document.getElementById('gender').value;
        const address = document.getElementById('address').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        // const password = document.getElementById('password').value;
        // const rePassword = document.getElementById('rePassword').value;

        // Fetch error elements
        const firstNameError = document.getElementById('firstNameError');
        const lastNameError = document.getElementById('lastNameError');
        const genderError = document.getElementById('genderError');
        const weightLoss = document.getElementById('loss');
        const weightGain = document.getElementById('gain');
        const weightError = document.getElementById('weightError');
        const addressError = document.getElementById('addressError');
        const phoneError = document.getElementById('phoneError');
        const emailError = document.getElementById('emailError');
        // const passwordError = document.getElementById('passwordError');
        // const rePasswordError = document.getElementById('rePasswordError');

        // Define regular expressions for email and password validation (as in your code)
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,4}$/;
        // const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        const phonePattern = /^\d{10}$/;

        // Validate First Name
        if (!firstName) {
            firstNameError.textContent = 'Please enter your first name.';
        } else {
            firstNameError.textContent = '';
        }

        // Validate Last Name
        if (!lastName) {
            lastNameError.textContent = 'Please enter your last name.';
        } else {
            lastNameError.textContent = '';
        }

        // Validate Gender
        if (gender === "") {
            genderError.textContent = 'Please select a gender.';
        } else {
            genderError.textContent = '';
        }

        // Validate Address
        if (!address) {
            addressError.textContent = 'Please enter your address.';
        } else {
            addressError.textContent = '';
        }

         // Validate Weight
         if (!weightLoss.checked && !weightGain.checked) {
           weightError.textContent = 'Please select either "Loss" or "Gain" for weight.';
        } else {
         weightError.textContent = '';
        } 

         if (phone) {
                if (phonePattern.test(phone)) {
                    phoneError.textContent = '';
                } else {
                    phoneError.textContent = 'Please enter a valid 10-digit phone number.';
                }
            } else {
                phoneError.textContent = 'Please enter your phone number.';
            }

        // Validate Email
        if (!email) {
            emailError.textContent = 'Please enter your email address.';
        } else if (!emailPattern.test(email)) {
            emailError.textContent = 'Please enter a valid email address.';
        } else {
            emailError.textContent = '';
        }

        // Validate Password
         if (!password) {
            passwordError.textContent = 'Please enter a password.';
         } else if (!passwordPattern.test(password)) {
            passwordError.textContent = 'Password must have at least one uppercase letter, one lowercase letter, one digit, and be at least 6 characters long.';
         } else {
             passwordError.textContent = '';
         }

         // Validate Confirm Password
         if (!rePassword) {
             rePasswordError.textContent = 'Please re-enter your password.';
         } else if (password !== rePassword) {
             rePasswordError.textContent = 'Passwords do not match.';
         } else {
            rePasswordError.textContent = '';
         }

        // Return true if there are no errors, indicating successful form submission
        return !(firstNameError.textContent || phoneError.textContent || lastNameError.textContent || genderError.textContent || addressError.textContent || passwordError.textContent || rePasswordError.textContent || weightError.textContent || emailError.textContent );
  </script>
</body>
</html>
