<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>

  <div class="col col _3">
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_social");
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <a href="<?= $data['link'] ?>">
        <h4><?= $data['nama_sosmed'] ?></h4>
        <img width="20" src="admin/social/img/<?= $data['icon'] ?>" class="img_nom img_border img_border_b" />
      </a>
    <?php } ?>
  </div>

  <div class="col col_3">
    <h4>Twitter</h4>
    <ul class="nobullet twitter">
      <li><a href="#">@templatemo</a> at scelerisque urna in tellus varius ultricies.</li>
      <li>Suspendisse enean <a href="#">#FREE</a> tincidunt massa in tellus varius ultricies.</ <li> Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
    </ul>
  </div>
  <div class="col col _3">
  </div>
  <?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM tb_about");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <h4><?= $data['judul'] ?></h4>
    <p> <?= $data['isi'] ?></p>


  <?php } ?>


  <div class="clear"></div>
</div>