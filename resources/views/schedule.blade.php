@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-center">
  <div class="d-flex mt-5 justify-content-sm-evenly">
    <tr>
    <th scope="row">Jakarta(CGK)</th>
    </tr>
</div>
</div>
<div class="row">
    <div class="col">
      <div class="card mb-4">
        <div class="card-body text-center">
            <section style="background-color: #eee;">
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
<div class="container">
	<div class="row">
        <div class="span12">
    		<table class="table-condensed table-bordered table-striped">
                <thead>
                    <tr>
                      <th colspan="7">
                        <span class="btn-group">
                            <a class="btn"><i class="icon-chevron-left"></i></a>
                        	<a class="btn active">February 2012</a>
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
</div>
</section>
@endsection 