@extends('layouts/contentLayoutMaster')

@section('title', $title)

@section('content')
<section id="basic-vertical-layouts">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <?= createDatatableFormFilter($tradersFormData)?>
        
          {{-- <div class="row mb-2 mt-2">
            <div class="col-12">
              <div class="row justify-content-between mb-2">
                <div class="col-2">
                    <div class="form-group">
                        <?= limitDropDownData(5)?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="search" />
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                  <thead>
                    <tr>
                      <th>D</th>
                      <th>TIME</th>
                      <th>CLIENT</th>
                      <th>MARKET</th>
                      <th>SCRIPT</th>
                      <th>B/S</th>
                      <th>ORDER TYPE</th>
                      <th>LOT</th>
                      <th>QTY</th>
                      <th>ORDER PRICE</th>
                      <th>STATUS</th>
                      <th>USER IP</th>
                      <th>USER IP</th>
                      <th>O.TIME</th>
                      <th>MODIFY</th>
                      <th>CANCEL</th>
                      <th>EXECUTE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                    
                      <td colspan="16" align="center">No data available in table</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection