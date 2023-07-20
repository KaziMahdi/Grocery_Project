@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">
          <h4 class="color-primary">Stock Report</h4>
          <input type="text" class="form-control" placeholder="Searche" id="serch" style="height: 40px;width: 30%;" onkeyup="search()">
          <a href="{{route('stocks.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i>Manage Stock</a>

        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              
              <th>
                SN
              </th>
              <th>
                Product
              </th>
              <th>
                Measure
              </th>              
              


            </tr>
          </thead>
          <tbody>
            @php 
            $sn=0;
            @endphp

            @foreach($materials as $material)
            <tr>

              
              <td>
                {{++$sn}}
              </td>
              <td>
                {{$material->name}}
              </td>
              <td>
                {{$material->total_qty}}
              </td>
              
              
              
            </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr>
              <th colspan="8">
                
              </th>
            </tr>
          </tfoot>

        </table>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
        function search(){
            let serch=document.getElementById('serch').value
            
            let table=document.getElementById('table')
            
            let tr=table.getElementsByTagName('tr')
            
            for(i=0;i<tr.length;i++){

                let td=tr[i].getElementsByTagName('td')

                for(l=0;l<td.length;l++){
                    let content=td[l].textContent

                    if(content.indexOf(serch) > -1){
                        tr[i].style.display=""
                        tr[i].style.backgroundColor="#f2f2f2"
                        

                        break;
                    }else{
                        tr[i].style.display="none"
                    }
                }
            }
        }
</script>
@endsection
@endsection