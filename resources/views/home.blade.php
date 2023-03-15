@extends('layouts.main')

@section('container')

<div id="carouselExampleIndicators" class="carousel slide overflow-hidden" style="height: 24rem;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/gambar2.png" class="d-block w-100 object-fit-cover" style="height: 24rem;" alt="Travelling made easy with SKuyla">
        <div class="carousel-caption d-none d-md-block">
            <p>Travelling made easy</p>
            <h4 >With SKuyla </h4>
          </div>
      </div>
      <div class="carousel-item">
        <img src="/img/gambar1.jpg" class="d-block w-100 object-fit-cover" style="height: 24rem;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>Travelling made easy</p>
          <h4 >With SKuyla </h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/gambar3.jpg" class="d-block w-100 object-fit-cover" style="height: 24rem;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>Travelling made easy</p>
          <h4 >With SKuyla </h4>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="bg-light shadow mx-4 pt-1 mt-4 rounded rounded-md">
    <div class="d-flex mt-5 justify-content-sm-evenly">
      <div class="text-center"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-train-lightrail-front" viewBox="0 0 16 16">
          <path d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1h-3ZM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3Zm3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5Zm-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104H4.47Zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6h-7.69Z"/>
        </svg>
        <h5 class="mt-2">Trains</h5>
      </div>
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
          <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
        </svg>
        <h5 class="mt-2">Plane</h5>
      </div>
        <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bus-front-fill" viewBox="0 0 16 16">
          <path d="M16 7a1 1 0 0 1-1 1v3.5c0 .818-.393 1.544-1 2v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V14H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2a2.496 2.496 0 0 1-1-2V8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1V2.64C1 1.452 1.845.408 3.064.268A43.608 43.608 0 0 1 8 0c2.1 0 3.792.136 4.936.268C14.155.408 15 1.452 15 2.64V4a1 1 0 0 1 1 1v2ZM3.552 3.22A43.306 43.306 0 0 1 8 3c1.837 0 3.353.107 4.448.22a.5.5 0 0 0 .104-.994A44.304 44.304 0 0 0 8 2c-1.876 0-3.426.109-4.552.226a.5.5 0 1 0 .104.994ZM8 4c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.304 44.304 0 0 0 8 4Zm-3 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm8 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-7 0a1 1 0 0 0 1 1h2a1 1 0 1 0 0-2H7a1 1 0 0 0-1 1Z"/>
      </svg>
      <h5 class="mt-2">Bus</h5>
  </div>
      <div class="text-center">
      <img src="https://img.icons8.com/dotty/80/null/cargo-ship.png"/>
      <h5 class="mt-2">Cruise Ship</h5>
  </div>
  <div class="text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
          <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
        </svg>
        <h5 class="mt-2">Car Rental</h5>
      </div>
    </div>
  </div>
  <div class="bg-light shadow mx-4 pt-1 mt-4 rounded rounded-md">
  <div class="d-flex mt-5 justify-content-sm-evenly">
  <div class="row g-2">
    <div class="col-md">
      <div class="col-md">
        <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid">
            <option selected>Tujuan</option>
            <option value="1">Jakarta (CGK)</option>
            <option value="2">Pontianak (PNK)</option>
            <option value="3">Denpasar (DPS)</option>
          </select>
          <label for="floatingSelectGrid">Pilih destinasimu</label>
        </div>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInputGrid" placeholder="3 orang" value="3 orang">
        <label for="floatingInputGrid">Jumlah Penumpang</label>
      </div>
    </div>
  </div>
</div>
</div>
<h3>Ayo Kita Explore Indonesia</h3>
    
  </div>
  <div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="/img/bali.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Jakarta</h5>
      <p class="card-text">Jakarta atau secara resmi bernama Daerah Khusus Ibukota Jakarta (disingkat DKI Jakarta) adalah ibu kota negara dan kota terbesar di Indonesia. Menurut sistem pembagian administratif Indonesia, Jakarta merupakan provinsi dengan status daerah khusus. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan. Jakarta terletak di pesisir bagian barat laut Pulau Jawa.</p>
    </div>
  </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="/img/bali.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Denpasar (Bali)</h5>
      <p class="card-text">Denpasar adalah ibu kota Provinsi Bali yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Bali. Denpasar juga merupakan sebuah wilayah kota yang terletak di Provinsi Bali, Indonesia. Denpasar adalah kota terbesar di Kepulauan Nusa Tenggara dan kota terbesar kedua di wilayah Indonesia Timur setelah Kota Makassar.</p>
    </div>
  </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="/img/yogyakarta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Yogyakarta</h5>
      <p class="card-text">Daerah Istimewa Yogyakarta adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan dari Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudra Hindia.</p>
    </div>
  </div>
    </div>
  </div>
</div>

@endsection