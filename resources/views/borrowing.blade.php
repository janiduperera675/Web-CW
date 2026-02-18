<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/borrowing.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2 class="logo">LIBRARY MANAGEMENT</h2>
            <nav class="nav-links">
                <a href="#">Dashboard</a>
                <a href="#">Member Registration</a>
                <a href="#">Book Registration</a>
                <a href="#" class="active">Book Lending & Returning</a>

            </nav>



        </aside>


          <main class="main-content">
            <header class="top-bar">
                <h2>Lending & Returning</h2>
            </header>

            <div class="container">
    <div class="form-box">


        <form>
            <div class="input-group">
                <label>Member ID</label>
                <input type="text" placeholder="Enter the member id" required>
            </div>

            <div class="input-group">
                <label>Book ID</label>
                <input type="text" placeholder="Enter the book id" required>
            </div>

            <div class="input-group">
                <label>Member Name</label>
                <input type="text" placeholder="Enter the member name" required>
            </div>
            <div class="input-group">
                <label>Borrowed Date</label>
                <input type="date" required>
            </div>
            <div class="input-group">
                <label>Due Date</label>
                <input type="date" required>
            </div>
            <div class="input-group">
                <label>Returned Date</label>
                <input type="date" required>
            </div>





            <div class="buttons">
                <button type="submit" class="signup-btn">Lend</button>
                <button type="button" class="signin-btn">Update</button>
                <button type="button" class="remove-btn">Remove Lending</button>

            </div>
        </form>
    </div>
</div>

          </div>
</main>
</div>
</body>
</html>
