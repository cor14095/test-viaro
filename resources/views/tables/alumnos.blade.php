@extends('layouts.welcome')

@section('body')
<div id="app">
  <!-- <example-component></example-component> -->
  <db-table
  :table-name="'{!! 'alumno' !!}'">
  </db-table>
</div>
<script src="js/app.js"></script>
@endsection
