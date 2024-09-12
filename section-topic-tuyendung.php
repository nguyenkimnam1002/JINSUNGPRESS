<?php include_once('./master_layout/header.php') ;
require "connect.php";

include_once('./master_layout/Database.php') ;

$db= new Database();

if(isset($_GET['category_id'])){
  $category_id=$_GET['category_id'];
} else {
  $category_id = 1;
}

// List tuyển dụng
$sql = "SELECT * FROM posts WHERE category_id = $category_id ORDER BY ID ASC LIMIT 12";
$listTinTuc = $db->fetchsql($sql);
?>

<main id="main" class="">
  <div id="content" class="content-area page-wrapper" role="main">
    <div class="row row-main">
      <div class="large-12 col">
        <div class="container">
          <?php foreach($listTinTuc as $item) :?>
          <div class="item">
              <img src="<?php echo base_url() ?>image/<?php echo $item['image']?>" alt="">
              <h3><?php echo $item['title']?></h3>
              <a href="post-item-details.php?id=<?php echo $item['id']?>&category_id=<?php echo $item['category_id']?>" target="_self" class="button secondary lowercase" style="border-radius:99px;">
                            <span>Xem chi tiết</span>
                          </a>
          </div>
          <?php endforeach ?>
          <!-- container -->
        </div>
      </div>
      <!-- .large-12 -->
    </div>
    <!-- .row -->
  </div>
</main>
<style>

.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.item {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.item img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.item h3 {
    font-size: 18px;
    margin: 15px 0;
    color: #333;
}

.detail-button {
    padding: 10px 20px;
    background-color: #0078d4;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 15px;
}

.detail-button:hover {
    background-color: #005ea8;
}

</style>

<?php include_once('./master_layout/footer.php') ?>