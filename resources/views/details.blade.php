@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detalles de la cuenta</div>

                <div class="panel-body">
                  <table class="ui single line table">
                   <thead>
                     <tr>
                       <th>Cliente</th>
                       <th>Fecha de compra</th>
                       <th>E-mail</th>
                       <th>Al corriente</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>John Lilki</td>
                       <td>September 14, 2013</td>
                       <td>jhlilk22@yahoo.com</td>
                       <td>No</td>
                     </tr>
                     <tr>
                       <td>Jamie Harington</td>
                       <td>January 11, 2014</td>
                       <td>jamieharingonton@yahoo.com</td>
                       <td>sí</td>
                     </tr>
                     <tr>
                       <td>Jill Lewis</td>
                       <td>May 11, 2014</td>
                       <td>jilsewris22@yahoo.com</td>
                       <td>sí</td>
                     </tr>
                   </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
