@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> Daftar Category</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}" class="text-decoration-none " >
                <div class="card w-75">
                    <div class="card-body d-flex align-items-center">
                      <h5 class="card-title text-center flex-fill">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($categories as $category)
        <ul> 
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>   
    @endforeach --}}
    <div class="container">
        <div class="row">
          <div class="col-9"></div>
          <div class="col-4"><div class="container">
            <div class="row">
                <div class="span12">
                    <table class="table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                              <th colspan="7">
                                <span class="btn-group">
                                    <a class="btn"><i class="icon-chevron-left"></i></a>
                                    <a class="btn active">Febuari 2022</a>
                                    <a class="btn"><i class="icon-chevron-right"></i></a>
                                </span>
                              </th>
                            </tr>
                            <tr>
                                <th>Su</th>
                                <th>Mo</th>
                                <th>Tu</th>
                                <th>We</th>
                                <th>Th</th>
                                <th>Fr</th>
                                <th>Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="muted">29</td>
                                <td class="muted">30</td>
                                <td class="muted">31</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td class="btn-primary"><strong>20</strong></td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td class="muted">1</td>
                                <td class="muted">2</td>
                                <td class="muted">3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div></div>
          <div class="col-6"><table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Garuda Ind</th>
                <th scope="col">1h 50m</th>
                <th scope="col">09.00 - 10.50</th>
                <th scope="col">economy class</th>
                <th scope="col">IDR 1.100.000/pax</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Batik Air</th>
                <th>1h 50m</th>
                <th>14.00 - 15.50</th>
                <th>business class</th>
                <th>IDR 1.700.000/pax</th>
              </tr>
              <tr>
                <th scope="row">Lion Air</th>
                <th>1h 50m</th>
                <th>18.00 - 19.50</th>
                <th>economy class</th>
                <th>IDR 850.000/pax</th>
              </tr>
              <tr>
                <th scope="row">Garuda Ind</th>
                <th>1h 50m</th>
                <th>20.00 - 21.50</th>
                <th>business class</th>
                <th>IDR 2.100.000/pax</th>
              </tr>
            </tbody>
          </table></div>
        </div>
      </div>
@endsection

