<?php include("header_main.php");?>
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border-radius: 40px; font-size: 20px;">
            <div class="modal-header border-0" style="padding: 36px 36px 0 0;">
                <button type="button" class="btn" data-bs-dismiss="modal" style="margin: -1rem -1rem -1rem auto">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M12.5379 11.2121C12.1718 10.846 11.5782 10.846 11.2121 11.2121C10.846 11.5782 10.846 12.1718 11.2121 12.5379L13.6742 15L11.2121 17.4621C10.846 17.8281 10.846 18.4218 11.2121 18.7879C11.5782 19.154 12.1718 19.154 12.5379 18.7879L15 16.3259L17.462 18.7879C17.8282 19.154 18.4218 19.154 18.7879 18.7879C19.154 18.4218 19.154 17.8281 18.7879 17.462L16.3258 15L18.7879 12.5379C19.154 12.1718 19.154 11.5782 18.7879 11.2121C18.4218 10.846 17.8282 10.846 17.462 11.2121L15 13.6741L12.5379 11.2121Z" fill="#FD7C58"/> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.5625C7.57868 1.5625 1.5625 7.57868 1.5625 15C1.5625 22.4214 7.57868 28.4375 15 28.4375C22.4214 28.4375 28.4375 22.4214 28.4375 15C28.4375 7.57868 22.4214 1.5625 15 1.5625ZM3.4375 15C3.4375 8.61421 8.61421 3.4375 15 3.4375C21.3857 3.4375 26.5625 8.61421 26.5625 15C26.5625 21.3857 21.3857 26.5625 15 26.5625C8.61421 26.5625 3.4375 21.3857 3.4375 15Z" fill="#FD7C58"/> 
                  </svg> 
                </button>
            </div>
            <div class="modal-body" style="padding: 0 36px 20px 36px">
                <h2 class="text-center" style="color: #02409F;">Авторизация</h2>
                <input type="text" style="font-size: 20px; height: 90px; border-radius: 15px; margin: 35px 0 20px 0;" placeholder="Логин" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                <input type="text" style="font-size: 20px; height: 90px; border-radius: 15px; margin-bottom: 20px;" placeholder="Пароль" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                <a href="index.php" style="color: #4170B7; text-decoration: none">Забыли пароль?</a>
            </div>
            <div class="modal-footer border-0" style="padding: 0 32px; margin: 0;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px; border-radius: 15px; width: 100%; height: 75px; background-color: #4170B7; margin-bottom: 60px;">Войти</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="secondModal" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 40px; font-size: 20px;">
      <div class="modal-header border-0" style="padding: 36px 36px 0 0;">
        <button type="button" class="btn" data-bs-dismiss="modal" style="margin: -1rem -1rem -1rem auto" aria-label="Close">
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> 
            <path d="M12.5379 11.2121C12.1718 10.846 11.5782 10.846 11.2121 11.2121C10.846 11.5782 10.846 12.1718 11.2121 12.5379L13.6742 15L11.2121 17.4621C10.846 17.8281 10.846 18.4218 11.2121 18.7879C11.5782 19.154 12.1718 19.154 12.5379 18.7879L15 16.3259L17.462 18.7879C17.8282 19.154 18.4218 19.154 18.7879 18.7879C19.154 18.4218 19.154 17.8281 18.7879 17.462L16.3258 15L18.7879 12.5379C19.154 12.1718 19.154 11.5782 18.7879 11.2121C18.4218 10.846 17.8282 10.846 17.462 11.2121L15 13.6741L12.5379 11.2121Z" fill="#FD7C58"/> 
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.5625C7.57868 1.5625 1.5625 7.57868 1.5625 15C1.5625 22.4214 7.57868 28.4375 15 28.4375C22.4214 28.4375 28.4375 22.4214 28.4375 15C28.4375 7.57868 22.4214 1.5625 15 1.5625ZM3.4375 15C3.4375 8.61421 8.61421 3.4375 15 3.4375C21.3857 3.4375 26.5625 8.61421 26.5625 15C26.5625 21.3857 21.3857 26.5625 15 26.5625C8.61421 26.5625 3.4375 21.3857 3.4375 15Z" fill="#FD7C58"/> 
          </svg>  
        </button>
      </div>
      <div class="modal-body" style="padding: 0 36px 20px 36px">
        <h2 class="text-center" style="color: #02409F;">Оставить заявку</h2>
        <input type="text" style="font-size: 20px; height: 90px; border-radius: 15px; margin: 35px 0 20px 0;" placeholder="Имя" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
        <input type="text" style="font-size: 20px; height: 90px; border-radius: 15px; margin-bottom: 20px;" placeholder="Адрес электронной почты" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
        <input type="text" style="font-size: 20px; height: 90px; border-radius: 15px; margin-bottom: 20px;" placeholder="Вопрос" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
      </div>
      <div class="modal-footer border-0" style="padding: 0 32px; margin: 0;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px; border-radius: 15px; width: 100%; height: 75px; background-color: #4170B7; margin-bottom: 60px;">Отправить</button>
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin: 180px auto;">
  <div class="row">
    <div class="col">
      <h4 class="pt-4 pb-5 pe-5 text-black" style="max-width: 600px; line-height: 40px;">Контролируй свои расходы за электроэнергию и исключай возможность воровства</h4>
      <button type="button" class="btn btn-lg text-white" style="background: #FD7C58; border-radius: 15px; width:300px; height: 60px" data-bs-toggle="modal" data-bs-target="#myModal">Присоединиться</button>
    </div>
  </div>
