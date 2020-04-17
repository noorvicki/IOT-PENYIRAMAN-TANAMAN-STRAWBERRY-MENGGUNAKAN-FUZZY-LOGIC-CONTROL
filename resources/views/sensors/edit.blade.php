@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sensor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sensor, ['route' => ['sensors.update', $sensor->id], 'method' => 'patch']) !!}

                        @include('sensors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection