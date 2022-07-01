<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENL CrMA - Crew</title>
</head>
<body>
    <div class="container">
        <h1>Crews</h1>
        <p>List of Crew in ENL</p>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Crew Name</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <th scope="col">
                            <i class="bi bi-person-badge"></i>
                            David Aurelius
                        </th>
                        <th scope="col">Available</th>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>