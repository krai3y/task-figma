<?php include("header.php");?>
<?php include("modal_ask.php");?>
<div class="bg-blue">
  <h3 class="text-white text-center py-5">Личный кабинет</h3>
</div>
<div class="container" style="margin: 80px auto;">
  <div class="row">
    <div class="col-lg-4 marg-bottom">
      <div class="row">
        <div class="col-8">
          <img src="svg/user.png" class="w-100">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-8">
            <button type="button" class="btn btn-lg text-white w-100 fs-5 header-btn">Редактировать</button>
        </div>
      </div>
    </div>
    <div class="col ps-5 index-bb pad-right-12-576 pad-left-12-576">
      <h2 class="pt-4 color-blue">Смирнов Антон Андреевич</h2>
      <div class="row mt-5">
        <div class="col-5">
          <p class="mb-5 fw-bold fs-5 lh-base">Логин:</p>
          <p class="mb-5 fw-bold fs-5 lh-base">Пароль:</p>
          <p class="mb-5 fw-bold fs-5 lh-base">Адрес эл.почты:</p>
          <p class="mb-5 fw-bold fs-5 lh-base">Номер телефона:</p>
        </div>
        <div class="col-5">
          <p class="mb-5 fs-5 lh-base">smirnov.a</p>
          <p class="mb-5 fs-5 lh-base">dsadas21</p>
          <p class="mb-5 fs-5 lh-base">smirnov@gmail.com</p>
          <p class="mb-5 fs-5 lh-base">+7 911 435 **-**</p>
        </div>
        <div class="col-2">
          <p class="mb-5 fs-5 lh-base">ㅤ</p>
          <a href="#"><img class="mb-5" style="width: 30px;" src="svg/eye.svg" alt=""></a>
          <p class="mb-5 fs-5 lh-base">ㅤ</p>
          <a href="#"><img class="mb-5" style="width: 30px;" src="svg/eye_close.svg" alt=""></a>
        </div>
      </div> 
    </div>
  </div>
</div>
<div class="container mb-5">
  <div class="row">
    <div class="col-lg marg-top">
      <h4>Смена пароля</h4>
      <input type="text" style="font-size: 20px; height: 60px; border-radius: 25px; margin: 20px 0;" placeholder="Старый  пароль" class="form-control" aria-describedby="inputGroup-sizing-lg">
      <input type="text" style="font-size: 20px; height: 60px; border-radius: 25px;" placeholder="Новый пароль" class="form-control mb-4" aria-describedby="inputGroup-sizing-lg">
      <button type="button" class="btn btn-lg text-white fs-5" style="background: #4170B7; border-radius: 20px; height: 50px; width: 200px">Сохранить</button>
    </div>
    <div class="col ms-4 ps-5 marg-left-0 pad-left-12 marg-top">
      <h4>Смена почты</h4>
      <input type="text" style="font-size: 20px; height: 60px; border-radius: 25px; margin: 20px 0;" placeholder="Новая почта" class="form-control" aria-describedby="inputGroup-sizing-lg">
      <div class="input-group mb-4">
        <input type="text" class="form-control rounded-end" style="font-size: 20px; height: 60px; border-radius: 25px;" placeholder="Код подтверждения" aria-describedby="basic-addon1">
        <div class="input-group-prepend">
          <span class="input-group-text rounded-start bg-white" style="font-size: 20px; height: 60px; border-radius: 25px;" id="basic-addon1">Отправить</span>
        </div>
      </div>
      <button type="button" class="btn btn-lg text-white fs-5" style="background: #4170B7; border-radius: 20px; height: 50px; width: 200px">Сохранить</button>
    </div>
  </div>
</div>
<?php include("footer.php");?>