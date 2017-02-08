<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<img src="<?=$userData['picture_url'];?>" alt="" width="300" height="220"/><br><br>
			<table border="1" class="table table-striped">
				<tbody>
					<tr>
						<th>Facebook ID</th>
						<td><?=$userData['oauth_uid'];?></td>
					</tr>
					<tr>
						<th>Profile Name</th>
						<td><?=$userData['first_name'].' '.$userData['last_name'];?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?=$userData['email'];?></td>
					</tr>
					<tr>
						<th>Gender</th>
						<td><?=$userData['gender'];?></td>
					</tr>
					<tr>
						<th>Locale</th>
						<td><?=$userData['locale'];?></td>
					</tr>
					<tr>
						<th>Profile URL</th>
						<td><?=$userData['profile_url'];?></td>
					</tr>
				</tbody>
			</table>

	    </div>
	</div>
</section>