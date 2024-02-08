@extends(backpack_view('blank'))



@section('content')
<style>
    table,tr,th,td {
       /* border:1px solid black; */
       text-align: center !important;
       vertical-align: middle !important;
    }

    .table {
        color: black !important;
    }

    table,thead,tr,th,td,h5,.card-title{
        /* font-family: "Poppins", sans-serif !important;     */
    }
    .card-header{
        background: #32579F;
        color:white;
    }
    .table th{
        background-color: #eef2f5 !important;
    }
    .table thead th{
        background-color: #32579F !important;
    }
    .last-row {
        /* background-color: #32579F !important; */
        color:#32579F;
    }
    .last-row th{
        /* background-color: #dbdbdb !important; */
        font-size:15px;
    }
    .title{
        height: 70px !important;
    }
    .title2{
        position: absolute;
        top:25px;
    }
    .title1{
        position: absolute;
        top:50px;
        left:25px;
    }
    .text-right{
        font-family: 'Poppins';
    }



    .styled-table {
      border-collapse: collapse;
      margin-bottom: 25px;
      font-size: 0.9em;
      border: none !important;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }


  .priGreen-text {
    color: #32579F;
  }

  .styled-table thead tr {
      background-color: #32579F !important;
      color: #ffffff;
      text-align: left;
  }

  .styled-table th,
  .styled-table td {
      padding: 12px 15px;
  }

  .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
  }

  .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
  }

  .styled-table tbody tr:last-of-type {
      border-bottom: 2px solid #32579F !important;
  }

  .styled-table tbody tr.active-row {
      font-weight: bold;
      color: #32579F;
  }
 </style>


<div class="card">
    <div class="card-header">
        <h6 class="card-title pb-0 mb-0">Watter Purifier</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 pt-3">
                <table class="styled-table w-100">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                 ?
                        
                        
                    </tbody>
                </table>
            </div>
           


@endsection
