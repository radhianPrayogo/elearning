<div class="row">
    <div class="col-md-4">
        <?php echo form_open('konsultasi/addKategori'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><strong>Tambah Kategori Konsultasi</strong></h2>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <?php echo form_input('name', '', array('class' => 'form-control')); ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <?php echo form_input('description', '', array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="panel-footer">
                <?php echo button_save() ?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><strong>Daftar Konsultasi</strong></h2>
            </div>
            <div class="panel-body">                
                <table class="table table-hover table-bordered" id="article">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subjek</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kategori as $row): ?>
                        <tr>
                            <td><?php echo $row->id ?></td>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->description ?></td>
                            <td>
                                <?php echo button_edit('konsultasi/updateKategori/' . $row->id) ?>
                                <?php echo button_delete('konsultasi/deleteKategori/' . $row->id) ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#article').DataTable();
    } );
</script>
