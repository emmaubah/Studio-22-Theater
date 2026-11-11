<?php
include('header.php');
?>

<main>
    <!-- Welcome message -->
    <section class="welcome">
        <p class="small-heading">WELCOME TO STUDIO 22</p>
        <h2>Enjoy a night at the movies.</h2>
        <p>There's nothing better than spending time with your loved ones while watching a great movie. Visit us to see what's happening this week!</p>
    </section>

    <!-- Movies currently listed at the theater -->
    <section id="movies">
        <h2 class="section-title">Now Showing</h2>
        <p class="section-description">Take a look at our movie selection.</p>

        <div class="movie-grid">
            <div class="movie-card">
                <div class="poster godzilla"></div>
                <h3>Godzilla Minus Zero</h3>
            </div>

            <div class="movie-card">
                <div class="poster cat"></div>
                <h3>The Cat in the Hat</h3>
            </div>

            <div class="movie-card">
                <div class="poster ramayana"></div>
                <h3>Ramayana</h3>
            </div>

            <div class="movie-card">
                <div class="poster wicker"></div>
                <h3>Wicker</h3>
            </div>

            <div class="movie-card">
                <div class="poster street"></div>
                <h3>Street Fighter</h3>
            </div>
        </div>
    </section>
</main>

<?php
include('footer.php');
?>
