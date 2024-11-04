@extends('layouts.app')

@section('page-title', 'Projects');

@section('main-content')

<div>

  <h1>
    Progetti
  </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"> Nome progetto </th> 
            <th scope="col"> Descrizione </th>
            <th scope="col"> Scadenza </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
              <td>{{ $project->title }}</td>
              <td>{{ $project->description }}</td>
              <td>{{ $project->deadline }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

</div>
@endsection