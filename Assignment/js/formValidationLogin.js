    function validateForm() {
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var age = document.getElementById('age').value;

        if (username.trim() == '') {
            alert('Username cannot be blank');
            return false;
        }

        if (email.trim() == '') {
            alert('Email cannot be blank');
            return false;
        } else if (!validateEmail(email)) {
            alert('Please enter a valid email address');
            return false;
        }

        if (age.trim() == '') {
            alert('Age cannot be blank');
            return false;
        } else if (age <= 0 || age > 150) {
            alert('Please enter a valid age');
            return false;
        }

        // All validations passed
        return true;
    }

    function validateEmail(email) {
        // Regular expression for email validation
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
