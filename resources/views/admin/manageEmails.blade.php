@extends('admin.master')
@section('content')


  
              <div class="content">
                     

                    <!-- Start Content-->
                    <div class="container-fluid">
								<div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title"> Manage Emails </h4>
                                        <a href="/panel/exportmail" target="_blank" class="btn btn-primary" style="float: right;margin: 10px;">Export</a>

                                         <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-example-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                            	 <th>#id</th>
                                                        		 <th>Name</th>
                                                        		 <th>Email</th>
                                                        		 <th>Mobile</th>
                                                        		 <th>Subject</th>
                                                        		 <th>Date</th>
                                                        	 </tr>
                                                        </thead>
                                                        <tbody>
                                                        	@if(isset($data))
                                                        	@foreach($data as  $key =>  $row)
                                                            <tr>
                                                                <td>{{$key+1}}</td>
                                                                <td>{{$row->name}}</td>
                                                                 <td>{{$row->email}}</td>
                                                                 <td>{{$row->mobile}}</td>
                                                                 <td>{{$row->subject}}</td>
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
		  	$.get('/panel/remove-news', {id:id}, function (data, textStatus, jqXHR) {
			    alert(data.message)
			     window.location.reload();
 			});
		  })
	});
</script>
@endsection


