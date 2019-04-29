@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="bs-example">
  <!-- Button HTML (to Trigger Modal) -->
  <a href="#myModal"  data-toggle="modal">Quake 3 die hard player</a>

  <!-- Modal HTML -->
  <div id="myModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Quake 3 Ownage</h4>
              </div>
              <div class="modal-body">
                  <iframe id="quake3" width="640" height="480" src="//www.youtube.com/embed/c20CeqL2Dh0" frameborder="0" allowfullscreen></iframe>
              </div>
          </div>
      </div>
  </div>
</div> s
@endsection
