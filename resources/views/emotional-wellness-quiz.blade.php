<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emotional Wellness Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include("components.navbar")
    <div class="container mt-5">
        <h2 class="text-center">Downloadable Wellness Quiz</h2>
        <div class="d-flex justify-content-center">
            <form id="quizForm" action="{{ route('download-quiz-pdf') }}" method="POST" style="width: 50%;"></form>
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone (optional)</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include("components.footer")
    <style>
        footer {
            margin-top: 10vh;
        }
        nav a:hover{
            text-decoration: none;
        }
    </style>
    <script>
        document.getElementById('quizForm').addEventListener('submit', function(event) {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;

            if (name === '') {
                alert('Name is required');
                event.preventDefault();
                return false;
            }

            var namePattern = /^[a-zA-Z\s]+$/;
            if (!namePattern.test(name)) {
                alert('Name should contain characters only');
                event.preventDefault();
                return false;
            }

            if (email === '') {
                alert('Email is required');
                event.preventDefault();
                return false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address');
                event.preventDefault();
                return false;
            }

            if (phone !== '' && isNaN(phone)) {
                alert('Phone number must be numeric');
                event.preventDefault();
                return false;
            }

            return true;
        });
    </script>
</body>
</html>
