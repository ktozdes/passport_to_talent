<div class="field is-horizontal">
	<div class="field-label is-normal">
		<label class="label">{{$label}}</label>
	</div>
	<div class="field-body">
		<div class="field">
			<div class="control">
				<input class="input" name="{{$name}}" type="text" placeholder="{{$placeholder}}" value="{{$value}}">
			</div>
			@if (isset($required))
			<p class="help is-danger">
		        This field is required
		    </p>
		    @endif
		</div>
	</div>
</div>