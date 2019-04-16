<div class="field is-horizontal">
	<div class="field-label is-normal">
		<label class="label">{{$label}}</label>
	</div>
	<div class="field-body">
		<div class="field">
			<div class="control">
				<textarea class="textarea"  name="{{$name}}" placeholder="{{$placeholder}}">{{$value}}</textarea>
			</div>
			
			@if (isset($required))
			<p class="help is-danger">
		        This field is required
		    </p>
		    @endif
		</div>
	</div>
</div>