@extends('layouts/app')

@section('content')
	<div class="container">

		<div class="alert alert-primary" role="alert">
			This is a primary alert—check it out!
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-9">
				<h1>Hello I am demo</h1>

				<p>Lorem ipsum dolor amet live-edge fanny pack banh mi 90s, listicle iceland small batch activated charcoal hella. Affogato hella salvia offal ramps taiyaki chambray. Brooklyn thundercats church-key vaporware, knausgaard hammock 8-bit swag cray twee plaid messenger bag. Bespoke pour-over waistcoat hammock raclette fam post-ironic synth tote bag slow-carb semiotics. Four loko hammock keytar readymade tousled cronut palo santo swag fixie.</p>

				<button class="btn btn-success">Sign me up!</button>
				<button class="btn btn-danger">Abort abort abort!</button>
			</div>

			<div class="col-sm-6 col-md-3">
				<h3>Links</h3>
				<ul>
					<li>Google</li>
					<li>Bing</li>
					<li>Yahoo</li>
					<li>Altavista</li>
					<li>DuckDuckGo</li>
				</ul>
			</div>
		</div>

		<table class="table table-hover">
			<thead>
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
				<th>Column 4</th>
			</thead>
			<tbody>
				<tr>
					<td>Text 1</td>
					<td>Text 2</td>
					<td>Text 3</td>
					<td>Text 4</td>
				</tr>
				<tr>
					<td>Text 1</td>
					<td>Text 2</td>
					<td>Text 3</td>
					<td>Text 4</td>
				</tr>
				<tr>
					<td>Text 1</td>
					<td>Text 2</td>
					<td>Text 3</td>
					<td>Text 4</td>
				</tr>
				<tr>
					<td>Text 1</td>
					<td>Text 2</td>
					<td>Text 3</td>
					<td>Text 4</td>
				</tr>
			</tbody>
		</table>

	</div>
@endsection
