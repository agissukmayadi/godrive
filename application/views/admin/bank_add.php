<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data
			</h6>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<div class="row align-items-center">
					<?= $this->session->flashdata("alert") ?>
					<form action="<?= current_url() ?>" method="post" class="col-12">
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="bank" class="form-label">Bank</label></div>
							<div class="col-9">
								<input type="text" class="form-control" id="bank" name="bank"
									value="<?= set_value("bank") ?>">
							</div>
							<?= form_error("bank", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="number" class="form-label">Nomor Rekening</label></div>
							<div class="col-9">
								<input type="text" class="form-control" id="number" name="number"
									value="<?= set_value("number") ?>">
							</div>
							<?= form_error("number", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="name" class="form-label">Atas Nama</label></div>
							<div class="col-9">
								<input type="text" class="form-control" id="name" name="name"
									value="<?= set_value("name") ?>">
							</div>
							<?= form_error("name", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-9">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<a href="<?= base_url("admin/bank_list") ?>" class="btn btn-danger">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
