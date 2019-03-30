<div class="field is-horizontal">
	<div class="field-label is-normal">
		<label class="label">{{$label}}</label>
	</div>
	<div class="field-body">
		<div class="control">
			<div class="select">
				<select name="{{$name}}">
					<option>{{$placeholder}}</option>
					@foreach ($list as $singleItem)
					<option value="{{$singleItem->$option_id}}" {{$value == $singleItem->$option_id ? 'selected' : ''}}>{{$singleItem->$option_text}}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
</div>