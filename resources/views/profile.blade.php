@extends('layouts.main')

@section('container')

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Ferdy Slebew</h5>
              <p class="text-muted mb-1"></p>
              <p class="text-muted mb-4">Pontianak, Kalimantan Barat</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Ferdy slebew</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">ferdy@gmail.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(+62) 896-2908-5400</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Siantan, Pontianak, Kalimantan Barat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2>Recent</h2>
        <div class="row">
          <div class="col">
            <div class="card mb-4">
              <div class="card-body text-center">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Seat</th>
              <th scope="col">Hasil penerbangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>14 - Maret - 2023</td>
              <td>14.00 - 17.45</td>
              <td>B45, B46</td>
              <td>Jakarta(CGK) - Pontianak(PNK)</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>15 - Maret - 2023</td>
              <td>18.00 - 20.45</td>
              <td>A45, A46</td>
              <td>Jakarta(CGK) - Denpasar(DPS)</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>16 - Maret - 2023</td>
              <td>07.50 - 10.30</td>
              <td>C07</td>
              <td>Jakarta(CGK) - Batam(BTH)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  </section>

@endsection