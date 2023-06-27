<? 
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php'); 

$sapi_type = php_sapi_name(); 
if ($sapi_type=="cgi") 
   header("Status: 404"); 
else 
   header("HTTP/1.1 404 Not Found"); 

@define("ERROR_404","Y"); 

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); 

$APPLICATION->SetTitle("404 - HTTP not found"); 

?>
<section class="page-error">
   <div class="container">
      <h1 class="title">Такой страницы нет на сайте</h1>
      <div class="text">Перейдите на <a href="/">Главную страницу</a> или воспользуйтесь меню</div>
  </div>
</section>
<style>
.page-error{
    padding: 384px 0 0 0;
    background: url('/local/assets/dist/img/img372.jpg') 0 -16px no-repeat;
    background-size: 47%;
    height: 47vw;
}
.page-error .title{
    margin: 0 0 0 auto;
    width: 50%;
    letter-spacing: 1.3px;
}
.page-error .text{
    margin: 55px 0 0 auto;
    width: 50%;
    font-size: 16px;
    color: #7d7d7d;
    letter-spacing: 0.7px;
}
.page-error .text a{

}
.page-error .text a:hover{
    text-decoration: underline;
}
.page-error + .footer{
    margin: 0;
}
@media (max-width: 1394px) {
    .page-error {
        padding: 200px 0 0 0;
    }
}
@media (max-width: 1199px) {
    .page-error .title{
        font-size: 40px;
    }
    .page-error .text {
        margin: 30px 0 0 auto;
        font-size: 14px;
    }
}
@media (max-width: 991px) {
    .page-error {
        padding: 110px 0 0 0;
    }
}
@media (max-width: 767px) {
    .page-error {
        padding: 110px 0 60px 0;
        height: auto;
        background-size: 55%;
    }
    .page-error .title {
        width: 100%;
        text-align: center;
    }
    .page-error .text {
        width: 100%;
        text-align: center;
    }
}
@media (max-width: 575px) {
    .page-error {
        padding: 110px 0 0 0;
    }
    .page-error .title {
        font-size: 30px;
    }
}
</style>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>