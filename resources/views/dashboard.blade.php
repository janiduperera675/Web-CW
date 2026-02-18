<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2 class="logo">LIBRARY MANAGEMENT</h2>
            <nav class="nav-links">
                <a href="#" class="active">Dashboard</a>
                <a href="#">Member Registration</a>
                <a href="#">Book Registration</a>
                <a href="#">Book Lending & Returning</a>

            </nav>


        </aside>

        <main class="main-content">
            <header class="top-bar">
                <input type="text" placeholder="Search for your next book..." class="search-input">

            </header>

            <section class="banner">
                <div class="banner-text">
                    <h2>“Any book that helps a child to form a habit of reading, to make reading one of his deep and continuing needs, is good for him.”</h2>
                    <p>― Maya Angelou</p>
                    <button class="btn-more">Find out quotes</button>
                </div>

            </section>

            <section class="books-section">
                <h2>Trending Books</h2>
                <div class="book-grid">
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/GOThcEng.jpg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Game Of Thrones</p>
                        <p class="book-author">George R.R. Martin</p>
                        <span class="due-date">Released: 22/05/22</span>
                    </div>
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/images.jpeg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Song Of Ice & Fire</p>
                        <p class="book-author">George R.R. Martin</p>
                        <span class="due-date">Released: 06/04/21</span>
                    </div>
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/9781338299144.jpg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Socerers Stone</p>
                        <p class="book-author">J.K. Rowling</p>
                        <span class="due-date">Released: 31/05/19</span>
                    </div>
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/9780008402785_2.jpg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Fire & Blood</p>
                        <p class="book-author">George R.R. Martin</p>
                        <span class="due-date">Released: 01/11/20</span>
                    </div>
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/harry.jpeg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Goblet Of Fire</p>
                        <p class="book-author">J.K. Rowling</p>
                        <span class="due-date">Released: 17/10/05</span>
                    </div>
                    <div class="book-card">
                        <div class="book-cover color-1"><img src="{{  asset('images/how-to-read-the-game-of-thrones-books-in-chronological-order_z15t.jpg') }}" alt="" width="150" height="175"></div>
                        <p class="book-title">Fire & Blood</p>
                        <p class="book-author">George R.R. Martin</p>
                        <span class="due-date">Released: 22/05/22</span>
                    </div>


                    </div>
            </section>
        </main>
    </div>
</body>
</html>
