<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bookstyle.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2 class="logo">LIBRARY MANAGEMENT</h2>
            <nav class="nav-links">
                <a href="#">Dashboard</a>
                <a href="#">Member Registration</a>
                <a href="#" class="active">Book Registration</a>
                <a href="#">Book Lending & Returning</a>

            </nav>



        </aside>


          <main class="main-content">
            <header class="top-bar">
                <h2>New-Book Registration</h2>
            </header>

            <div class="container">
    <div class="form-box">


        <form>
            <div class="input-group">
                <label>Book Name</label>
                <input type="text" placeholder="Enter the book name" required>
            </div>

            <div class="input-group">
                <label>Author</label>
                <input type="text" placeholder="Enter the Author" required>
            </div>

            <div class="input-group">
                <label>Published Date</label>
                <input type="date"  required>
            </div>





            <div class="buttons">
                <button type="submit" class="signup-btn">Add Book</button>
                <button type="button" class="signin-btn">Update Book</button>
                <button type="button" class="remove-btn">Remove Book</button>

            </div>
        </form>
    </div>
</div>

          </div>
</main>
</div>
</body>
</html>
