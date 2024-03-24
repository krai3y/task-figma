<?php include("header.php");?>
<div style="background-color: #4170B7">
  <h3 class="text-white text-center py-5">Личный кабинет</h3>
</div>
<div class="container" style="margin: 80px auto;">
  <div class="row">
    <div class="col-4">
      <div class="row">
        <div class="col-8">
          <img src="svg/user.png" class="w-100">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-8">
            <button type="button" class="btn btn-lg text-white w-100 fs-5" style="background: #4170B7; border-radius: 15px; height: 60px">Редактировать</button>
        </div>
      </div>
    </div>
    <div class="col ps-5" style="box-shadow: 0px 4px 50px 0px #00000040; border-radius: 30px;">
      <h2 class="pt-4" style="color: #02409F;">Смирнов Антон Андреевич</h2>
      <div class="row mt-5">
        <div class="col">
          <p class="mb-4 fw-bold fs-5" style="line-height: 30px;">Логин:</p>
          <p class="mb-4 fw-bold fs-5" style="line-height: 30px;">Пароль:</p>
          <p class="mb-4 fw-bold fs-5" style="line-height: 30px;">Адрес электронной почты:</p>
          <p class="mb-4 fw-bold fs-5" style="line-height: 30px;">Номер телефона:</p>
        </div>
        <div class="col-4">
          <p class="mb-4 fs-5" style="line-height: 30px;">smirnov.a</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">dsadas21</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">smirnov@gmail.com</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">+7 911 435 **-**</p>
        </div>
        <div class="col-3">
          <p class="mb-4 fs-5" style="line-height: 30px;">ㅤ</p>
          <a href="#"><img class="mb-4" style="width: 30px;" src="svg/eye.svg" alt=""></a>
          <p class="mb-4 fs-5" style="line-height: 30px;">ㅤ</p>
          <a href="#"><img class="mb-4" style="width: 30px;" src="svg/eye_close.svg" alt=""></a>
        </div>
      </div> 
    </div>
  </div>
</div>
<div class="container mb-5">
  <div class="row">
    <div class="col">
      <h4>Смена пароля</h4>
      <input type="text" style="font-size: 20px; height: 60px; border-radius: 25px; margin: 20px 0;" placeholder="Старый  пароль" class="form-control" aria-describedby="inputGroup-sizing-lg">
      <input type="text" style="font-size: 20px; height: 60px; border-radius: 25px;" placeholder="Новый пароль" class="form-control mb-4" aria-describedby="inputGroup-sizing-lg">
      <button type="button" class="btn btn-lg text-white fs-5" style="background: #4170B7; border-radius: 20px; height: 50px; width: 200px">Сохранить</button>
    </div>
    <div class="col ms-4 ps-5">
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