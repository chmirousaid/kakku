<x-layout>

  <x-slot:heading>
    <div class="d-flex justify-content-around">
      <h1>Home page</h1>

      <form class="d-flex">
        <input class="form-control me-1" type="search" placeholder="Find a recipe" aria-label="Search">
        <button class="btn btn-outline-secondary bg-purple-200" type="submit">Search</button>
      </form>
    </div>
  </x-slot:heading>


  <h1 class="text-2xl font-bold tracking-tight text-gray-900">Most recent recipes</h1></br>


  


  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{URL::asset('/images/cherry.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
  </br><a href="/">see all recipes</a>

  <!-- first part -->




</x-layout>