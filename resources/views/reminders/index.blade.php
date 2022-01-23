<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Laravel Livewire Reminder Notes</h1>
  <p>This is a basic app using laravel Livewire</p> 
</div>
  
<div class="container">
<button class="btn btn-primary" data-toggle="modal" data-target="#add-reminder">Add reminde</button>
<button type="button" class="btn btn-danger">Delete reminder</button>
        @livewire('show-reminder-notes');
</div>

</body>
</html>
