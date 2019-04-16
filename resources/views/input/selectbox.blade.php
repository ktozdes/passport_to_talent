<div class="field is-horizontal">
	<div class="field-label is-normal">
		<label class="label">{{$label}}</label>
	</div>
	<div class="field-body">
		<div class="control">
			<div class="select">
				<select name="{{$name}}">
					<option value="0">{{$placeholder}}</option>
					@foreach ($list as $singleItem)
					<option value="{{$singleItem->$option_id}}" {{$value == $singleItem->$option_id ? 'selected' : ''}}>{{$singleItem->$option_text}}</option>
					@endforeach
				</select>
			</div>
			@if (isset($required))
			<p class="help is-danger">
		        This field is required
		    </p>
		    @endif
		</div>
	</div>
</div>