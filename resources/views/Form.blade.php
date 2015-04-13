
<h1> Welcome</h1>
<hr/>
<div class="container">
	<div class="col-lg-6">
		{!! Form::open(['url' => 'Form']) !!}
			<div class="form-group">
			    <div class="col-lg-3">
					{!! Form::label('name','Enter Destination:') !!}
				</div>
					<div class="col-lg-3">
						{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
					</div>
			</div><br><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','Travelling From:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','Starting Date:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','No. of Nights:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>
			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','Remark:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>
		{!! Form::close() !!}
	</div>

	<div class="col-lg-6">
		{!! Form::open(['url' => 'Form']) !!}
			<div class="form-group">
			    <div class="col-lg-3">
					{!! Form::label('name','Adults:') !!}
				</div>
					<div class="col-lg-3">
						{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
					</div>
			</div><br><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','Kids:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','Activit') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>

			<div class="form-group">
	 			<div class="col-lg-3">
					{!! Form::label('name','No. of Nights:') !!}
				</div>
	 			<div class="col-lg-3">
					{!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
				</div>
			</div><br><br>
		{!! Form::close() !!}
	</div> 
<div class="col-lg-12">
{!! Form::open() !!}
<div class="form-group" style="padding-left:32%;">
	{!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
	{!! Form::close() !!}
</div>
</div>
</div>
  

@stop
