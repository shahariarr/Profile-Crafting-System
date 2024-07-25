@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card shadow-lg">
				<div class="card-body">
					<h4 class="card-title text-center mb-4">Add Skill</h4>
					<form>
						<div class="form-group">
							<label for="skillType">Skill Type</label>
							<select class="form-control" id="skillType" name="type">
								<option value="technical">Technical</option>
								<option value="soft">Soft</option>
							</select>
						</div>
						<div class="form-group">
							<label for="skillName">Skill Name</label>
							<input type="text" class="form-control" id="skillName" name="name" placeholder="Enter skill name">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Add Skill</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