</div>
<div class="container mt-5" style="text-align: center;">
  <div class="row">
    <div class="col-md-3">
      <div class="card border-0" style="align-items: center">
        <img src="svg/home.svg" class="card-img-top" alt="Изображение 1" style="width: 40px;">
        <div class="card-body">
          <p class="card-title fs-5" style="color: #4B69C6;">Установка и обслуживание системы </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-2">
      <div class="card border-0" style="align-items: center">
        <img src="svg/desktop.svg" class="card-img-top" alt="Изображение 2" style="width: 40px;">
        <div class="card-body">
          <p class="card-title fs-5" style="color: #866FA1;">Контроль за расходом электроэнергии</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-0" style="align-items: center">
        <img src="svg/shield.svg" class="card-img-top" alt="Изображение 3" style="width: 40px;">
        <div class="card-body">
          <p class="card-title fs-5" style="color: #C2767D;">Исключение возможности воровства</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 250px;">
  <div class="row">
    <div class="col" style="align-items: center">
      <div class="row">
        <div class="col-sm">
          <img src="svg/main_first.png" style="width: 100%;">
        </div>
        <div class="col-sm">
          <img src="svg/main_second.png" style="width: 100%;">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-sm">
          <img src="svg/main_third.svg" style="width: 100%;">
        </div>
      </div>
    </div>
    <div class="col ms-5">
      <h2 class="color: #02409F;">АО "ННПО им. М.В. Фрунзе" </h2>
      <div class="row mt-5">
        <div class="col">
          <p class="mb-4 fs-5" style="line-height: 30px;">Нижегородское научно-производственное объединение имени М.В.Фрунзе – это разработчик и производитель современных высокотехнологичных радиоэлектронных приборов военного и гражданского назначения.</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">Сертификация системы менеджмента качества предприятия подтверждена сертификатом Системы сертификации «Военный регистр» о соответствии стандартам ГОСТ Р ИСО 9001-2015 и ГОСТ РВ 0015-002-2012.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="col">
            <p class="mb-4 fs-5" style="line-height: 30px;">Лицензия на осуществление деятельности по изготовлению и ремонту средств измерений, выданная Федеральным агентством по техническому регулированию и метрологии.</p>
            <a href="#" class="fs-6" style="line-height: 30px; color: #FD7C58;"><strong>Перейти на официальный сайт</strong></a>
          </div>
        </div>
        <div class="col-md-3 pt-4">
          <img src="svg/doc.png" alt="doc1" style="width: 100%;">
        </div>
        <div class="col-md-3 pt-4">
          <img src="svg/doc2.png" alt="doc2" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background: url('svg/miu.png') top no-repeat; margin: 130px 0;">
  <h3 class="text-white text-center pb-5" style="padding-top: 100px;">Тарифы на электроэнергию в Архангельской области</h3>
  <div class="container bg-white" style="border-radius: 40px; padding: 78px 70px; box-shadow: 0px 4px 50px 0px #00000040;">
      <table class="table text-center border-secondary">
        <thead class="align-middle">
          <tr>
            <th class="border-end border-secondary" rowspan="2">№</th>
            <th class="border-end border-secondary" style="width: 160px;" rowspan="2">Период</th>
            <th class="border-end border-secondary" rowspan="2">Одноставочный тариф, кВт.ч</th>
            <th class="border-end border-secondary border-bottom-0" colspan="2">Дифференцированный тариф по двум зонам суток</th>
            <th rowspan="2">Документ, устанавливающий тарифы</th>
          </tr>
          <tr>
            <td class="border-end border-secondary" style="width: 245px;">дневная зона (с 7 до 23 часов), кВт.ч</td>
            <td class="border-end border-secondary" style="width: 245px;">ночная зона (с 23 до 7 часов), кВт.ч</td>
          </tr>
        </thead>
        <tbody class="align-middle">
          <tr>
            <th class="border-end border-secondary">1</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65	руб за 1 кВт.ч</td>
            <td style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
          <tr>
            <th class="border-end border-secondary">2</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65	руб за 1 кВт.ч</td>
            <td style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
          <tr>
            <th class="border-end border-secondary">3</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65	руб за 1 кВт.ч</td>
            <td style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
          <tr>
            <th class="border-end border-secondary">4</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65	руб за 1 кВт.ч</td>
            <td style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
          <tr>
            <th class="border-end border-secondary">5</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65	руб за 1 кВт.ч</td>
            <td style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
          <tr>
            <th class="border-end border-secondary border-bottom-0">6</th>
            <td class="border-end border-secondary border-bottom-0">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary border-bottom-0">4.91	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary border-bottom-0">5.65	руб за 1 кВт.ч</td>
            <td class="border-end border-secondary border-bottom-0">1.65	руб за 1 кВт.ч</td>
            <td class="border-bottom-0" style="text-align: left;"><a href="#">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="svg/download.svg"></a></td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
