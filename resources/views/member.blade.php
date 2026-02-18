<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2 class="logo">LIBRARY MANAGEMENT</h2>
            <nav class="nav-links">
                <a href="#">Dashboard</a>
                <a href="#" class="active">Member Registration</a>
                <a href="#">Book Registration</a>
                <a href="#">Book Lending & Returning</a>

            </nav>



        </aside>


          <main class="main-content">
            <header class="top-bar">
                <h2>Member Registration</h2>
            </header>

            <div class="container">
    <div class="form-box">


        <form>
            <div class="input-group">
                <label>Name</label>
                <input type="text" placeholder="Enter your name" required>
            </div>

            <div class="input-group">
                <label>NIC</label>
                <input type="text" placeholder="Enter your NIC no" required>
            </div>

            <div class="input-group">
                <label>Address</label>
                <input type="text" placeholder="Enter your Address" required>
            </div>

            <div class="input-group">
                <label>Contact no</label>
                <input type="text" placeholder="Enter your Contact no" required>
            </div>



            <div class="buttons">
                <button type="submit" class="signup-btn">Add Member</button>
                <button type="button" class="signin-btn">Update Member</button>
                <button type="button" class="remove-btn">Remove Member</button>

            </div>
        </form>
    </div>
</div>





      </div>



        </main>


















    </div>

</body>
</html>
