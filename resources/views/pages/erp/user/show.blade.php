@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Mobile
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Password
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                          
                          <td>
                            {{$user->id}}
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                          <td>
                          {{$user->mobile}}
                          </td>
                          <td>
                          {{$user->email}}
                          </td>
                          <td>
                           {{$user->address}}
                          </td>
                          <td>
                           {{$user->password}}
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection