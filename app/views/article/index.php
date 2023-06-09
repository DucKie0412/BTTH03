<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duckie_nee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <h2>Homepage</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Summary</th>
            <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
           <?php
            foreach ($articles as $article) {
                ?>
                <tr>
                    <th scope="row"><?= $article->getId(); ?></th>
                    <td><?= $article->getTitle(); ?></td>
                    <td><?= $article->getSummary(); ?></td>
                    <td><?= $article->getContent(); ?></td>
                </tr>

                
            <?php
            }

           ?>

        </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>