@extends('admin.master')
@section('content')



<div class="content">


    <!-- Start Content-->
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title"> Manage News </h4>
                    <div class="tab-pane ">
                        <select class="custom-select mb-3 styled-select slate" id='mySelector'>
                            <option selected>Select Language</option>
                            <option value='ar'>Arabic</option>
                            <option value='en'>English</option>
                            <option value='both'>Both</option>
                        </select>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-example-preview">
                            <div class="table-responsive-sm">
                                <table class="table table-centered mb-0" id='myTable'>
                                    <thead>
                                        <tr>

                                            <th id="title_header">Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Language</th>
                                            <th>Publish At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($data))
                                        @foreach($data as $row)
                                        <tr>

                                            <td>{{$row->title}}</td>
                                            <td>{{$row->description	}}</td>
                                            <td> <span class="badge badge-success badge-pill">Active</span></td>
                                            <td>
                                                <a href="/panel/edit-rewards/{{$row->id}}" class="editpost"
                                                    data-id="{{$row->id}}">
                                                    <span class="badge badge-primary badge-pill">Edit</span>
                                                </a>
                                                <a href="javascript: void(0);" class="deletepost"
                                                    data-id="{{$row->id}}">
                                                    <span class="badge badge-warning badge-pill">Delete</span>
                                                </a>
                                            </td>
                                            <td>{{$row->lang}}</td>
                                            <td>{{date('d M, Y ', $row->created_at) }}</td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="basic-example-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-centered mb-0"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Name<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Phone Number<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Date of Birth<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Active?<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Risa D. Pearson<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>336-508-2157<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>July 24, 1950<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><br>                <span class="hljs-comment">&lt;!-- Switch--&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch1"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"success"</span>/&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch1"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0 d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Ann C. Thompson<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>646-473-2057<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>January 25, 1959<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><br>                <span class="hljs-comment">&lt;!-- Switch--&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch2"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"success"</span>/&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch2"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0 d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Paul J. Friend<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>281-308-0793<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>September 1, 1939<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><br>                <span class="hljs-comment">&lt;!-- Switch--&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch3"</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"success"</span>/&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch3"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0 d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Linda G. Smith<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>606-253-1207<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>May 3, 1962<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><br>                <span class="hljs-comment">&lt;!-- Switch--&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch4"</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"success"</span>/&gt;</span><br>                    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch4"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0 d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>                <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
		  //your code here
		  $('.deletepost').click(function(){
		  	var id = $(this).data('id')
		  	$.get('/panel/remove-rewards', {id:id}, function (data, textStatus, jqXHR) {
			    alert(data.message)
			     window.location.reload();
 			});
		  })
		  var table = $('table');

	$('#mySelector').change( function(){
      $('table').show();
      var selection = $(this).val();

      var dataset = $('#myTable').find('tr');
      if(selection == "both"){
      	dataset.show();
      	return;
      }else{
            dataset.show();
		    // filter the rows that should be hidden
		    dataset.filter(function(index, item) {
		      return $(item).find('td:nth-child(5)').text().split(',').indexOf(selection) === -1;
		    }).hide();
      }


    });
	});
</script>
@endsection