<div class="container" style="margin-top: 130px;">
  <div class="row">
    <div class="col" style="align-items: center">
      <img src="svg/main_fourth.png" alt="">
    </div>
    <div class="col ms-5">
      <h2 style="color: #02409F;">Актуальные новости</h2>
      <div class="row mt-5">
        <div class="col">
          <h5 class="mb-4 fs-5" style="line-height: 30px;">Тариф на электроэнергию для квартир с электроплитами: как получить льготу?</h5>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="mb-4 fs-5" style="line-height: 30px;">Если плита на кухне электрическая, а не газовая, то тариф на электроэнергию будет ниже на 30%. Это своего рода льгота, которая предоставляется жильцами, чтобы компенсировать им более высокий расход электричества. И вот вопрос: как собственнику квартиры этот самый льготный тариф получить? Давайте разберемся...</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a class="fst-italic text-secondary" href="news_detail.php">Подробнее<img src="svg/line.svg" alt=""></a>
        </div>
        <div class="col">
          <p class="text-secondary" style="text-align: right;">13.03.2020</p>
        </div>
      </div>
      <div class="row" style="margin-top: 110px;">
        <div class="col">
          <a href="news.php" class="btn btn-lg p-4" style="width:350px; border: 1px solid #FD7C58; border-radius: 15px;">Все новости</a>
        </div>
        <div class="col align-bottom" style="text-align: right; padding-top: 45px">
          <a class="me-3" href="#"><img src="svg/left.svg" alt=""></a> <a href="#"><img src="svg/right.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background: url('svg/miu2.png') bottom no-repeat; margin-top: 140px;">
  <div class="container bg-white" style="box-shadow: 0px 4px 50px 0px #00000040; border-radius: 40px;">
  <div class="row" style="padding: 60px 0">
    <div class="col ms-5">
      <h2 style="color: #02409F;">О компании</h2>
      <div class="row mt-5">
        <div class="col">
          <p class="mb-4 fs-5" style="line-height: 30px;">ООО “ЭНСА” ведет установку и обслуживание системы АИИС КУЭ на базе КТС “МАЯК”.</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">С нашей помощью СНТ, СОТы и любые граждане контролируют свои расходы за электроэнергию и исключают возможность воровства.</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">На сайте Вы можете получить всю необходимую информацию по потребленной и оплаченной злектроэнергии</p>
          <p class="mb-4 fs-5" style="line-height: 30px;">Чтобы присоединиться или узнать подробности подключения обратитесь по адресу <a href="#" style="color: #FD7C58">dm.5265@mail.ru</a> или <a href="#" style="color: #FD7C58">оставить заявку</a> на сайта и мы свяжемся с Вами.</p>
        </div>
      </div>
    </div>
    <div class="col mt-4">
      <img src="svg/nout.png" alt="">
    </div>
  </div>
  </div>
</div>
<?php include("footer.php");?>