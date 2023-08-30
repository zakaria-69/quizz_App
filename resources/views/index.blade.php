<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Quizz</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <div class="card text-center">

        <div class="card-header">Quizz-App</div>

        <div class="card-body">

            <form action="{{ route('quizzs.store') }}" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div>
                    <label for="subject">Subject:</label>
                    <select name="subject" id="subject">

                        <optgroup label="Entertainement">
                            <option value="Books">Books</option>
                            <option value="Film">Film</option>
                            <option value="Music">Music</option>
                            <option value="Musical & Theatres">Musical & Theatres</option>
                            <option value="Television">Television</option>
                            <option value="Video Games">Video Games</option>
                            <option value="Board Games">Board Games</option>
                            <option value="comics">comics</option>
                            <option value="Japenese Anime & Manga">Japenese Anime & Manga</option>
                            <option value="Cartoons & Animations">Cartoons & Animations</option>
                        </optgroup>

                        <optgroup label="Science & Nature">
                            <option value="Computers">computers</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Gadgets">Gadgets</option>
                        </optgroup>

                        <optgroup value="General knowledge">General knowledge</optgroup>
                        <optgroup value="Mythology">Mythology</optgroup>
                        <optgroup value="Geography">Geography</optgroup>
                        <optgroup value="Sports">Sports</optgroup>
                        <optgroup value="History">History</optgroup>
                        <optgroup value="Politics">Politics</optgroup>
                        <optgroup value="Arts">Arts</optgroup>
                        <optgroup value="celebrities">celebrities</optgroup>
                        <optgroup value="Animals">Animals</optgroup>
                        <optgroup value="vehicles">vehicles</optgroup>
                    </select>
                </div>

                <div>
                    <select>
                        <option type="Easy">Easy</option>
                        <option type="Medium">Medium</option>
                        <option type="Difficult">Difficult</option>
                    </select>
                </div>

                <div>
                    <label for="difficulty">Difficulty:</label>
                    <select>
                        <option type="Easy">Easy</option>
                        <option type="Medium">Medium</option>
                        <option type="Difficult">Difficult</option>
                    </select>
                </div>

                <div>
                    <label for="date">Date:</label>
                    <Date type="date" name="date" id="date" required>
                </div>

                <div>
                    <label for="score">Score:</label>
                    <input type="text" name="score" id="score" required>
                </div>
                <div> <button type="submit">Commencer</button></div>
            </form>
        </div>

        <div class="card-footer text-body-secondary"> @copy Quizz M2i</div>

</body>

</html>