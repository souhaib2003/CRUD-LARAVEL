<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Souhaib</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts.index')}}">All Posts</a>
        </li>
        
      </ul>
     </div>
  </div>
</nav>
<div class="card mt-5">
    
  <div class="card-header">
    Pst info
  </div>
  
  <div class="card-body">
    <h5 class="card-title">Title : {{$post['Title']}}</h5>
    <p class="card-text">Description : {{$post['Description']}}</p>
   
  </div>

  <div class="card mt-4">
  <div class="card-header">
    Post Creator info
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: Souhaib</h5>
    <p class="card-text">Email: souhaibsouhaib490@gmail.com</p>
    <p class="card-text">Created at :thursday 25th of December 1975 02:15:16 PM</p>
   
  </div>
</div>
   
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>