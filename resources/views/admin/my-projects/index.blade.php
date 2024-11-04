@extends('layouts.app')

@section('page-title', 'Projects');

@section('main-content')

<div>

    <table class="table">
        <thead>
          <tr>
            @foreach ($projects as $project)
              <th scope="col"> {{ $project->title }} </th> 
            @endforeach
            
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

</div>
@endsection