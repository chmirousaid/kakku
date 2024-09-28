<x-layout>

  <x-slot:heading>
    <div class="d-flex justify-content-around ">
      <h1>Home page</h1>

      <form class="d-flex">
        <input class="form-control me-1" type="search" placeholder="Find a recipe" aria-label="Search">
        <button class="btn btn-outline-secondary bg-purple-200" type="submit">Search</button>
      </form>
    </div>
  </x-slot:heading>
  <!-- most Recent div -->
  <div>
    <h1 class="text-2xl font-bold tracking-tight text-gray-400">Most Visted recipes</h1></br>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{URL::asset('/images/cakes/cake1.jpg')}}" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{URL::asset('/images/cakes/cake2.jpg')}}" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{URL::asset('/images/cakes/cake3.jpg')}}" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </br>
  <!-- most visted  div -->
  <div>

    <h1 class="text-2xl font-bold tracking-tight text-gray-400">Most Visted recipes</h1></br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="{{URL::asset('/images/cherry.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{URL::asset('/images/cherry.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{URL::asset('/images/cherry.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    </br><a href="/">see all recipes</a>
  </div>
</br>



  <!-- Story part -->
  <div>
  <h1 class="text-2xl font-bold tracking-tight text-gray-400">Story</h1></br>
  <div class="card mb-3" style="max-width: auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{URL::asset('/images/cakes/Storypic2.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Story</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted"> Contact me ! </small></p>
      </div>
    </div>
  </div>
</div>

  </div>




</x-layout>