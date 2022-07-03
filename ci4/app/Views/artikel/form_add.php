<?= $this->include('template/admin_header'); ?>
<div class="add">
<div class="title">

    <h2><?= $title; ?></h2>
</div>
<form action="" method="post" enctype="multipart/form-data">
     <p>
     <input type="text" name="judul">
     </p>
     <p>
     <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p>
       <input type="file" name="gambar">
   </p>
     <p><input type="submit" value="Kirim" class="btn btn-large"></p>
    </form>
</div>
<?= $this->include('template/admin_footer'); ?>
